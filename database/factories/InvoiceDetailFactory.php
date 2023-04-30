<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceDetail>
 */
class InvoiceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $invoice = Invoice::inRandomOrder()->first();

        return [
            'invoice_id' => $invoice->id,
            'product_name' => fake()->unique()->words(3, true),
            'price' => rand(10, 200),
            'qty' => rand(1, 50)

        ];
    }
}
