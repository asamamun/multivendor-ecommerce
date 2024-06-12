<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcatnames = [
            'Pants'=>['Denim','Gavadin',],
            'Sharee'=>['Katan','Jamdani','Benaroshi','Cotton','Silk',],
            'Kurti/Kamija'=>['Cotton','Organza'],
            'Ladies Pants'=>['Plazoo','Denim'],
            'Gents Pants'=>['Coat & pants','Formal pants',],
            'Cosmetic'=>['Facecream','lipstick','Bodylotion'],
            'Juwelierie'=>['Gold','Silver','Platinum'],
        ];

        foreach($subcatnames as $catname => $subcat){
            foreach($subcat as $subcatname){
                $catid = Category::where('name',$catname)->first()->id;
                \App\Models\Subcategory::create(['name' => $subcatname,'category_id' => $catid]);
            }
        }
    }
}
