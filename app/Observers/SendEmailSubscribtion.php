<?php

namespace App\Observers;

use App\Email;

class SendEmailSubscribtion
{
    /**
     * Handle the email "created" event.
     *
     * @param  \App\Email  $email
     * @return void
     */
    public function created(Email $email)
    {
        //
    }

    /**
     * Handle the email "updated" event.
     *
     * @param  \App\Email  $email
     * @return void
     */
    public function updated(Email $email)
    {
        //
    }

    /**
     * Handle the email "deleted" event.
     *
     * @param  \App\Email  $email
     * @return void
     */
    public function deleted(Email $email)
    {
        //
    }

    /**
     * Handle the email "restored" event.
     *
     * @param  \App\Email  $email
     * @return void
     */
    public function restored(Email $email)
    {
        //
    }

    /**
     * Handle the email "force deleted" event.
     *
     * @param  \App\Email  $email
     * @return void
     */
    public function forceDeleted(Email $email)
    {
        //
    }
}
