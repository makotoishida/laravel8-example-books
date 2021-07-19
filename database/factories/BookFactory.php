<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     * https://fakerphp.github.io/formatters/text-and-paragraphs.html
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => Str::of($this->faker->words(3, true))->title(),
          'author' => $this->faker->name(),
          'url' => $this->faker->url(),
          'created_at' => $this->faker->dateTimeBetween('-4 week', '-2 week'),
          'updated_at' => $this->faker->dateTimeBetween('-2 week', '+0 day'),
      ];

    }
}
