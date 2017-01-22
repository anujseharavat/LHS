<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigatorSubList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigator_sub_list', function (Blueprint $table) {
            $table->increments('navigator_sub_list_id');
            $table->integer('list_id');
            $table->string('name');
            $table->string('main_page');

        });

        DB::table('navigator_sub_list')
                ->insert([

                    [
                        'list_id' => 2,
                        'name' => 'Executive',
                        'main_page' => 'reporting-executive',
                    ],
                    [
                        'list_id' => 2,
                        'name' => 'Technical',
                        'main_page' => 'reporting-technical',
                    ]

                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigator_sub_list');
    }
}
