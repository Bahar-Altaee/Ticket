<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZteactivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zteactivations', function (Blueprint $table) {
           $table->id();
            $table->string('emploee');
             $table->string('username');
              $table->string('profile_id');
               $table->string('firstname');
                $table->string('lastname');
                 $table->string('phone');
                  $table->string('contract_id');
                   $table->string('gps_lat');
                    $table->boolean('Visited')->default(false);
                              
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
        Schema::dropIfExists('zteactivations');
    }
}
