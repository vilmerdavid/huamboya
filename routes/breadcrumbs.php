<?php

// Bienvenido
Breadcrumbs::for('welcome', function ($trail) {
    $trail->push('Inicio', url('/'));
});

// Inicio
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Inicio', route('home'));
});

// login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Acceder', route('login'));
});

Breadcrumbs::for('documentos', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Gobierno / Documentos', route('documentos'));
});

