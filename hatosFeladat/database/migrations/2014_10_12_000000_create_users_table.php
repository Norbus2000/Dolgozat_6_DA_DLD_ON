<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name',32);
            $table->string('email')->unique();
            $table->boolean('vip');
            $table->timestamps();
        });

        User::create([ 'name' => 'Kala Majka', 'email' => "majka@gmail.com", 'vip'=> true]);
        User::create([ 'name' => 'Sprint Elek', 'email' => "elek@gmail.com", 'vip'=> false]);
        User::create([ 'name' => 'Split Elek', 'email' => "split@gmail.com", 'vip'=> true]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
