<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->userName = "HoaiTTT";
        $author->password = "123456";
        $author->email = "hoaittt.nal.vn";
        $author->save();
    }
}
