<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesInit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `likes` (`id`, `user_id`, `review_id`) VALUES
            (1, 2, 5),
            (2, 2, 8),
            (3, 2, 7),
            (4, 2, 2),
            (5, 1, 6),
            (6, 1, 8),
            (7, 1, 2),
            (8, 5, 1),
            (9, 5, 7),
            (10, 5, 6)');
    }
}
