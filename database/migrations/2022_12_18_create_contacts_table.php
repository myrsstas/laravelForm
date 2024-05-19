<?php
//Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0
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
            $table->string('surname');
            $table->date('date_of_birth');
            $table->unsignedInteger('phone_number') ->unique();
            $table->string('email') ->unique();
            $table->string('address') ;
            $table->string('city') ;
            $table->text('notes')  ;
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
