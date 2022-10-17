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
            $table->string('name')->unique();
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->foreign('position_id', 'ep_position_fk')->references('id')->on('positions')->onDelete('restrict');
            $table->foreign('manager_id', 'ee_manager_fk')->references('id')->on('employees')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
};
