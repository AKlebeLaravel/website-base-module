<?php

namespace Modules\WebsiteBase\database\factories\Token;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\WebsiteBase\app\Models\Token;

/**
 * @extends Factory
 */
class TokenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'purpose' => Token::PURPOSE_LOGIN,
            'token'   => uniqid('l', true),
        ];
    }
}
