<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrophonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microphones', function (Blueprint $table) {
            $table->id();
              # AI, PK
            # Define foreign keys...
            $table->string('slug');
            #location
            // $table->string('building');
            // $table->string('room');
            #equipment
            $table->string('make');
            $table->string('model');
            $table->string('band');
            $table->string('frequency_range');
            $table->string('serial_number');
            #frequency
            $table->string('type');
            $table->string('group');
            $table->string('channel');
            $table->string('assigned_frequency');
            $table->string('comments');


            //$table->string('image_path');
            # created_at, updated_at columns
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
        Schema::dropIfExists('microphones');
    }
}
