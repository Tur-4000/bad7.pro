<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title', 32)->comment('Название-заголовок услуги');
            $table->text('description')->comment('Описание услуги');
            $table->text('description_ext')->nullable()->comment('Расширенное описание услуги');
            $table->string('bg_image')->comment('Фоновое изображение');
            $table->string('video_url')->nullable()->comment('Видеоролик');
            $table->smallInteger('order')->unique()->comment('Порядок показа');

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
        Schema::dropIfExists('services');
    }
}
