<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourceListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_list_items', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('source')->nullable();
            $table->string('category')->nullable();;
            $table->string('parseTitle')->nullable();;
            $table->string('parseBody')->nullable();;
            $table->string('parseLink')->nullable();;
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
        Schema::dropIfExists('source_list_items');
    }
}
