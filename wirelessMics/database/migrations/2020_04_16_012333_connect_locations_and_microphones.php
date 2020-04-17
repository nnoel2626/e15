<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectLocationsAndMicrophones extends Migration
{
            /**
             * Run the migrations.
             *
             * @return void
             */
        public function up()
        {
            Schema::table('microphones', function (Blueprint $table) {

                # Add a new bigint field called `location_id`
                # has to be unsigned (i.e. positive)
                # nullable so it's possible to have a book without an author
                $table->bigInteger('location_id')->unsigned()->nullable();

                # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
                $table->foreign('location_id')->references('id')->on('locations');

            });
        }
        /**
             * Reverse the migrations.
             *
             * @return void
             */
        public function down()
        {
            Schema::table('microphones', function (Blueprint $table) {

                # ref: http://laravel.com/docs/migrations#dropping-indexes
                # combine tablename + fk field name + the word "foreign"
                $table->dropForeign('microphones_location_id_foreign');

                $table->dropColumn('location_id');
            });
        }



}
