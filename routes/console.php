<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('Nathan', function(){
    $this->comment("Imagine programmer God meme here");
})->purpose('');

Artisan::command('return_Nathans_productivity_level', function(){
    $this->comment("Nathan's productivity level is currently sitting at 0.12%");
})->purpose('');
