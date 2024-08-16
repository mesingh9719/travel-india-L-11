<?php 

use Illuminate\Support\Facades\Breadcrumbs;


// Root breadcrumb
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Breadcrumb for a specific page
Breadcrumbs::for('page', function ($trail, $page) {
    $trail->parent('home');
    $trail->push($page->title, route('page.show', $page));
});