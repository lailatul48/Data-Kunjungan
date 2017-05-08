<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('log', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->string('description');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('log');
    }

}
