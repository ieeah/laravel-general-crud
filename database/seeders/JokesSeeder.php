<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Joke;

class JokesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$jokes = config('jokes');
		$i = 1;
		foreach ($jokes as $joke) {
			$new_joke = new Joke;
			$new_joke->title = 'joke' . $i;
			$i++;
			$new_joke->body = $joke['body'];
			$new_joke->author = $joke['author'];
			$new_joke->save();
		}
	}
}
