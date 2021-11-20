<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('list_id')->references('id')->on('lists');
            $table->string('name', 30)->require;
            $table->text('description')->nullable();
            $table->enum('priority', ['IMPORTANT', 'LESS_IMPORTANT'])->nullable();
            $table->timestamp('end_data')->nullable();
            $table->enum('status', ['NEW', 'IN_PROCESS', 'COMPLETED'])->nullable();
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
        Schema::dropIfExists('cards');
    }
}
