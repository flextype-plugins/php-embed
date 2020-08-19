<?php

/**
 *
 * Flextype PHP Embed Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\PHPEmbed;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [php] echo "Hello World"; [/php]
$flextype->container('shortcode')->addHandler('php', function (ShortcodeInterface $s) {
    ob_start();
    eval($s->getContent());
    return ob_get_clean();
});
