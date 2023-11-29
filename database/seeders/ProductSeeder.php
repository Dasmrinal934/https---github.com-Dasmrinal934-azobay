<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([ 
            [
                'products_name'=>'SAMSUNG Galaxy F14 5G (GOAT Green, 128 GB)  (6 GB RAM)#JustHere',
                'products_price'=>'₹14,990',
                'products_description'=>'6 GB RAM | 128 GB ROM | Expandable Upto 1 TB
                16.76 cm (6.6 inch) Full HD+ Display
                50MP + 2MP | 13MP Front Camera
                6000 mAh Battery
                Exynos 1330, Octa Core Processor',
                'products_categories'=>'mobile',
                'galery'=>'https://rukminim2.flixcart.com/image/416/416/xif0q/mobile/g/n/k/-original-imagtyxb86ddjhzh.jpeg?q=70'
            ],
            [
                'products_name'=>'vivo V27 Pro 5G (Magic Blue, 256 GB)  (8 GB RAM)',
                'products_price'=>'₹36,999',
                'products_description'=>'8 GB RAM | 256 GB ROM
                17.22 cm (6.78 inch) Full HD+ Display
                50MP (OIS) + 8MP + 2MP | 50MP Front Camera
                4600 mAh Battery
                Mediatek Dimensity 8200 Processor',
                'products_categories'=>'mobile',
                'galery'=>'https://rukminim2.flixcart.com/image/416/416/xif0q/mobile/b/f/m/-original-imagna3ezkdusyrz.jpeg?q=70'
            ],
            [
                'products_name'=>'REDMI Note 12 Pro 5G (Onyx Black, 128 GB)  (6 GB RAM)',
                'products_price'=>'₹21,999',
                'products_description'=>'6 GB RAM | 128 GB ROM
                16.94 cm (6.67 inch) Full HD+ AMOLED Display
                50MP (OIS) + 8MP + 2MP | 16MP Front Camera
                5000 mAh Lithium Polymer Battery
                Mediatek Dimensity 1080 Processor',
                'products_categories'=>'mobile',
                'galery'=>'https://rukminim2.flixcart.com/image/416/416/xif0q/mobile/b/r/f/-original-imaghkvuhzwge3za.jpeg?q=70'
            ],
            [
                'products_name'=>'Google Pixel 7a (Sea, 128 GB)  (8 GB RAM)',
                'products_price'=>'₹39,999',
                'products_description'=>'8 GB RAM | 128 GB ROM
                15.49 cm (6.1 inch) Full HD+ Display
                64MP (OIS) + 13MP | 13MP Front Camera
                4300 mAh Battery
                Tensor G2 Processor',
                'products_categories'=>'mobile',
                'galery'=>'https://rukminim2.flixcart.com/image/416/416/xif0q/mobile/z/b/d/-original-imagpgx48f4szdvf.jpeg?q=70'
            ]
    
            ]);
    }
}
