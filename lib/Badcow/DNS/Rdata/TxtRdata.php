<?php
/*
 * This file is part of Badcow DNS Library.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Badcow\DNS\Rdata;

class TxtRdata implements RdataInterface
{
    const TYPE = "TXT";

    /**
     * @var string
     */
    private $text;

    /**
     * @param $text
     * @return TxtRdata
     */
    public function setText($text)
    {
        $this->text = addslashes($text);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLength()
    {
        return strlen((string) $this);
    }

    /**
     * {@inheritdoc}
     */
    public function output()
    {
        return '"' . $this->text . '"';
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return self::TYPE;
    }
}