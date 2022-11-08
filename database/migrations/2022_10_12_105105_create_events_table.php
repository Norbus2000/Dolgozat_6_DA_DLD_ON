<?php

use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('limit');
            $table->timestamps();
        });

        Events::create([ 'date' => '2022-10-11', 'agency_id' => 1, 'limit'=> 1]);
        Events::create([ 'date' => '2022-10-10', 'agency_id' => 2, 'limit'=> 2]);
        Events::create([ 'date' => '2022-10-09', 'agency_id' => 3, 'limit'=> 3]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
