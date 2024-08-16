<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
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
            "phone" => $info_user[4],
            "reserved_at" => fake()->dateTimeBetween('now', '+ 1 month'),
            "numero_table" => $this->select_table(),
            "specials_need" => fake()->sentences(20, true)
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
            array_push($infos, $rand_user->phone);
        } else {
            array_push($infos, null);
            array_push($infos, fake()->firstName());
            array_push($infos, fake()->lastName());
            array_push($infos, fake()->unique()->email());
            array_push($infos, fake()->unique()->phoneNumber());
        };

        return $infos;
    }

    private function select_table() : string {
        $strTables = "[";
        $n_tables = fake()->numberBetween(1, 4);

        for ($i = 0; $i < $n_tables;$i++) {
            if ($i > 0) $strTables .= ", ";
            $strTables .=  fake()->numberBetween(1, 10);
        }

        $strTables .= "]";

        return $strTables;
    }
}
