<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        	    'cate_name'=>'Đất 1A đối diện cổng chào xã Kỳ Thọ',
        	    'cate_slug'=>str_slug('Đất 1A đối diện cổng chào xã Kỳ Thọ')
        	],
        	[
        	    'cate_name'=>'Đất biệt thự mặt tiền 15m',
        	    'cate_slug'=>str_slug('Đất biệt thự mặt tiền 15m')
        	],


        ];
        DB::table('vp_categories')->insert($data);
    }
}
//sau do tao 1 model de quang ly bang  categories
