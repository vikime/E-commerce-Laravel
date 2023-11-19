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
            ['name' => 'Samsung',
            'price' => 'Rs.400',
            'category' => 'mobile',
            'gallery' => 'https://img.global.news.samsung.com/in/wp-content/uploads/2022/03/SM-A536_Galaxy-A53-5G_Awesome-Peach_Front-1024x683.jpg',
            'description' => 'a smartphone next generation'
        ],
        ['name' => 'Oppo',
            'price' => '4000',
            'category' => 'mobile',
            'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2020/12/WI/VR/VK/118676901/oppo-f17-pro-mobile.jpg',
            'description' => 'a smartphone next generation but china ka maal hai chale to chand tak varna raat tak'
    ],
    ['name' => 'Samsung tv',
            'price' => '50000',
            'category' => 'tv',
            'gallery' => 'https://img.global.news.samsung.com/global/wp-content/uploads/2019/01/Samsung-TV_iTunes-Movies-and-TV-shows_main.jpg',
            'description' => 'a smartphone next generation'
        ],
       ['name' => 'ipad',
            'price' => '100000',
            'category' => 'mobile',
            'gallery' => 'https://www.apple.com/newsroom/images/product/os/ipados/Apple_iPadOS_Today-View_060319_big.jpg.large.jpg',
            'description' => 'a smartphone next generation'
        ]
        
        ]);
    }
}