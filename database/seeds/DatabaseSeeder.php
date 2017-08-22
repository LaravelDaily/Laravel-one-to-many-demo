<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 10)->create()->each(function ($company) {
            $company->employees()->saveMany(factory(Employee::class, rand(2,5))->create());
        });
    }
}
