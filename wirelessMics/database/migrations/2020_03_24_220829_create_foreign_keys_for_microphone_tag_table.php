<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForMicrophoneTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('microphone_tag', function (Blueprint $table) {
            $table->foreign('microphone_id')->references('id')->on('microphones')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('microphone_tag', function (Blueprint $table) {
        $table->dropForeign('microphone_tag_microphone_id_foreign');
        $table->dropForeign('microphone_tag_tag_id_foreign');

        });
    }
}
