<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebugInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debug_info', function (Blueprint $table) {
            $table->increments('debug_info_id');
            $table->tinyInteger('debug_type_id')->comment = "1 - Info | 2 - Error | 3 - Un Auth/Session_Out";
            $table->string('message');
            $table->tinyInteger('debug_msg_status')->comment = "1 - New/Unread | 2 - Read";
            $table->dateTime('debug_msg_time')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debug_info');
    }
}
