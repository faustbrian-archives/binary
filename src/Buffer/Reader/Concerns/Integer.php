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

namespace KodeKeep\Binary\Buffer\Reader\Concerns;

use KodeKeep\Binary\Integer\Reader;

trait Integer
{
    /**
     * Read a signed 8 bit integer.
     *
     * @return \KodeKeep\Binary\Buffer\Reader\Buffer
     */
    public function readInt8()
    {
        $value = Reader::bit8($this->bytes);

        $this->skip(1);

        return $value;
    }

    /**
     * Read a signed 16 bit integer.
     *
     * @return \KodeKeep\Binary\Buffer\Reader\Buffer
     */
    public function readInt16()
    {
        $value = Reader::bit16($this->bytes);

        $this->skip(2);

        return $value;
    }

    /**
     * Read a signed 32 bit integer.
     *
     * @return \KodeKeep\Binary\Buffer\Reader\Buffer
     */
    public function readInt32()
    {
        $value = Reader::bit32($this->bytes);

        $this->skip(4);

        return $value;
    }

    /**
     * Read a signed 64 bit integer.
     *
     * @return \KodeKeep\Binary\Buffer\Reader\Buffer
     */
    public function readInt64()
    {
        $value = Reader::bit64($this->bytes);

        $this->skip(8);

        return $value;
    }
}
