<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('game_id');
            $table->string('game_name');
            $table->string('game_action_id')->index();
            $table->string('currency_code');
            $table->float('balance_before');
            $table->float('balance_after');
            $table->float('balance_amount');
            $table->float('bet')->nullable();
            $table->float('cp')->nullable();
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
        Schema::dropIfExists('game_histories');
    }
}
