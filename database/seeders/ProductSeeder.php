<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Lg Mobile',
                "price"=>"10000",
                "description"=>"We can not guarantee that the information on this page is 100% correct.",
                "category"=>'mobile',
                "gallery"=>"https://fdn2.gsmarena.com/vv/pics/lg/lg-w11-1.jpg"
            ],
            [
                'name'=>'Lg',
                "price"=>"10000",
                "description"=>"We can not guarantee that the information on this page is 100% correct.",
                "category"=>'tv',
                "gallery"=>"https://fdn2.gsmarena.com/vv/pics/lg/lg-w11-1.jpg"
            ],
            [
                'name'=>'Intel',
                "price"=>"10000",
                "description"=>"We can not guarantee that the information on this page is 100% correct.",
                "category"=>'pc',
                "gallery"=>"https://fdn2.gsmarena.com/vv/pics/lg/lg-w11-1.jpg"
            ],
            [
                'name'=>'Lg',
                "price"=>"10000",
                "description"=>"We can not guarantee that the information on this page is 100% correct.",
                "category"=>'Fridge',
                "gallery"=>"https://fdn2.gsmarena.com/vv/pics/lg/lg-w11-1.jpg"
            ],
        ]
        );
    }
}
