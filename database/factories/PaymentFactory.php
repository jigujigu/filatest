<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_no' => 'PYM' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT),
            'payment_date' => date('Y-m-d H:i:s', rand(strtotime('2023-03-01'), strtotime('2023-03-31'))),
            'cheque_no' => 'CHQ' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT),
            'amount' => rand(10, 200) * 100,

        ];
    }
}
