<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function postregister(Request $request)
    {
        
        $input = $request->all();

        $rules = [

            'username'     => 'required',
            'password'  => 'required',
            'nohp'  => 'required',
            'nama'  => 'required',
            'email'  => 'required',
            'dusun'  => 'required',
        ];
        // error message untuk validasi
        $message = [
            'required' => ':attribute tidak boleh kosong!'
        ];
        // instansiasi validator
        $validator = Validator::make($request->all(), $rules, $message);

        // proses validasi
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        if($request->password!=$request->kpassword){
            return redirect()->back()->with('error','Password tidak sama');
        }

        if (User::where('username', '=', $input['username'])->first() == false) {
            $request->merge([
                'role' => 'peternak',
                'password' => bcrypt($request->password),            
                'nama' => $request->nama,
                'email' => $request->email,
                'nohp' => $request->nohp,
                'username' => $request->username,
                'email' => $request->email,
                'dusun' => $request->dusun,
                'status_akun' =>"0",
                
            ]);
            User::create($request->except(['_token']));

            return redirect('login')->with('message', 'Berhasil Mendaftar');
            // return $i;
        } else {
            // return "eror";
            return redirect()->back()->with('error', 'username sudah terdaftar');
        }
    }
    public function postlogin(Request $request)
    {

        $input = $request->all();

        $rules = [

            'username'     => 'required',
            'password'  => 'required',
        

        ];
        // error message untuk validasi
        $message = [
            'required' => ':attribute tidak boleh kosong!'
        ];
        // instansiasi validator
        $validator = Validator::make($request->all(), $rules, $message);

        // proses validasi
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
        if (User::where('username', '=', $input['username'])->first() == true) {
            if(User::where('username',$request->username)->where('status_akun','1')->first()){
            if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
                
                switch (Auth::user()->role) {
                    case 'admin':
                    
                        return redirect('/admin/dashboard')->with('success', 'Berhasil Login');
                        break;
                    case 'peternak':
                    
                        return redirect('/peternak/dashboard')->with('success', 'Berhasil Login');
                        break;
                    default:
                        return redirect('/login');
                        break;
                }
            } else {
                return redirect()->back()
                    ->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()
                
                ->with('error', 'Akun Belum terverifikasi. Silahkan hubungi admin untuk verifikasi akun');
        }
    }else{
            return redirect()->back()
            ->with('error', 'Username tidak ada atau belum terdaftar');
        }
        // }
    }

    public function login()
    {
        if(auth()->check()){
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect('/admin/dashboard');
                    break;
                case 'peternak':
                    return redirect('/peternak/dashboard');
                    break;
                default:
                    return redirect('/login');
                    break;
            }
        }
        return view('auth.login');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
      }

      public function lupa_password_post(Request $request){
        $cekemail= User::where('email',$request->email)->first();
        $token = $this->getRandomString();
     
        // return $cekemail;

        if($cekemail){
            $email= $cekemail->email;

            // if($cekemail->token_lupapassword){
               

            $req=[
                'token_lupapassword' =>$token,
            ];

            // return $req;

            $cekemail->update($req);
        // }

          

            $link = getenv('APP_URL') . "password_baru/".$cekemail->token_lupapassword;
            $name = $cekemail->name;
            $data = [
                'name' => $name,
                'body' => "Kepada Pengguna : $name. ",
              
                'link' => "$link"
            ];
     
            Mail::send('email.lupapassword', $data, function ($message) use ($name, $email) {
     
       
                $message->to($email, $name)->subject('Pemberitahuan DISFAR');
            });
            return redirect()->back()
            ->with('message', 'Silahkan cek email anda untuk melakukan perubahan paswword anda');
            // return redirect('lupa_password')->with('message', 'Berhasil Mendaftar');

        }else{

            return redirect()->back()
            ->with('error', 'email tidak terdaftar. silahkan masukkan email terdaftar');

        }
        
    }

    public function password_baru($id)
    {
        $token_lp = User::where('token_lupapassword',$id)->first();
        if($token_lp){
        return view('auth.password_baru',compact('id'));

        }else{

            return "Kode token salah. silahkan langi lupa password";

        }
      
    }
    public function password_baru_post($id,Request $request)
    {
        $rules = [

 
            'password'  => 'required',
            // 'ulangi_password'=>'same:password'
             
        ];
          // error message untuk validasi
          $message = [
            'required' => ':attribute tidak boleh kosong!'
        ];
        // instansiasi validator
        $validator = Validator::make($request->all(), $rules, $message);
        
        // proses validasi
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        if($request->password!=$request->ulang_password){
            return redirect()->back()->with('error', 'Pastikan Password dan Konfirmasi Password Sama');
    
        }
        $token_lp = User::where('token_lupapassword',$id)->update([
            'password'=>bcrypt($request->password),
            'token_lupapassword'=>'',
        ]);

        if($token_lp){
         return redirect('login')
            ->with('message', 'berhasil ubah password');

        }else{

            return redirect()->back()->with('error', 'Gagal ubah password');

        }
      
    }

    public function getRandomString($panjang = 50)
	{
		$karakter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$panjang_karakter = strlen($karakter);
		$randomString = '';
		for ($i = 0; $i < $panjang; $i++) {
			$randomString .= $karakter[rand(0, $panjang_karakter - 1)];
		}
		return $randomString;
	}


    
    public function getprofil(){
        $users =User::where('id',auth()->user()->id)->first();
        // $users->foto = asset('public/images/profil/'.$users->foto);
        // return $users;

        return view('peternak.profil',compact('users'));
    }

    public function profile_update(Request $request)
    {
        $req = $request->all();
        if($request->password){
            auth()->user()->update([
                'password'=> bcrypt($request->password)
            ]);


        }else{
           
            if($request->hasFile('foto')){
                $tujuan_upload = public_path('images/profil');
                $file = $request->file('foto');
                $namaFile = Carbon::now()->format('Ymd') . $file->getClientOriginalName();
                $file->move($tujuan_upload, $namaFile);
                // return $file;
                $req['foto'] = $namaFile;
            }
            // return $req;
            auth()->user()->update($req);
        }

       
        return redirect('peternak/profil')->with('success','Profile Admin Berhasil diupdate');
    }

    public function ganti_password()
    {
        return view('peternak.profil_password');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'password'=>'required'
        ]);

        auth()->user()->update([
            'password'=>bcrypt($request->password)
        ]);

        return redirect('peternak/dashboard')->with('success','Password Berhasil diupdate');
    }

}
