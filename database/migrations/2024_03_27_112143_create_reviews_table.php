<?php

use App\Models\Child;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Child::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Teacher::class)->constrained()->onDelete('cascade');
          //  $table->foreignIdFor(Course::class)->constrained()->onDelete('cascade');
            $table->string('level');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
