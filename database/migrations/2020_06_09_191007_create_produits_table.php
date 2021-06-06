<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *  
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments(id);
            $table->string(nom);
            $table->string(description);
            $table->float(prix);
            $table->int(qte);
            $table->string(img);
            $table->timestamps();
        });
    }
   // xQ2X48qH4s
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
