<?php

namespace Database\Factories;
use App\Models\Daypass;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daypass>
 */
class DaypassFactory extends Factory
{
    protected $model =Daypass::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title= $this->faker->title();
        return [
            'label' =>  $title,
            'slug' => Str::slug($title),
            'lieux' => $title,
            'description' =>$this->faker->text,
            'service_price' => $this->faker->text(),
            'image'=>$this->faker->imageUrl(640,480),
           
        ];
    }
}
