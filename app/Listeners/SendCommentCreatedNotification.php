<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\CommentCreated;
use App\Notifications\NewComment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCommentCreatedNotification implements ShouldQueue
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
    public function handle(CommentCreated $event): void
    {
        foreach (User::whereNot('id', $event->comment->user_id)->cursor() as $user) {
            $user->notify(new NewComment($event->comment));
        }
    }
}
