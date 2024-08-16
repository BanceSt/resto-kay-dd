<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $info_user = $this->info_user();

        return [
            //
            "user_id" => $info_user[0],
            "name" => $info_user[1],
            "last_name" => $info_user[2],
            "email" => $info_user[3],
            "objet" => fake()->sentence(10),
            "message" => fake()->sentences(5, true),
            "respond" => fake()->sentences(5, true),
            "status" => fake()->randomElement(["non lu", "en attente", "repondu"]),
        ];
    }

    private function info_user(): array
    {
        $infos = array();
        if (fake()->boolean()) {
            $rand_user = User::inRandomOrder()->first();
            array_push($infos, $rand_user->id);
            array_push($infos, $rand_user->name);
            array_push($infos, $rand_user->last_name);
            array_push($infos, $rand_user->email);
        } else {
            array_push($infos, null);
            array_push($infos, fake()->firstName());
            array_push($infos, fake()->lastName());
            array_push($infos, fake()->unique()->email());
        };

        return $infos;
    }
}
