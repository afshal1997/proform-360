<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {
        activity('LogIn')->by($event->user)->log($event->user->full_name . ' Logged In');
    }
}
