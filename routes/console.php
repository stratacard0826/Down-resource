<?php

use Illuminate\Foundation\Inspiring;

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

Artisan::command('content:import {bundle}', function() {
	$bundle = $this->argument('bundle');
    Content::import($bundle);
})->describe('Fetch bundle content and images from access.ultimate-bundles.com');

