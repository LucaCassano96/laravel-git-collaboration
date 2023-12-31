<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {

            $table->id();

            $table->string("title");
            $table->text("lyrics");
            $table->text("thumb");
            $table->string('artist');
            $table->date('exit_date');
            $table -> boolean("published", 1);
            $table -> decimal('price', $precision = 4, $scale = 2);
            $table -> string("song_duration");

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
        Schema::dropIfExists('songs');
    }
};
