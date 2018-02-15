<?php

return [

    'feeds' => [
        'main' => [
            'url' => '/feed',
            'title' => 'medericroybeldia.co - all blogposts',
            'items' => \App\Models\Post::class . '@getFeedItems',
        ],

        'php' => [
            'url' => '/feed/php',
            'title' => 'medericroybeldia.co - all php blogposts',
            'items' => \App\Models\Post::class . '@getPhpFeedItems',
        ],

        'originals' => [
            'url' => '/feed/originals',
            'title' => 'medericroybeldia.co - all originally written blogposts',
            'items' => \App\Models\Post::class . '@getOriginalContentFeedItems',
        ],
    ],

];
