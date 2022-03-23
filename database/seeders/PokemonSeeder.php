<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::truncate();

        $csvFile = fopen(base_path("database/data_files/pokemons.csv"), "r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstLine) {
                Pokemon::create([
                    //we won't deal with $data['0'] because that's an identifier key and will be auto-incrementing.
                    "identifier" => $data['1'],
                    "species_id" => $data['2'],
                    "height" => $data['3'],
                    "weight" => $data['4'],
                    "base_experience" => $data['5'],
                    "order" => $data['6'],
                    "is_default" => $data['7'],
                ]);
            }
            $firstLine = false;
        }

        fclose($csvFile);
    }
}
