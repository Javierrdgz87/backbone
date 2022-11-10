<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->id();
            $table->string('zip_code', 5);
            $table->string('d_asenta');
            $table->string('d_tipo_asenta');
            $table->string('d_mnpio');
            $table->string('d_estado');
            $table->string('locality');
            $table->string('d_CP', 5);
            $table->string('c_estado');
            $table->string('c_oficina', 5);
            $table->string('c_CP', 5)->nullable();
            $table->string('c_tipo_asenta');
            $table->string('c_mnpio');
            $table->string('id_asenta_cpcons');
            $table->string('d_zona');
            $table->string('c_cve_ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_codes');
    }
}
