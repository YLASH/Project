<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id("pid");
            $table->string("pname");
            $table->string("picktime");
            $table->string("pickzip");
            $table->string("pickplace");
            $table->string("quantity")->nullable();
            $table->string("description")->nullable();
            $table->string("filename")->nullable();
            $table->string("userid");
            $table->string("pstatus");
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
        Schema::dropIfExists('products');
    }
}
