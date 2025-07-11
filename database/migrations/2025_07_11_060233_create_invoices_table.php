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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer_profiles')->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('total', 8, 2);
            $table->decimal('vat', 8, 2);
            $table->decimal('payable', 8, 2);
            $table->string('cus_details', 500);
            $table->string('ship_details', 500);
            $table->string('transection_id', 100);
            $table->string('validation_id', 100)->default(0);
            $table->enum('delivery_status', ['Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'])->default('Pending');
            $table->enum('payment_status', ['Pending', 'Success', 'Failed', 'Cancelled'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
