<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['name' => 'Entertainment', 'color' => 'blue'],
            ['name' => 'Food', 'color' => 'yellow'],
            ['name' => 'Politics', 'color' => 'red'],
            ['name' => 'Random', 'color' => 'indigo'],
            ['name' => 'Science & Tech', 'color' => 'green'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
