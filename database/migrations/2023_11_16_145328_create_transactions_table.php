<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 8, 2);
            $table->enum('status', ['Paid', 'Outstanding', 'Overdue'])->default('Overdue');
            $table->date('due_on');
            $table->tinyInteger('vat')->default(0);
            $table->boolean('is_vat')->default(0)->comment('is vat inclusive');
            $table->foreignId('admin_id')->constrained()->restrictOnDelete();
            $table->foreignId('customer_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
