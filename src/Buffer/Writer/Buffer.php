<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Binary\Buffer\Writer;

use Konceiver\Binary\Hex\Writer as Hex;

class Buffer
{
    use Concerns\Generic;
    use Concerns\Hex;
    use Concerns\Integer;
    use Concerns\UnsignedInteger;

    /**
     * The concatenated bytes.
     *
     * @var string
     */
    private $bytes;

    /**
     * Create a new byte buffer instance.
     */
    public function __construct()
    {
        $this->bytes = '';
    }

    /**
     * Return the raw bytes representation.
     *
     * @return string
     */
    public function toBytes(): string
    {
        return $this->bytes;
    }

    /**
     * Return the hex representation of the bytes.
     *
     * @return string
     */
    public function toHex(): string
    {
        return bin2hex($this->bytes);
    }
}
