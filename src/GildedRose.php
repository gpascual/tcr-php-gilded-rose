<?php

namespace GildedRose;

class GildedRose
{
    /**
     * @param Item[] $items
     * @return void
     */
    public static function updateQuality(array $items)
    {
        foreach ($items as $iValue) {
            if ('Aged Brie' == $iValue->getName()) {
                $iValue->increaseQuality();

                $iValue->updateSellIn();

                if ($iValue->getSellIn() < 0) {
                    $iValue->increaseQuality();
                }

                return;
            }

            if ('Backstage passes to a TAFKAL80ETC concert' == $iValue->getName()) {
                $iValue->increaseQuality();

                if ($iValue->getSellIn() < 11) {
                    $iValue->increaseQuality();
                }

                if ($iValue->getSellIn() < 6) {
                    $iValue->increaseQuality();
                }

                $iValue->updateSellIn();

                if ($iValue->getSellIn() < 0) {
                    $iValue->setQuality($iValue->getQuality() - $iValue->getQuality());
                }

                return;
            }

            $iValue->updateQuality();
        }
    }

}
