<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComparedProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compared_product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('compared_id');
            $table->integer('company_id');
            $table->integer('comparison_criteria_id');
            $table->integer('type');
            $table->integer('int_value');
            $table->string('str_value');
            $table->string('unit');
            $table->string('remarks');
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
        Schema::dropIfExists('compared_product_details');
    }
}
