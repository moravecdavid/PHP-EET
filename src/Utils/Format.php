<?php

/**
 * This file is part of the PHP-EET package.
 *
 * (c) Filip Sedivy <mail@filipsedivy.cz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license MIT
 * @author  Filip Sedivy <mail@filipsedivy.cz>
 */

namespace FilipSedivy\EET\Utils;

/**
 * Class Format
 * @package FilipSedivy\EET\Utils
 */
class Format
{
    /**
     *
     * @param  double|float|null $value
     *
     * @return string|null
     */
    public static function price($value)
    {
        return number_format($value, 2, '.', '');
    }

    /**
     * @param   string $code
     *
     * @return  string
     */
    public static function BKB($code)
    {
        $r = '';
        for ($i = 0; $i < 40; $i++)
        {
            if ($i % 8 == 0 && $i != 0)
            {
                $r .= '-';
            }
            $r .= $code[$i];
        }
        return $r;
    }
}