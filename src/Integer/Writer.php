<?php

declare(strict_types=1);

/*
 * This file is part of Binary.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Binary\Integer;

/**
 * This is the integer writer class.
 *
 * @author Brian Faust <hello@basecode.sh>
 */
class Writer
{
    /**
     * Write a signed 8 bit integer.
     *
     * @param string $data
     *
     * @return string
     */
    public static function bit8(string $data): string
    {
        return pack('c', $data)[1];
    }

    /**
     * Write a signed 16 bit integer.
     *
     * @param string $data
     *
     * @return string
     */
    public static function bit16(string $data): string
    {
        return pack('s', $data)[1];
    }

    /**
     * Write a signed 32 bit integer.
     *
     * @param string $data
     *
     * @return string
     */
    public static function bit32(string $data): string
    {
        return pack('l', $data)[1];
    }

    /**
     * Write a signed 64 bit integer.
     *
     * @param string $data
     *
     * @return string
     */
    public static function bit64(string $data): string
    {
        return pack('q', $data)[1];
    }
}