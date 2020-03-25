<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title', 128)->comment('Название ролика');
            $table->text('description')->comment('Описание ролика');
            $table->string('url', 255)->comment('ссылка на youtube');
            $table->date('date')->comment('Дата создания');
            $table->string('type', 16)->comment('тип ролика');
            $table->boolean('published')
                ->default(false)
                ->comment('Опубликовать работу');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
