<?php

require_once 'src/Item.php';

class GildedRose
{
    public static function updateQuality(
        $items
    ) {
        foreach ($items as $iValue) {
            if ('Aged Brie' == $iValue->getName()) {
                if ($iValue->getQuality() < 50) {
                    $iValue->setQuality($iValue->getQuality() + 1);
                }

                $iValue->setSellIn($iValue->getSellIn() - 1);

                if ($iValue->getSellIn() < 0) {
                    if ($iValue->getQuality() < 50) {
                        $iValue->setQuality($iValue->getQuality() + 1);
                    }
                }

                return;
            }

            if ('Backstage passes to a TAFKAL80ETC concert' == $iValue->getName()) {
                if ($iValue->getQuality() < 50) {
                    $iValue->setQuality($iValue->getQuality() + 1);
                    if ($iValue->getSellIn() < 11) {
                        if ($iValue->getQuality() < 50) {
                            $iValue->setQuality($iValue->getQuality() + 1);
                        }
                    }

                    if ($iValue->getSellIn() < 6) {
                        if ($iValue->getQuality() < 50) {
                            $iValue->setQuality($iValue->getQuality() + 1);
                        }
                    }
                }

                $iValue->setSellIn($iValue->getSellIn() - 1);

                if ($iValue->getSellIn() < 0) {
                    $iValue->setQuality($iValue->getQuality() - $iValue->getQuality());
                }

                return;
            }

            if ('Sulfuras, Hand of Ragnaros' == $iValue->getName()) {
                return;
            }

            if ($iValue->getQuality() > 0) {
                $iValue->setQuality($iValue->getQuality() - 1);
            }

            $iValue->setSellIn($iValue->getSellIn() - 1);

            if ($iValue->getSellIn() < 0) {
                if ($iValue->getQuality() > 0) {
                    $iValue->setQuality($iValue->getQuality() - 1);
                }
            }
        }
    }
}
