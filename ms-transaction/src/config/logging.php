<?php

return [
    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single', 'bugsnag'],
        ],
        'bugsnag' => [
            'driver' => 'bugsnag',
        ],
    ],
];
