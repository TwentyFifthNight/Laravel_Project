<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DBinit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `games`(`id`,`name`,`img`,`created_at`,`updated_at`) VALUES
            (1,"God of War", "gow.png",NOW(),NOW()),
            (2,"Elden Ring", "e_r.png",NOW(),NOW()),
            (3,"Euro Truck Simulator", "ets2.png",NOW(),NOW()),
            (4,"Green Hell", "gh.png",NOW(),NOW()),
            (5,"God of War Ragnarok", "gowr.png",NOW(),NOW()),
            (6,"Grand Theft Auto V", "gtav.png",NOW(),NOW()),
            (7,"Kingdom Come Deliverence", "kcd.png",NOW(),NOW()),
            (8,"League of Legends", "lol.png",NOW(),NOW()),
            (9,"Mount & Blade Warband", "mbw.png",NOW(),NOW()),
            (10,"Sekiro", "sekiro.png",NOW(),NOW()),
            (11,"Smite", "smite.png",NOW(),NOW()),
            (12,"CS GO", "csgo.png",NOW(),NOW())');
        
        DB::insert('INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
            (1, "Damian", "damianweclawski@gmail.com", NULL, "$2y$10$UikmtgNXLQAXHQXUyutBYe.uHl5S0EG5xtzMfHX8Rkbz5NmKEgbfO", NULL, "2023-02-01 16:07:30", "2023-02-01 16:07:30"),
            (2, "Eryk", "eryk@gmail.com", NULL, "$2y$10$SUR8totQwSbo6kfgpslF.utzcH3l2WNDxZufPcrLJjnM.MYgXTpZW", NULL, "2023-02-01 16:08:54", "2023-02-01 16:08:54"),
            (3, "Kuba", "kuba@gmail.com", NULL, "$2y$10$rBJG2z1P1WZhPXuZ3jnl2eW/mR/vFt5.TQJkkNU3MYrkjZLGggx8C", NULL, "2023-02-01 16:09:26", "2023-02-01 16:09:26"),
            (4, "Adam", "adam@gmail.com", NULL, "$2y$10$DkOwQ2PMTLW4i3yWdNljw.i.05pzsvJZVYMwkbl7TuDD.g6kveVwu", NULL, "2023-02-01 16:09:52", "2023-02-01 16:09:52"),
            (5, "Kamil", "kamil@gmail.com", NULL, "$2y$10$ulcFp9P.Se3ZY8jwlAsUo.oqEkbepays8BT5IKLkque2sJHnSaEke", NULL, "2023-02-01 16:10:40", "2023-02-01 16:10:40")');
        
    }
}
