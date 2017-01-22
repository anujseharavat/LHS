<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigatorList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigator_list', function (Blueprint $table) {
            $table->increments('list_id');
            $table->string('name');
            $table->string('main_page');
        });

        DB::table('navigator_list')
                ->insert([

                    [
                        'name' => 'Dashboard',
                        'main_page' => '/',
                    ],
                    [
                        'name' => 'Reporting',
                        'main_page' => 'reporting',
                    ],
                    [
                        'name' => 'Order History',
                        'main_page' => 'order-history',
                    ],
                    [
                        'name' => 'Knowledge Center',
                        'main_page' => 'knowledge-center',
                    ],
                    [
                        'name' => 'Need Help',
                        'main_page' => 'help',
                    ],

                ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigator_list');
    }
}
