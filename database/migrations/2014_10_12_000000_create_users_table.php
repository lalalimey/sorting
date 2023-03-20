
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('google_id');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->text('avatar')->nullable();
            $table->text('avatar_original')->nullable();
            $table->rememberToken();

            $table->string('nickname')->nullable();
            $table->integer('mdcu_class')->nullable();
            $table->enum('year', ['1', '2', '3', '4', '5', '6'])->nullable();
            $table->boolean('cumedi')->default(0);
            $table->enum('track', ['KCMH', 'BB', 'PK', 'CH'])->default('KCMH');
            $table->string('line_id', 30)->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('contact')->nullable();
            $table->enum('status', ['USER', 'STAFF', 'ADMIN'])->default('USER');
            $table->boolean('agreetotermsandconditions')->default(0);
            $table->boolean('dataconsent')->default(0);
            $table->longText('like_issue_list')->default('[]');
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
        Schema::dropIfExists('users');
    }
}
