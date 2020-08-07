<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain');
            $table->string('establishment');
            $table->string('global_rank');
            $table->string('bd_rank');
            $table->string('multinational')->default('No');
            $table->string('languages');
            $table->string('social_auth')->default('No');
            $table->string('current_jobs')->default('No');
            $table->string('live_search')->default('No');
            $table->string('filter_search')->default('No');
            $table->string('resume_builder')->default('No');
            $table->string('courses')->default('No');
            $table->string('assesment')->default('No');
            $table->string('premium_support')->default('No');
            $table->string('social_networking')->default('No');
            $table->string('blog')->default('No');
            $table->string('forum')->default('No');
            $table->string('job_alert')->default('N\A');
            $table->string('based_on')->default('N\A');
            $table->string('gt_matrix')->default('N\A');
            $table->string('fb_likes')->default('N\A');
            $table->string('yt_subs')->default('N\A');
            $table->string('ios')->default('No');
            $table->string('android')->default('No');
            $table->string('responsive')->default('none');
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
        Schema::dropIfExists('portals');
    }
}
