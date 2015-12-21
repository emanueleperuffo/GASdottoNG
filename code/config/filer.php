<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | The relative and absolute paths to the directory where your local
    | attachments are stored.
    |
    */

    'path' => [
        'relative' => 'uploads/',
        'absolute' => public_path() . '/uploads/'
    ],

    /*
    |--------------------------------------------------------------------------
    | Attachment query string
    |--------------------------------------------------------------------------
    |
    | Enable this to append a query string to attachment URLs generated by this
    | package. This uses the attachment's updated_at timestamp in UNIX
    | timestamp format.
    |
    */

    'append_query_string' => TRUE,

    /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    |
    | The name of your app's User model, and a closure to return the user ID.
    | These are used to associate attachments with users.
    |
    */

    'user' => [
        'model' => 'App\User',
        'id'    => function ()
        {
            return (auth()->check()) ? auth()->user()->id : 0;
        }
    ]

];
