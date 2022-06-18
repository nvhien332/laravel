<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
        		'email'=>'phanvietlong@gmail.com',
        		'password'=>bcrypt('123456789'),//max hoa 
        		'level'=>1

        	],
        		[
        		'email'=>'admin@gmail.com',
        		'passwork'=>bcrypt('123456789'),//max hoa 
        		'lavel'=>1

        	],

        ];
        DB::table('vp_users')->insert($data);
    }
}
//tạo ra 1 controller để sử lý rồi đổ dữ liệu đăng nhập ra...bước 1 php artisan make:controller Admin\LoginControllerc có nghĩa là lưu vào thư mục admin có tên là LoginController