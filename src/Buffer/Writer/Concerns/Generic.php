<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Binary\Buffer\Writer\Concerns;

trait Generic
{
    /**
     * Write the given value as is.
     *
     * @param string $value
     *
     * @return \Konceiver\Binary\Buffer\Writer\Buffer
     */
    public function writeString(string $value): self
    {
        $this->bytes .= $value;

        return $this;
    }

    /**
     * Write N amount of NUL bytes.
     *
     * @param int $length
     *
     * @return \Konceiver\Binary\Buffer\Writer\Buffer
     */
    public function fill(int $length): self
    {
        $this->bytes .= pack("x{$length}");

        return $this;
    }
}
