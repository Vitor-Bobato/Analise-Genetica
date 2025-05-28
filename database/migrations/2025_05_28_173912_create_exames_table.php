<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamesTable extends Migration
{
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->id();
            $table->string('paciente', 100);
            $table->string('exame_id')->unique();
            $table->enum('tipo', ['Sequenciamento', 'PCR', 'Microarray']);
            $table->date('data_coleta');
            $table->string('laudo', 500)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exames');
    }
}