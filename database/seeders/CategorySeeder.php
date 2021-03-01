<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Animals',
            'slug'=>'animals',
            'description'=>'Meet the Jellycat menagerie here!'
        ]);
        Category::create([
            'name'=>'Books',
            'slug'=>'books',
            'description'=>'Sweet stories and reading buddies for little ones!'
        ]);
        Category::create([
            'name'=>'Amuseables',
            'slug'=>'amuseables',
            'description'=>'Fun, Foody, and Fabulous!'
        ]);
    }
}
