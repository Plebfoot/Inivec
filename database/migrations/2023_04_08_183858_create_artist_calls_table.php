<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('artist_calls', function (Blueprint $table) {
            $table->id();
            $table->string('occasion');
            $table->string('location');
            $table->string('act_type');
            $table->string('genre');
            $table->date('event_date');
            $table->text('comments')->nullable();
            $table->decimal('budget', 8, 2)->nullable();
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->boolean('can_contact_by_phone')->default(false);
            $table->boolean('can_contact_by_email')->default(true);
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
        Schema::dropIfExists('artist_calls');
       
    }
}