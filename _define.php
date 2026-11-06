<?php

/**
 * @brief NeoDark, a theme for Dotclear 2
 *
 * CSS heavily based on the design by https://lord.re/ - CC4-BY-SA
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (contact@open-time.net)
 * @copyright GPL-2.0
 */
declare(strict_types=1);

if (isset($this) && is_object($this) && method_exists($this, 'registerModule') && isset($this->id) && is_string($this->id)) {
    $this->registerModule(
        'NeoDark',
        'NeoDark theme for Dotclear 2 - design by https://lord.re/',
        'Franck Paul',
        '7.1',
        [
            'date'     => '2026-11-06T10:09:48+0100',
            'requires' => [['core', '2.36']],
            'type'     => 'theme',
            'tplset'   => 'dotty',
            'overload' => true,

            'details'    => 'https://open-time.net/?q=neodark',
            'support'    => 'https://github.com/franck-paul/neodark',
            'repository' => 'https://raw.githubusercontent.com/franck-paul/neodark/main/dcstore.xml',
            'license'    => 'gpl2',
        ]
    );
}
