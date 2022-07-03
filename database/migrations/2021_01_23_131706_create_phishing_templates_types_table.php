<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhishingTemplatesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phishing_templates_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('email_template_id')->nullable();
            $table->foreign('email_template_id')->references('id')->on('phishing_templates');
            $table->unsignedBigInteger('attachment_type_id')->nullable();
            $table->foreign('attachment_type_id')->references('id')->on('phishing_attachment_types');
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
        Schema::dropIfExists('phishing_templates_types');
    }
}
