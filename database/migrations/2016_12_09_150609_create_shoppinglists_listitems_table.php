<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppinglistsListitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ShoppingLists_ListItems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shopping_list_id')->unsigned();
            $table->foreign('shopping_list_id')->references('id')->on('ShoppingLists')->onDelete('cascade');
            $table->integer('list_item_id')->unsigned();
            $table->foreign('list_item_id')->references('id')->on('ListItems')->onDelete('cascade');
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
        Schema::drop('ShoppingLists_ListItems');
    }
}
