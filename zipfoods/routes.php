<?php

return [
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/about' => ['AppController', 'about'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2']
];
