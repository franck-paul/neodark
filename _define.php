<?php
/**
 * @brief NeoDark, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "NeoDark",       // Name
    "NeoDark theme", // Description
    "Franck Paul",   // Author
    '1.0',           // Version
    array(
        'type'                 => 'theme',                               // Type
        'tplset'               => 'dotty'                                // tplset
    )
);
