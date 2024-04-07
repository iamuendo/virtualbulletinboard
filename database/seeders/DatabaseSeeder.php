<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AccountType;
use App\Models\EventCategory;
use App\Models\EventMode;
use App\Models\Gender;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        AccountType::create(['name' => 'Student']);
        AccountType::create(['name' => 'Faculty']);
        AccountType::create(['name' => 'Guest']);

        Gender::create(['name' => 'Male']);
        Gender::create(['name' => 'Female']);
        Gender::create(['name' => 'Prefer Not To Say']);

        User::factory()->create([
            'account_type_id' => 1,
            'username' => 'DEPT-01-0001/2024',
            'name' => 'Isaac Muendo',
            'gender' => 1,
            'email' => 'muendoisaac@zetech.ac.ke',
            'is_admin' => true
        ]);

        EventCategory::create(['name' => 'Bootcamp']);
        EventCategory::create(['name' => 'Conference']);
        EventCategory::create(['name' => 'Exhibition']);
        EventCategory::create(['name' => 'Festival']);
        EventCategory::create(['name' => 'Fundraiser']);
        EventCategory::create(['name' => 'Seminar']);
        EventCategory::create(['name' => 'Workshop']);

        EventMode::create(['name' => 'In-Person']);
        EventMode::create(['name' => 'Virtual']);
        EventMode::create(['name' => 'Hybrid']);

        Tag::create(['name' => 'Academic', 'slug' => 'academic']);
        Tag::create(['name' => 'Arts', 'slug' => 'arts']);
        Tag::create(['name' => 'Business', 'slug' => 'business']);
        Tag::create(['name' => 'Career', 'slug' => 'career']);
        Tag::create(['name' => 'Club', 'slug' => 'club']);
        Tag::create(['name' => 'Concert', 'slug' => 'concert']);
        Tag::create(['name' => 'Cultural', 'slug' => 'cultural']);
        Tag::create(['name' => 'Dance', 'slug' => 'dance']);
        Tag::create(['name' => 'Hospitality', 'slug' => 'hospitality']);
        Tag::create(['name' => 'Innovation', 'slug' => 'innovation']);
        Tag::create(['name' => 'Lecture', 'slug' => 'lecture']);
        Tag::create(['name' => 'Music', 'slug' => 'music']);
        Tag::create(['name' => 'Performance', 'slug' => 'performance']);
        Tag::create(['name' => 'Speaker', 'slug' => 'speaker']);
        Tag::create(['name' => 'Sports', 'slug' => 'sports']);
        Tag::create(['name' => 'Technology', 'slug' => 'technology']);
    }
}
