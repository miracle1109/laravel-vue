<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AccessLog;
use App\Models\Entity;
use App\Models\Event;
use App\Models\User;

class AccessLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AccessLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'event_id' => Event::factory(),
            'entity_id' => Entity::factory(),
            'accessable_type' => $this->faker->word,
            'accessable_id' => $this->faker->randomNumber(),
        ];
    }
}
