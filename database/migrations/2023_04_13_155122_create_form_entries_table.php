<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_entries', function (Blueprint $table) {
            $table->id();
            $table->string('occasion');
            $table->string('location');
            $table->string('act_type');
            $table->string('genre');
            $table->date('event_date');
            $table->text('comments')->nullable();
            $table->float('budget');
            $table->string('contact_name');
            $table->string('contact_infix')->nullabe();
            $table->string('contact_lastname');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->boolean('can_be_called');
            $table->string('delete_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_entries');
    }
};
