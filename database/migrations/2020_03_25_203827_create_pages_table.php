<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Название страницы');
            $table->string('title_tag')
                ->nullable()
                ->comment('Метатег Title');
            $table->text('description_tag')
                ->nullable()
                ->comment('Метатег Description');
            $table->text('keywords_tag')
                ->nullable()
                ->comment('Метатег Keywords');

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
        Schema::dropIfExists('pages');
    }
}
