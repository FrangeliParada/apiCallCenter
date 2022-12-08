<?php

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
        Schema::create('call_center_clients', function (Blueprint $table) {
            $table->id("idDB");
            $table->bigInteger('id')->nullable();
            $table->text('created_time')->nullable();
            $table->bigInteger('ad_id')->nullable();
            $table->string('ad_name')->nullable();
            $table->bigInteger('adset_id')->nullable();
            $table->string('adset_name')->nullable();
            $table->bigInteger('campaign_id')->nullable();
            $table->text('campaign_name')->nullable();
            $table->bigInteger('form_id')->nullable();
            $table->string('form_name')->nullable();
            $table->boolean('is_organic')->nullable();
            $table->string('platform')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('street_address')->nullable();
            $table->string('inbox_url')->nullable();
            $table->string('full_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('status')->nullable();
            $table->string('observations')->nullable();
            $table->boolean('available')->nullable()->default("1");
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
        Schema::dropIfExists('call_center_clients');
    }
};
