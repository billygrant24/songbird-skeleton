<?php

return [

    /*
     * Add middleware here to boost the functionality of your site.
     */

    'middleware' => [

        /*
         * This provides our templating engine. If you remove this, you must implement another engine following the
         * Template contract.
         */

        'Songbird\Package\Plates\PlatesServiceProvider',
        'Songbird\Package\CommonMark\MarkdownServiceProvider',

    ],

];