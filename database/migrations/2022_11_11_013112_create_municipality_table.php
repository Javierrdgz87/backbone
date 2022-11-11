<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipality', function (Blueprint $table) {
            $table->string('key', 3);
            $table->string('federal_entity_code', 2);
            $table->string('name');

            //SETTING THE PRIMARY KEYS
            $table->primary(['key','federal_entity_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipality');
    }
}
