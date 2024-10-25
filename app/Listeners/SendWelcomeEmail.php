<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail 
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event)
    {
        $user = $event->user;

        logger("Reached Listen Queue");
        // dd($user);

        // Mail::to($user->email)->send(new \App\Mail\WelcomeEmail($user));

        // return $this->view('emails.welcome')
        //             ->with(['user' => $this->user]);
        return view('emails.welcome');
    }
}
