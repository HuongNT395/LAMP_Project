<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate = new Category();
        $cate->name = 'Music';
        $cate->save();
    }
}
