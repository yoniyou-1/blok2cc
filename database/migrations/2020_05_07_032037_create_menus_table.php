<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            //$table->integer('menu_id')->unsigned();
           // $table->id('menu_id2');
            
            //$table->unsignedBigInteger('menu_id'); // UNSIGNED BIG INT
            $table->text('url');
            $table->integer('orden')->default(0);
             $table->text('icon')->nullable();
           
            
            //$table->foreign o foreignId('menu_id')->references('id')->on('menus');
                $table->integer('menu_id')->default(0); // UNSIGNED BIG INT
        //->nullable()->default(0)//->default(0) // <-- IMPORTANTE: LA COLUMNA DEBE ACEPTAR NULL COMO VALOR VALIDO
        //->constrained()  // <-- DEFINE LA RESTRICCION DE LLAVE FORANEA
        //->onDelete('SET NULL'); // <-- AL ELIMINAR UN USUARIO SUS POSTS QUEDARAN SIN AUTOR
         $table->timestamps();
        $table->charset='utf8mb4';
            $table->collation= 'utf8mb4_spanish_ci' ;


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
