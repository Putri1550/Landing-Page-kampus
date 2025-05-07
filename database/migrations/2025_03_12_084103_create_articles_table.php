<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Unsigned Big Integer (Primary Key)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke users
            $table->string('title');
            $table->text('description');
            $table->timestamps(); // created_at & updated_at
            $table->softDeletes(); // deleted_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

