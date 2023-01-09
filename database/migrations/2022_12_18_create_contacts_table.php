<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('surname') -> default(' - ');
            $table->date('date_of_birth') -> default('0000-00-00');
            $table->unsignedInteger('phone_number') ->unique();
            $table->string('email') ->unique();
            $table->string('address') -> default(' - ') ;
            $table->string('city') -> default(' - ') ;
            $table->text('notes') -> default(' - ') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
