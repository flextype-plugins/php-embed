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

namespace Flextype;

use Flextype\Component\Event\Event;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [php] echo "Hello World"; [/php]
    Entries::shortcode()->addHandler('php', function(ShortcodeInterface $s) {
        ob_start();
        eval($s->getContent());
        return ob_get_clean();
    });
});
