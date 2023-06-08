# Events, subscribing, listeners in details

## Basic
Event is an action that happens after a certain function is executed. We have a possibility to subscribe to those events and execute what we have to do.
Laravel events allow you to raise events and trigger actions based on those events. In this case, the CommentCreated event is triggered when a new comment is created.

## Creating event
We can create event with php artisan command that will prepare the class app/Events/CommentCreated.php.

`php artisan make:event CommentCreated`

The newly created CommentCreated class have __construct where you can pass  the parameters in it such as blog post, comment etc.
By default we have three traits:
- Dispatchable (`Illuminate\Foundation\Events\Dispatchable`)
- InteractsWithSockets (`Illuminate\Broadcasting\InteractsWithSockets`)
- SerializesModels (`Illuminate\Queue\SerializesModels`)

By default created event class uses several traits: `Dispatchable`, `InteractsWithSockets`, and `SerializesModels`.
These traits provide functionality to dispatch the event, interact with web sockets, and serialize the models respectively.

**Dispatchable trait**, it gains access to the dispatch() method, which can be used to dispatch an instance of the class as an event.
The dispatch() method takes the instance of the class and sends it to the event dispatcher, which then triggers the event and calls any registered event listeners

The `broadcastOn` method specifies the broadcasting channel(s) the event should be broadcasted on. In this case, it returns an array with a single PrivateChannel instance, indicating that the event should be broadcasted on a private channel named 'channel-name'.

### Observers

Laravel Observers are used to group event listeners for a model eloquent. Laravel Observers will listener event for model eloquent method like create, update, restore, delete, forceDeleted.
You can use php artisan command: `php artisan make:observer` and prompt the observer name and the model.
After that you have to  update the app/Providers/EventServiceProvider.php boot method to tell laravel that you want to obeserve the behavior of comment model - `Comment::observe(OnCommentInsert::class);`



Some helpful tips:
Use observers for events that could happen on the model level, such as created, updated, deleted, restored or forceDeleted.
