<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid');
            $table->string('name');
            $table->string('POC');
            $table->string('contact');
            $table->string('postal');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('cellphone');
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('TaxID')->nullable();
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
        Schema::dropIfExists('suplliers');
    }
}
