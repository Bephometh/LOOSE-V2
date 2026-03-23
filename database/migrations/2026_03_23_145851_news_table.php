<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('whatsups', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('title')->default('What we Did');
            $table->string('url')->default('whatwedid');
            $table->text('content')->default("Lorem Ipsum dolor amet");
            $table->char('is_release', 1)->nullable(true);
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
