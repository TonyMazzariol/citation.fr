<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('quote_id');
            $table->longText('quote_content');
            
            $table->bigInteger('author_id', false, true)->unsigned()->index();

            $table->foreign('author_id')
                ->references('author_id')
                ->on('authors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
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
        Schema::dropIfExists('quotes');
    }
}
