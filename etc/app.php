<?php

return [

    'app' => [

        /*
         * The name of the theme you want to use.
         */

        'theme' => 'default',

        /*
         * Enable debugging for developer friendly exception handling.
         */

        'debug' => APP_DEBUG,

        /*
         * Specify the filesystem your content will live on.
         * Supported drivers include: local, dropbox, azure, ftp and s3. Be sure to provide any necessary credentials for
         * your chosen driver.
         */

        'filesystem' => [

            'driver' => APP_FILESYSTEM,

        ],

        /*
         * Set the HTTP request handler.
         * See default implementation for details on how to create a custom handler.
         */

        'handler' => 'Songbird\Controller',

        /*
         * These are some essential application paths.
         */

        'paths' => [

            'resources' => '../resources',

            'log' => '../var/log',

            'cache' => '../var/cache',

        ],

    ],

];
