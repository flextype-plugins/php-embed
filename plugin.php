<?php

declare(strict_types=1);

namespace Flextype\Plugin\PHPEmbed;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [php] echo "Hello World"; [/php]
flextype('parsers')->shortcode()->addHandler('php', function (ShortcodeInterface $s) {
    ob_start();
    eval($s->getContent());
    return ob_get_clean();
});
