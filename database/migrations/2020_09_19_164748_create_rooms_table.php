<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_number')->unique();
            $table->string('room_type');
            $table->decimal('price',8,2);
            $table->string('max_capacity');
            $table->string('num_of_bed');
            $table->text('descriptions');
            $table->text('facilities');
            $table->string('image');
            $table->enum('available',[0,1]);
            $table->enum('publish',[0,1]);
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
        Schema::dropIfExists('rooms');
    }
}
