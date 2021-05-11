<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\SendEmail;
use App\Events\SendMail;
use App\Listeners\SendEmailSubscribtion;
use App\Listeners\SendMailFired;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendEmail::class => [
            SendEmailSubscribtion::class,
        ],
        SendMail::class => [
            SendMailFired::class,
        ],

        'App\Events\SendMessageEvent' => [
            'App\Listeners\SendMessageEmailListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();


    }
}
