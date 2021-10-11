<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname', 125);
            $table->string('lname', 200);
            $table->enum('sex', ['M', 'F'])->default('M');
            $table->date('dob');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('hometown');
            $table->string('nationality');
            $table->text('address')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            // $table->timestamps();
            $table->unique(['lname', 'father_name', 'hometown']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
