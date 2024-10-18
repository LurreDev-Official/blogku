<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Tech', 'Health', 'Business', 'Education'];
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
