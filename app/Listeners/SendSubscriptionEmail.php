<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Jobs\SubscriptionJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSubscriptionEmail implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        SubscriptionJob::dispatch($event->post);
    }
}
