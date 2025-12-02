<?php
/**
 * @brief One Page Grayscale, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @author Start Bootstrap and Philippe aka amalgame
 * @copyright GPL-2.0
 */

declare(strict_types=1);

namespace Dotclear\Theme\onepagegrayscale;

use Dotclear\App;
use Dotclear\Helper\Process\TraitProcess;

class Frontend
{
    use TraitProcess;

    public static function init(): bool
    {
        return self::status(My::checkContext(My::FRONTEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        # load locales
        My::l10n('main');

        App::frontend()->template()->addValue('EntryPosition', [self::class,'EntryPosition']);
        
        return true;
    }

    public static function EntryPosition()
    {
        return '<?php echo dcCore::app()->ctx->cur_loop->index()+1; ?>';
    }
}
