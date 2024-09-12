<?php

namespace App\Listeners;

use App\Models\Newsletter;
use App\Events\userSubscribed;
use App\Mail\userSubscribedMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class userSubscribedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(userSubscribed $event)
    {
      
          $news = new Newsletter;
          $news->email = $event->email;
          $news->save();


          Mail::to($event->email)->send(new userSubscribedMail());

    }
}
