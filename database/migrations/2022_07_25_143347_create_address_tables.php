<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('place_nameel')->nullable();
            $table->string('type')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('state')->nullable();
            $table->string('country', 2);

            $table->float('lat', 10, 6)->nullable();
            $table->float('lng', 10, 6)->nullable();

            $table->timestamps();
        });
    }
}