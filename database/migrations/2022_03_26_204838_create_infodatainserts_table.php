<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infodatainserts', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('nationality');
            $table->string('age');
            $table->string('date');
            $table->string('address');
            $table->string('country');
            $table->string('gander');
            $table->string('exam');
            $table->string('dec');
            $table->string('gpa');
            $table->string('examB');
            $table->string('decB');
            $table->string('gpaB');
            $table->string('examC')->nullable();
            $table->string('decC')->nullable();
            $table->string('gpaC')->nullable();
            $table->string('job1')->nullable();
            $table->string('work1')->nullable();
            $table->string('job2')->nullable();
            $table->string('work2')->nullable();
            $table->string('job3')->nullable();
            $table->string('work3')->nullable();
            $table->string('lastCompany');
      
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('infodatainserts');
    }
};
