<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintTypeComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_type_complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('complaint_id');
            $table->foreignId('complaint_type_id');
            $table->foreignId('creator_id');
            $table->foreignId('updater_id')->nullable();
            $table->foreignId('deleter_id')->nullable();
            $table->softDeletes('deleted_at', 0);
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
        Schema::dropIfExists('complaint_type_complaints');
    }
}
