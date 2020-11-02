<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdcutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodcuts', function (Blueprint $table) {
            $table->id();
            $table->string("pname");
            $table->string("picktime");
            $table->string("pickzip");
            $table->string("pickplace");
            $table->string("quantity")->nullable();
            $table->string("description")->nullable();
            $table->string("filename")->nullable();
            $table->string("userid");
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
        Schema::dropIfExists('prodcuts');
    }
}
