<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleDescriptionColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->string('user_friendly_name', 128)
                ->nullable()
                ->comment('Человекопонятное название');
            $table->text('description')
                ->nullable()
                ->comment('Развёрнутое описание роли');
        });

        Schema::table('permissions', function (Blueprint $table) {
            $table->string('user_friendly_name', 128)
                ->nullable()
                ->comment('Человекопонятное название');
            $table->text('description')
                ->nullable()
                ->comment('Развёрнутое описание разрешения');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('user_friendly_name');
            $table->dropColumn('description');
        });

        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('user_friendly_name');
            $table->dropColumn('description');
        });
    }
}
