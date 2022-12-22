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
                if ($iValue->getQuality() < 50) {
                    $iValue->setQuality($iValue->getQuality() + 1);
                }

                $iValue->updateSellIn();

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
                }

                if ($iValue->getSellIn() < 11) {
                    if ($iValue->getQuality() < 50) {
                        if ($iValue->getQuality() < 50) {
                            $iValue->setQuality($iValue->getQuality() + 1);
                        }

                        if ($iValue->getSellIn() < 6) {
                            if ($iValue->getQuality() < 50) {
                                $iValue->setQuality($iValue->getQuality() + 1);
                            }
                        }
                    }
                } elseif ($iValue->getSellIn() < 6) {
                    if ($iValue->getQuality() < 50) {
                        if ($iValue->getQuality() < 50) {
                            $iValue->setQuality($iValue->getQuality() + 1);
                        }
                    }
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

            self::decreaseQuality($iValue);

            $iValue->updateSellIn();

            if ($iValue->getSellIn() < 0) {
                self::decreaseQuality($iValue);
            }
        }
    }

    public static function decreaseQuality(Item $iValue): void
    {
        if ($iValue->getQuality() > 0) {
            $iValue->setQuality($iValue->getQuality() - 1);
        }
    }
}
