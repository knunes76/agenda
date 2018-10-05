<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgeAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('age_agenda', function (Blueprint $table) {
            $table->increments('age_id');
            $table->string('age_nome', 30);
            $table->string('age_email',50);
            $table->string('age_fone',15);
            $table->timestamps();
            $table->softDeletes();
        });
    }
  
    public function down()
    {
        Schema::drop('age_agenda');
    }
}
