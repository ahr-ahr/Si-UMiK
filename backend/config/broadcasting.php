<?php

return [

    'default' => env('BROADCAST_DRIVER', 'pusher'),

    'connections' => [
        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ],
        ],

        'socket' => [
            'driver' => 'socket',
            'host' => env('SOCKET_HOST', 'http://localhost'),
            'port' => env('SOCKET_PORT', 3000),
        ],
    ],

];
