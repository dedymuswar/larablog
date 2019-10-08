<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Home > Post
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('dashboard', $post);
    $trail->push('Post', route('post.index'));
});

// Home > Post > add
Breadcrumbs::for('add', function ($trail) {
    $trail->parent('post', route('dashboard.index'));
    $trail->push('Create Post', route('post.index'));
});

// Home > Post > edit
Breadcrumbs::for('edit', function ($trail, $post) {
    $trail->parent('post', route('dashboard.index'));
    $trail->push('Edit', route('post.show', $post));
});

// Home > Category
Breadcrumbs::for('categories', function ($trail, $categories) {
    $trail->parent('dashboard', $categories);
    $trail->push('Category', route('category.index'));
});

// Home > Tag
Breadcrumbs::for('tags', function ($trail, $tags) {
    $trail->parent('dashboard', $tags);
    $trail->push('Tag', route('tag.index'));
});

// Home > Users
Breadcrumbs::for('users', function ($trail, $users) {
    $trail->parent('dashboard', $users);
    $trail->push('Users', route('user.index'));
});

// Home > User > add
Breadcrumbs::for('addUser', function ($trail) {
    $trail->parent('users', route('dashboard.index'));
    $trail->push('Create User', route('user.index'));
});

// Home > User > edit
Breadcrumbs::for('editUser', function ($trail, $users) {
    $trail->parent('users', route('dashboard.index'));
    $trail->push('Edit', route('user.show', $users));
});
