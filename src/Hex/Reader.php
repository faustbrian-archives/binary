<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Binary\Hex;

/**
 * This is the hex reader class.
 *
 * @author Brian Faust <brian@konceiver.dev>
 */
class Reader
{
    /**
     * Read a hex string with low nibble first.
     *
     * @param string $data
     * @param int    $offset
     * @param mixed  $nibble
     *
     * @return string
     */
    public static function low(string $data, int $offset = 0, $nibble = null): string
    {
        return unpack($nibble ? "h{$nibble}" : 'h', $data, $offset)[1];
    }

    /**
     * Read a hex string with high nibble first.
     *
     * @param string $data
     * @param int    $offset
     * @param mixed  $nibble
     *
     * @return string
     */
    public static function high(string $data, int $offset = 0, $nibble = null): string
    {
        return unpack($nibble ? "H{$nibble}" : 'H', $data, $offset)[1];
    }
}
