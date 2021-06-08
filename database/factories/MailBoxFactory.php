<?php

namespace Database\Factories;

use App\Models\MailBox;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MailBoxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MailBox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'user_id'=>User::factory(),
           'email' => $this->faker->unique()->safeEmail(),
           'message'=>$this->faker->sentence()

            //
        ];
    }
}
