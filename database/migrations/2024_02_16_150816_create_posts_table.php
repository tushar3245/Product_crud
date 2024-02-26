<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('undergraduate_name');
            $table->date('admission_session');
            $table->string('reg_no');
            $table->string('batch');
            $table->date('year_of_passing');
            $table->string('graduating_session_class');
            $table->string('cgpa');
            $table->string('graduate_name');
            $table->string('session');
            $table->string('reg_id_no');
            $table->string('g_batch');
            $table->string('year_passing');
            $table->string('graduating_session_2');
            $table->string('official_address');
            $table->string('employer');
            $table->string('designation');
            $table->string('present_address');
            $table->string('mobile');
            $table->string('email')->unique();

            $table->string('paid');
            $table->string('bank_name');
            $table->string('branch');
            $table->string('bank_no');
            $table->string('transformation');
            $table->string('potu');
            $table->string('screenshot');


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
        Schema::dropIfExists('posts');
       
    }
}
