<?php
use rohsyl\OmegaCore\Utils\Overt\Theme\Component\Template;

/**
 * @var Template
 */
return Template::For('templated-hielo')
    ->registerComponentTemplateView('text', 'display', '1.0.0', 'text/textSuperStylish', 'Text on 3 column')
    ->registerComponentTemplateView('contact', 'display_info', '1.0.0', 'contact/information', 'Contact Informations')
    ;
