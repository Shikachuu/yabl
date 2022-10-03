<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('roaster');
            $table->string('country');
            $table->string('species');
            $table->string('altitude');
            $table->enum('roast_level', ['light-presso', 'light-filter', 'medium', 'dark']);
            $table->enum('species', ['robusta', 'arabica']);
            $table->json('tasting_notes');
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
        Schema::dropIfExists('coffees');
    }
};
