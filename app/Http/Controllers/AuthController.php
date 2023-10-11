<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                    
                        return redirect('/admin/dashboard')->with('message', 'Berhasil Login');
                        break;
                    case 'peternak':
                    
                        return redirect('/peternak/dashboard')->with('message', 'Berhasil Login');
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

}
