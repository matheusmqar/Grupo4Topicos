<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FornecedorMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_material', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->bigInteger('material_id')->unsigned();
            $table->bigInteger('fornecedor_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');
            $table->unique(['material_id','fornecedor_id']);
        
        }
    );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_material');
        
    }
}
