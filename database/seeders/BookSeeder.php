<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'book_name' => Str::random(10),
            'book_author' => Str::random(10),
            'book_type' => Str::ranphpdom(10),
            'book_price' => Str::random(10),
        ]);
    }
}
