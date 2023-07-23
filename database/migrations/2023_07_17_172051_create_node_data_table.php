<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_data', function (Blueprint $table) {
        $table->id();
        $table->string('node_name');
        $table->string('gpon_card');
        $table->string('gpon_port');
        $table->string('discont');
        $table->string('onu_mac');
        $table->string('vendor');
        $table->string('reg_id');
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
        Schema::dropIfExists('node_data');
    }
}
