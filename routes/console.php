<?php

use Faker\Provider\Lorem;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {
    DB::table('hobbies')->insert([
        'Hobby' => Lorem::word(),
        'created_at' => now(),
        'updated_at' => now()
    ]);
})->everyFifteenSeconds()->name('create_hobby');

Schedule::call(function () {
    Artisan::call('migrate:fresh --seed');
})->everyMinute()->name('migrate_fresh_seed');
