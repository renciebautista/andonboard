<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            // $table->timestamps();
        });

        DB::table('log_statuses')->insert([
            ['id' => '1', 'status' => "PENDING"],
            ['id' => '2', 'status' => "ONGOING"],
            ['id' => '3', 'status' => "FINISHED"],
            ['id' => '4', 'status' => "CANCELED"]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log_statuses');
    }
}
