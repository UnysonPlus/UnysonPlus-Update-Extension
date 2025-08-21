<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Update', 'fw' );
$manifest['slug']        = 'unysonplus-update';
$manifest['description'] = __( 
    'Keeps your framework, extensions, and theme up to date.', 
    'fw' 
);

$manifest['version']     = '1.0.12';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repo Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Update-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Update-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Extra Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
