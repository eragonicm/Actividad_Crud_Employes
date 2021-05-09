<?php

namespace Database\Seeders;
use App\Models\Employee;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class EmployeesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<=20;$i++)
        {
            Employee::create([
            'name' => $faker->name,
            'lastname' => $faker->lastname,
            'email' => $faker->email,
            'document' => $faker->ean8,
            'gender' => $faker->randomElement(['male', 'female']),
            'companies_id' => '1',
            ]);
        }
    }
}
