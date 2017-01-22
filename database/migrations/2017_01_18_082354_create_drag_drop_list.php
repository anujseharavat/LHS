<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDragDropList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drag_drop_lists', function (Blueprint $table) {
            $table->increments('drag_drop_list_id');
            $table->string('list_name');
        });

        Schema::create('drag_drop_sub_items', function (Blueprint $table) {
            $table->increments('drag_drop_sub_item_id');
            $table->integer('drag_drop_list_id');
            $table->string('sub_list_item_name');
        });

        DB::table('drag_drop_lists')
                ->insert([
                    [
                        'drag_drop_list_id' => 1,
                        'list_name' => 'Books'
                    ],
                    [
                        'drag_drop_list_id' => 2,
                        'list_name' => 'Courses'
                    ],
                    [
                        'drag_drop_list_id' => 3,
                        'list_name' => 'Materials'
                    ],

                ]);

        DB::table('drag_drop_sub_items')
            ->insert([

                //Books
                [
                    'drag_drop_sub_item_id' => 1,
                    'drag_drop_list_id' => 1,
                    'sub_list_item_name' => 'Book 1'
                ],
                [
                    'drag_drop_sub_item_id' => 2,
                    'drag_drop_list_id' => 1,
                    'list_name' => 'Book 2'
                ],

                //Courses
                [
                    'drag_drop_sub_item_id' => 3,
                    'drag_drop_list_id' => 2,
                    'list_name' => 'Course 1'
                ],
                [
                    'drag_drop_sub_item_id' => 4,
                    'drag_drop_list_id' => 2,
                    'list_name' => 'Course 2'
                ],
                [
                    'drag_drop_sub_item_id' => 5,
                    'drag_drop_list_id' => 2,
                    'list_name' => 'Course 3'
                ],

                //Materials
                [
                    'drag_drop_sub_item_id' => 6,
                    'drag_drop_list_id' => 3,
                    'list_name' => 'Material 1'
                ],
                [
                    'drag_drop_sub_item_id' => 7,
                    'drag_drop_list_id' => 3,
                    'list_name' => 'Material 2'
                ],
                [
                    'drag_drop_sub_item_id' => 8,
                    'drag_drop_list_id' => 3,
                    'list_name' => 'Material 3'
                ],
                [
                    'drag_drop_sub_item_id' => 9,
                    'drag_drop_list_id' => 3,
                    'list_name' => 'Material 4'
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
        Schema::dropIfExists('drag_drop_lists');
        Schema::dropIfExists('drag_drop_sub_items');
    }
}
