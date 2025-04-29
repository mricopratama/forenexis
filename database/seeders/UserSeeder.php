<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rico = User::factory()->create([
            'name' => 'Muhammad Rico Pratama',
            'email' => 'mricopratama@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'slug' => fn(array $attributes) => Str::slug($attributes['name']),
            'remember_token' => Str::random(10)
        ]);

        User::factory(5)->create();
    }
}
