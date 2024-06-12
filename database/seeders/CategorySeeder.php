<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catnames = ['Pants','Sharee','Kurti/Kamija','Ladies Pants','Gents Pants','Cosmetic','Juwelierie'];
        foreach($catnames as $catname){
            Category::create(['name' => $catname]);
        }
    }
}
