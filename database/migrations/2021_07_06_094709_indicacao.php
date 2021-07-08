<?php

use App\Status_indicacao;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Indicacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('indicacao', function (Blueprint $table) {
        $table->integer('id')->autoIncrement();
        $table->string('nome');
        $table->string('cpf')->unique();
        $table->string('telefone');
        $table->string('email');
        $table->integer('status_id');
        $table->foreign('status_id')->references('id')->on('status_indicacao');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicacao');
    }

   
}
