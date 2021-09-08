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

Artisan::command('unis', function() {
    $this->comment('Somos do grupo Unis');
})->purpose('Exemplo da aula');

Artisan::command('bloquear {user}', function ($user) {
    /** criar a regra para bloquear o usuário */
    $this->comment("usuário {$user} foi bloqueado com sucesso!");
});