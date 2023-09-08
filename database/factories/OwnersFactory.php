<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owners;

class OwnersFactory extends Factory
{

    protected $model = Owners::class;

    public function definition()
    {
        return [

            'id'=> 0,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password'=>'12345',
            'wallet'=> random(0,150)
        ];
    }
}
