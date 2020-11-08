<?php

use Illuminate\Database\Seeder;
use App\Loan;
use App\Author;

use Faker\Generator as Faker;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();

        foreach ($authors as $author) {
            $newLoan = new Loan();
            $newLoan->book_id = $author->id;
            $newLoan->name = $faker->name();
            $newLoan->date_of_loan = $faker->date('Y-m-d', 'now');
            $newLoan->save();
        }
    }
}
