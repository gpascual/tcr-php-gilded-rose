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
                    if ('Backstage passes to a TAFKAL80ETC concert' == $iValue->getName()) {
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
                }
            } else {
                if ($iValue->getQuality() > 0) {
                    if ('Sulfuras, Hand of Ragnaros' != $iValue->getName()) {
                        $iValue->setQuality($iValue->getQuality() - 1);
                    }
                }
            }//end if
            // end if
            if ('Sulfuras, Hand of Ragnaros' != $iValue->getName()) {
                $iValue->setSellIn($iValue->getSellIn() - 1);
            }

            if ($iValue->getSellIn() < 0) {
                if ('Backstage passes to a TAFKAL80ETC concert' != $iValue->getName()) {
                    if ($iValue->getQuality() > 0) {
                        if ('Sulfuras, Hand of Ragnaros' != $iValue->getName()) {
                            $iValue->setQuality($iValue->getQuality() - 1);
                        }
                    }
                } else {
                    $iValue->setQuality($iValue->getQuality() - $iValue->getQuality());
                }
            }
        }//end foreach

    }//end updateQuality()


}//end class
