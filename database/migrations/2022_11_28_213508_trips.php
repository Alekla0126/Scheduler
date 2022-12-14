<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class Trips extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('trips', function (Blueprint $table) {
				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('user_id')->on('users')
						->onUpdate('cascade');
				$table->increments('trip_id');
                $table->timestamps();
				$table->string('origin');
                $table->string('destiny');
				$table->string('hour');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('trips');
        }
    }
