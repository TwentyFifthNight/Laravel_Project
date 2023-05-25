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
    }
}
