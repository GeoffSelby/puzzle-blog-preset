<?php

return [
    'baseUrl' => 'http://sample.test',
    'production' => false,
    'siteName' => 'Puzzle Blog Preset',
    'siteDescription' => 'A minimal blog preset template for Jigsaw sites powered by Tailwind CSS',
    'siteAuthor' => 'John Doe',
    'navigation' => require_once('navigation.php'),

    // collections
    'collections' => [
        'posts' => [
            'author' => 'John Doe', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => '{filename}',
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
