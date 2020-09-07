<?php

use Illuminate\Database\Seeder;
use App\Guest;
use Faker\Generator as Faker;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {
        $new_guest = new Guest();
        $new_guest->name = $faker->firstName();
        $new_guest->lastname = $faker->lastName();
        $new_guest->nationality = $faker->randomElement([
          'Italiana',
          'Inglese',
          'Tedesca',
          'Americana',
          'Spagnola'
        ]);
        $new_guest->age = $faker->numberBetween(18,80);
        $new_guest->document_type = $faker->randomElement([
          'Carta d\'identità',
          'Patente di guida',
          'Passaporto'
        ]);
        $new_guest->document_number = $faker->word();
        $new_guest->cc_type = $faker->creditCardType;
        $new_guest->cc_number = $faker->creditCardNumber;
        $new_guest->save();
      }
    }
}
