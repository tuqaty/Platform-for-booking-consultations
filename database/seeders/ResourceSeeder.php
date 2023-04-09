<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resource::create([
            'name'=>'خشب بلوط',
            'is_essential'=>1,
            'quantity'=>143,
            'unit'=>'متر',
            'quantity_limit'=>100,
            'unit_price'=>12000
        ]);
        Resource::create([
            'name'=>'خشب جوز',
            'is_essential'=>1,
            'quantity'=>654,
            'unit'=>'متر',
            'quantity_limit'=>210,
            'unit_price'=>14000
        ]);
        Resource::create([
            'name'=>'خشب سنديان',
            'is_essential'=>1,
            'quantity'=>225,
            'unit'=>'متر',
            'quantity_limit'=>115,
            'unit_price'=>20500
        ]);
        Resource::create([
            'name'=>'حديد',
            'is_essential'=>1,
            'quantity'=>78,
            'unit'=>'كيلو',
            'quantity_limit'=>80,
            'unit_price'=>15000
        ]);
        Resource::create([
            'name'=>'صدف',
            'is_essential'=>0,
            'quantity'=>25,
            'unit'=>'كيلو',
            'quantity_limit'=>15,
            'unit_price'=>18500
        ]);
        Resource::create([
            'name'=>'زجاج',
            'is_essential'=>0,
            'quantity'=>143,
            'unit'=>'متر',
            'quantity_limit'=>100,
            'unit_price'=>12000
        ]);
        Resource::create([
            'name'=>'ألمنيوم',
            'is_essential'=>1,
            'quantity'=>143,
            'unit'=>'كيلو',
            'quantity_limit'=>100,
            'unit_price'=>12000
        ]);
        Resource::create([
            'name'=>'قماش',
            'is_essential'=>1,
            'quantity'=>143,
            'unit'=>'متر',
            'quantity_limit'=>100,
            'unit_price'=>12000
        ]);
        Resource::create([
            'name'=>'دهان أبيض',
            'is_essential'=>1,
            'quantity'=>143,
            'unit'=>'كيلو',
            'quantity_limit'=>100,
            'unit_price'=>40000
        ]);
        Resource::create([
            'name'=>'دهان بني غامق',
            'is_essential'=>1,
            'quantity'=>143,
            'unit'=>'كيلو',
            'quantity_limit'=>100,
            'unit_price'=>40000
        ]);Resource::create([
            'name'=>'دهان أسود',
            'is_essential'=>0,
            'quantity'=>143,
            'unit'=>'كيلو',
            'quantity_limit'=>100,
            'unit_price'=>40000
        ]);
        Resource::create([
            'name'=>'غراء',
            'is_essential'=>1,
            'quantity'=>143,
            'unit'=>'كيلو',
            'quantity_limit'=>100,
            'unit_price'=>20000
        ]);
        Resource::create([
            'name'=>'ألمنيوم',
            'is_essential'=>0,
            'quantity'=>143,
            'unit'=>'كيلو',
            'quantity_limit'=>100,
            'unit_price'=>12000
        ]);
    }
}
