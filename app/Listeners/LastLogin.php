<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;

class LastLogin
{
    /**
     * Create the event listener.
     *
     */
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        $ip = $this->request->ip();
        $browser = $this->request->header('User-Agent');
        $user = $event->user;
        $user->login()->create([
            'ip' => $ip,
            'browser' => $browser,
            'date' => now(),
        ]);
    }
}
