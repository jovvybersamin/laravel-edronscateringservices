<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMenuTypeIdToMenuIdOnMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            //$table->dropForeign('menu_items_menu_type_id_foreign');
            $table->renameColumn('menu_type_id','menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->renameColumn('menu_id','menu_type_id');
            $table->foreign('menu_type_id')->references('id')->on('menus');
        });
    }
}
