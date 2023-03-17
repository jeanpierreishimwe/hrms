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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->date('date_of_birth');
            $table->foreignId('job_title_id')->constrained('job_titles','id')->nullable();// $table->foreign('job_title_id')->reference('id')->ondelete('cascade');
            $table->foreignId('department_id')->constrained('departments','id')->nullable()->cascadeonDelete();
            $table->string('stipends',100);
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
        Schema::dropIfExists('employees');
    }
};
