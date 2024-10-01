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
        Schema::create('cases', function (Blueprint $table) {

            $table->id();
            $table->text('application_type')->nullable();
            $table->text('case_number');
            $table->text('id_number')->nullable();
            $table->text('title')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('marital')->nullable();
            $table->text('physical_address')->nullable();
            $table->text("mobile_1")->nullable();
            $table->text("mobile_2")->nullable();
            $table->text("email")->nullable();
            $table->text("employer")->nullable();
            $table->text("employer_address")->nullable();
            $table->text('bank')->nullable();
            $table->text('account_type')->nullable();
            $table->text('account_number')->nullable();
            $table->text('branch_code')->nullable();
            $table->text("dependents")->nullable();
            $table->text("income")->nullable();
            $table->text("expenses")->nullable();
            $table->text("debts")->nullable();
            $table->text("product");
            $table->text('agent_id')->nullable();
            $table->text('branch')->nullable();
            $table->text('id_document')->nullable();
            $table->text('credit_report')->nullable();
            $table->text('form_16')->nullable();
            $table->text('bank_statement')->nullable();
            $table->text('payslip')->nullable();
            $table->text('form_17_1')->nullable();
            $table->text('certificate_of_balance')->nullable();
            $table->text('form_17_2')->nullable();
            $table->boolean("paid")->default(false);
            $table->text("paid_amount")->default(0.00);
            $table->text("date_signed")->default(date("Y - M - d"));
            $table->text("date_paid")->nullable();
            $table->text("month_signed")->default(date("m"));
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
