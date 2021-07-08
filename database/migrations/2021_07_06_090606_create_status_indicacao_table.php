<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusIndicacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_indicacao', function (Blueprint $table) {
                $table->integer('id')->autoIncrement();
                $table->string('descricao');
               
        });
 
            DB::insert('insert into status_indicacao (descricao) values (?)', 
            ['Iniciada']);

            DB::insert('insert into status_indicacao (descricao) values (?)', 
            ['Em Processo']);
            
            DB::insert('insert into status_indicacao (descricao) values (?)', 
            ['Finalizada']);            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_indicacao');
    }
}
