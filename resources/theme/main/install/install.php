<?php
use rohsyl\OmegaCore\Utils\Overt\Theme\Installer\Installer;
use rohsyl\OmegaCore\Utils\Overt\Theme\ThemeManager;

/**
 * @return Installer
 */
return Installer::For('templated-hielo')
    ->set([
        'title' => 'Hielo - A FREE RESPONSIVE WEB SITE TEMPLATE BY TEMPLATED',
        'description' => 'A super slick landing page with a parallax (!!!) banner carousel.',
        'website' => 'https://templated.co/hielo',
        'colors' => ['#000000', '#ffffff', '#a6a6a6']
    ])
    ->postInstall(function(ThemeManager $themeManager){
        $themeManager->widgetArea()->create('sidebar');
        $themeManager->widgetArea()->create('footer');
    });
