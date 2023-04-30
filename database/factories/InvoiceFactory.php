<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'invoice_no' => 'INV' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT),
            'invoice_date' => date('Y-m-d H:i:s', rand(strtotime('2023-03-01'), strtotime('2023-03-31'))),

        ];
    }
}
