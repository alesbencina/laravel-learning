<?php

namespace App\Observers;

use App\Models\Comment;

class OnCommentInsert
{
    /**
     * Handle the Comment "created" event.
     */
    public function created(Comment $comment): void
    {
        $a = 0;
    }

    /**
     * Handle the Comment "updated" event.
     */
    public function updated(Comment $comment): void
    {
        $a = 0;
    }

    /**
     * Handle the Comment "deleted" event.
     */
    public function deleted(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "restored" event.
     */
    public function restored(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "force deleted" event.
     */
    public function forceDeleted(Comment $comment): void
    {
        //
    }
}
