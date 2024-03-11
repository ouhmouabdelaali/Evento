<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prix');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('reservation_id');
            $table->enum('type', ['standard', 'VIP']); // Modify the 'type' column to accept only 'standard' or 'VIP'
            $table->string('ticket_code')->unique();
            $table->integer('contiter');
            $table->timestamps();
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}

