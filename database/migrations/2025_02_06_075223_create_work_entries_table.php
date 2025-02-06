<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('work_entries', function (Blueprint $table) {
            $table->id();
            $table->enum('task_type', ['Development', 'Test', 'Document']);
            $table->string('task_name');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->enum('status', ['ดำเนินการ', 'เสร็จสิ้น', 'ยกเลิก']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_entries');
    }
}
