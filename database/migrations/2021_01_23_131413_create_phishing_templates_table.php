<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhishingTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phishing_templates', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('title');
            $table->string('description');
            $table->unsignedBigInteger('game_id')->nullable();
            $table->foreign('game_id')->references('id')->on('games');
            $table->unsignedBigInteger('attachment_type_id')->nullable();
            $table->foreign('attachment_type_id')->references('id')->on('phishing_attachment_types');
            $table->boolean('is_phishing');
            $table->string('reason');
            $table->string('short_reason');
            $table->string('sender');
            $table->longText('template');	
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
        Schema::dropIfExists('phishing_templates');
    }
}
