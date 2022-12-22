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

            $iValue->updateQuality();
        }
    }
}
