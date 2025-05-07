<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages_comments', function (Blueprint $table) {
            $table->id(); // Unsigned Big Integer (Primary Key)
            $table->foreignId('page_id')->constrained()->onDelete('cascade'); // Relasi ke tabel pages
            $table->text('comment');
            $table->timestamps(); // created_at & updated_at
            $table->softDeletes(); // deleted_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages_comments');
    }
};
