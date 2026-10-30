<?php
/*
 * @brief One Page Grayscale, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @author Start Bootstrap and Philippe aka amalgame
 * @copyright GPL-2.0
 */

if (isset($this) && is_object($this) && method_exists($this, 'registerModule') && isset($this->id) && is_string($this->id)) {
    $this->registerModule(
        'One Page Grayscale',
        'One Page Grayscale Bootstrap theme for Dotclear',
        'Start Bootstrap and Philippe aka amalgame',
        '2.3',
        [
            'requires'          => [['core', '2.36']],
            'standalone_config' => true,
            'type'              => 'theme',
            'tplset'            => 'mustek',
            'overload'          => true,
        ]
    );
}
