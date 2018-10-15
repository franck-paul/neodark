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

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "NeoDark",                                                   // Name
    "NeoDark theme for Dotclear 2 - design by https://lord.re/", // Description
    "Franck Paul",                                               // Author
    '1.3',                                                       // Version
    [
        'requires' => [['core', '2.13']], // Dependencies
        'type'     => 'theme',            // Type
        'tplset'   => 'dotty'            // tplset
    ]
);
