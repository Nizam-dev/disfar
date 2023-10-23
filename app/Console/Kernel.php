<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;
use App\Models\RiwayatReproduksiKambing;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
                
            $date14 = \Carbon\Carbon::now()->subDays(14);
            $date28 = \Carbon\Carbon::now()->subDays(28);
            $data = RiwayatReproduksiKambing::select('riwayat_reproduksi_kambings.tanggal_kawin',"riwayat_reproduksi_kambings.id",
            "users.email","profil_kambings.nomor_ternak","profil_kambings.jenis_kambing","users.nama")
            ->where("tanggal_kawin",$date14->format('Y-m-d'))
            ->orWhere("tanggal_kawin",$date28->format('Y-m-d'))
            ->join("profil_kambings","profil_kambings.id","riwayat_reproduksi_kambings.profil_kambing_id")
            ->join("users","users.id","profil_kambings.user_id")
            ->get();       
            foreach($data as $email){
                $data_email = [
                    "nama"=>$email->nama,
                    "nomor_ternak"=>$email->nomor_ternak,
                    "jenis_kambing"=>$email->jenis_kambing,
                ];
                Mail::to($email->email)->send(new SendEmail($data_email));
            }

                Log::info('Cronjob berhasil dijalankan');
            })->dailyAt("07:00");
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
