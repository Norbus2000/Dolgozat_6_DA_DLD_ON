<?php

use App\Models\Agency;
use Illuminate\Console\View\Components\Task;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name',32);
            $table->string('country',50);
            $table->string('type',20);
            $table->timestamps();
        });
        Agency::create(['name' => 'Kiss Janos', 'country' => 'Uganda', 'type'=> 'tipus1']);
        Agency::create(['name' => 'Katona Valetin', 'country' => 'China', 'type'=> 'tipus2']);
        Agency::create(['name' => 'Vicc Elek', 'country' => 'Niger', 'type'=> 'tipus3']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
};
