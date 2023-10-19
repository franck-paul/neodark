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
    '4.0',
    [
        'requires' => [['core', '2.28']],
        'type'     => 'theme',
        'tplset'   => 'dotty',

        'details'    => 'https://open-time.net/?q=neodark',
        'support'    => 'https://github.com/franck-paul/neodark',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/neodark/master/dcstore.xml',
    ]
);
