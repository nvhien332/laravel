<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('prod_id')->unsigned();
            $table->string('prod_name');
            $table->string('prod_slug');
            $table->integer('prod_price');//giá 
            $table->string('prod_img');//ảnh
            $table->string('prod_condition');//tình trạng
            $table->string('prod_promotion');//khuyến mãi 
            $table->tinyInteger('prod_status');//trạng thái
            $table->text('prod_description');//miêu tả
            $table->tinyInteger('prod_featured');
            $table->integer('prod_cate')->unsigned();//danh mục 

            

            $table->timestamps();
        });

        Schema::table('vp_products', function($table)
        {
            $table->foreign('prod_cate')
                   ->references('cate_id')
                   ->on('vp_categories')
                   ->onDelete('cascade');//khóa phụ,khóa ngoại

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vp_products');
    }
}
// vì sẽ liên kết với bảng categories nên sẽ phải có khóa phụ
