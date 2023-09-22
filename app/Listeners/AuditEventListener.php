<?php

namespace App\Listeners;

use App\Events\AuditEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AuditEventListener
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
    public function handle(AuditEvent $event)
    {
        // return $event ;
        DB::table('audits')->insert([
            'user_name' => $event->user,
            'event' => $event->event,
            'data' => $event->data,
            'date' => date('Y-m-d H:i:s'),
        ]);
    }
}
