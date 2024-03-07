<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 
    


        public function up()
{
    
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->dateTime('date');
            $table->string('location');
            $table->unsignedBigInteger('category_id');
            $table->integer('seats_available');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->timestamps();
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          
        });
    
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




     // :::::alawde soft delete
 
    //  public function up()
    // {
    //     Schema::table('events', function (Blueprint $table) {
    //         $table->softDeletes();
    //     });
    // }

    // public function down()
    // {
    //     Schema::table('events', function (Blueprint $table) {
    //         $table->dropColumn('deleted_at');
    //     });
    // }
}
