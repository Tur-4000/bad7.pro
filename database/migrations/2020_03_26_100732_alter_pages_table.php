<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('name', 32)->unique()->change();
            $table->string('user_friendly_name', 32)
                ->comment('Человекопонятное название');
            $table->text('description')
                ->nullable()
                ->comment('Описание страницы');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('user_friendly_name');
            $table->dropColumn('description');
        });
    }
}
