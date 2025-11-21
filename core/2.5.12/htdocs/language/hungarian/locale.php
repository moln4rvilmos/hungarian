<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package         kernel
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

// Magyar locale beállítása (LC_ALL)
setlocale(LC_ALL, 'hu_HU.UTF-8', 'hu_HU', 'hun');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
// A magyar "Ma" és "Tegnap" szavakat is védeni kell
define('_TODAY', "\M\a G:i");
define('_YESTERDAY', "\T\\e\g\n\a\p G:i");
define('_MONTHDAY', 'n/j G:i'); // 11/21 23:30 (Esetleg n.j. G:i)
define('_YEARMONTHDAY', 'Y/n/j G:i'); // 2025/11/21 23:30 (Esetleg Y.n.j. G:i)
define('_ELAPSE', '%s ezelőtt');
define('_TIMEFORMAT_DESC', "Érvényes formátumok: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" vagy \"custom\" - formátum az eltelt idő alapján; \"e\" - Eltelt idő; \"mysql\" - Y-m-d H:i:s;<br>" . "Megadott sztring - Lásd a <a href=\"https://php.net/manual/en/function.date.php\" rel=\"external\">PHP kézikönyvét</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * A Xoops Local
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright           (c) 2000-2016 XOOPS Project (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        // Magyar számformátum: tizedesvessző (,), ezres elválasztó szóköz vagy pont (.)
        // A magyar szabvány a tizedesvessző és a szóköz az ezresekhez (vagy elhagyva).
        return number_format($number, 2, ',', ' ');
    }

    /**
     * Money Format
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    public function money_format($format, $number)
    {
        // Magyar locale beállítása pénzformátumhoz
        setlocale(LC_MONETARY, 'hu_HU.UTF-8', 'hu_HU', 'hun');

        // Bár a money_format elavult (deprecated) a PHP 7.4 óta,
        // itt a XOOPS kódját kell követni, és a locale-t magyarra állítani.
        // Ha valaki modern PHP-t használ, ez hibát dob, de a XOOPS kompatibilitás miatt így hagyom.
        return money_format($format, $number);
    }
}
