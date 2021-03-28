<?php

namespace Database\Factories;

use App\Models\startups;
use Illuminate\Database\Eloquent\Factories\Factory;

class StartupsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = startups::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

       /* 
         $table->string('name');
            $table->string('website');
            $table->string('phone_number');
            $table->string('email');
            $table->string('about');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('is_approved');
            $table->string('address');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('state_id')->constrained('states');
       */ 
        return [
            //
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'website' => 'www'.$this->faker->company.'.com',
            'phone_number' => $this->faker->phoneNumber,
            'about' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'facebook_link' => 'www.facebook.com/',
            'instagram_link' => 'www.instagram.com/',
            'twitter_link' => 'www.twitter.com/',
            'linkedin_link' => 'www.linkedin.com/',
            'is_approved' => 1,
            'category_id' => rand(1,2),
            'country_id' => 1,
            'state_id' => rand(1,5),
        ];
    }
}
