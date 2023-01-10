<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategoryTableSeeder::class);
        $this->command->info('Таблица загружена успешно');

        $this->call(BrandTableSeeder::class);
        $this->command->info('Таблица загружена успешно');

        $this->call(ProductTableSeeder::class);
        $this->command->info('Таблица загружена успешно');
    }
}
