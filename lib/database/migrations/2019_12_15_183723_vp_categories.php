<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_categories', function (Blueprint $table) {

            $table->increments('cate_id')->unsigned();
            $table->string('cate_name');
            $table->string('cate_slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vp_categories');
    }
}
// tạo ra chuỗi ko khoản trắng để ngăn cách giữa cá kí tự trong chuỗi đó là dấu gạch ngang .. thường hay để trên đường link để xem 1 danh mục hay 1 sản phẩm nào đó