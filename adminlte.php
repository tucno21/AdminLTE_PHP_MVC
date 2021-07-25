<?php

$title = 'AdminLTE 3';
$logo = 'dist/img/AdminLTELogo.png';
$mainLink = 'index3.html';

$name = 'Carlos';
$photo = 'dist/img/user2-160x160.jpg';


$linksSidebar = [
    ['header' => 'ADMINISTRADOR'],
    [
        'mode' => 'menu',
        'text' => 'profile',
        'url'  => 'admin/settings',
        'class' => 'nav-header',
        'icon' => 'fas fa-user',
    ],
    [
        'mode' => 'menu',
        'text' => 'change_password',
        'url'  => 'admin/settings',
        'icon' => 'fas fa-fw fa-lock',
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'fas fa-fw fa-lock',
        'submenu' => [
            [
                'text' => 'crear',
                'url'  => 'www.google.com',
                'icon' => 'far fa-circle ',
            ],
            [
                'text' => 'editar',
                'url'  => 'www.google.com',
                'icon' => 'far fa-circle ',
            ],
        ],

    ],
    ['header' => 'CLIENTES'],
];
