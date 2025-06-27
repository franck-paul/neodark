<?php

/**
 * @brief NeoDark, a theme for Dotclear 2
 *
 * CSS heavily based on the design by https://lord.re/ - CC4-BY-SA
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */
$this->registerModule(
    'NeoDark',
    'NeoDark theme for Dotclear 2 - design by https://lord.re/',
    'Franck Paul',
    '5.3',
    [
        'date'     => '2025-05-15T18:46:46+0200',
        'requires' => [['core', '2.35']],
        'type'     => 'theme',
        'tplset'   => 'dotty',
        'overload' => true,

        'details'    => 'https://open-time.net/?q=neodark',
        'support'    => 'https://github.com/franck-paul/neodark',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/neodark/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
