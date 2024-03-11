<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'organizers'],
            ['name' => 'participant'], // Default role
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
