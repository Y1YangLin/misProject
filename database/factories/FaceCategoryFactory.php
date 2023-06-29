<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FaceCategory>
 */
class FaceCategoryFactory extends Factory
{

    protected $model = \App\Models\FaceCategory::class;



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'type' => 'oil skin',
        ];
    }
}
