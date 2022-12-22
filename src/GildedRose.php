<?php

require_once 'src/Item.php';

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
                self::increaseQuality($iValue);

                $iValue->updateSellIn();

                if ($iValue->getSellIn() < 0) {
                    self::increaseQuality($iValue);
                }

                return;
            }

            if ('Backstage passes to a TAFKAL80ETC concert' == $iValue->getName()) {
                self::increaseQuality($iValue);

                if ($iValue->getSellIn() < 11) {
                    self::increaseQuality($iValue);
                }

                if ($iValue->getSellIn() < 6) {
                    self::increaseQuality($iValue);
                }

                $iValue->updateSellIn();

                if ($iValue->getSellIn() < 0) {
                    $iValue->setQuality($iValue->getQuality() - $iValue->getQuality());
                }

                return;
            }

            if ('Sulfuras, Hand of Ragnaros' == $iValue->getName()) {
                return;
            }

            $iValue->updateQuality();
        }
    }

    public static function increaseQuality(Item $iValue): void
    {
        if ($iValue->getQuality() < 50) {
            $iValue->setQuality($iValue->getQuality() + 1);
        }
    }

}
