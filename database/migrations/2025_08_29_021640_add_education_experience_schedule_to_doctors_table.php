<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->text('education')->nullable()->after('image');
            $table->text('experience')->nullable()->after('education');
            $table->text('schedule')->nullable()->after('experience');
        });
    }
    
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn(['education', 'experience', 'schedule']);
        });
    }
};
