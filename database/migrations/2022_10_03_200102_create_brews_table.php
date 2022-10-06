<?php

use App\Models\Brewer;
use App\Models\Coffee;
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
        Schema::create('brews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Coffee::class);
            $table->foreignIdFor(Brewer::class);
            $table->string('grinder');
            $table->float('clicks');
            $table->float('dose');
            $table->float('yield');
            $table->time('time');
            $table->text('description')->fulltext();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('brews');
    }
};
