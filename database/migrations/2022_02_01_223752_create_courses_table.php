<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->integer('instructor_id')->nullable();
            $table->string('name');
            $table->text('short_details')->nullable();
            $table->text('details')->nullable();
            $table->integer('media_banner_id')->nullable();
            $table->integer('media_image_id')->nullable();
            $table->float('price')->nullable();
            $table->float('time_frame')->nullable();

            $table->boolean('is_published')->default(0);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
