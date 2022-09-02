<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $banner=[
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],
            [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ],  [
                'title'=>'banner',
                'image'=>'bn.png',
                'valid_till'=>'10-1-2022'
            ]

        ];

        Banner::insert($banner);
    }
}
