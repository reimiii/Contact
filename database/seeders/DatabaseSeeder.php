<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Company::factory(10)->create();
        Contact::factory(50)->create();
    }

}
