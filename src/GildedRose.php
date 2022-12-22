<?php

require_once 'src/Item.php';

class GildedRose {

	public static function updateQuality(
		$items
	) {
		foreach ($items as $iValue) {
			if ("Aged Brie" == $iValue->getName()) {
                if ($iValue->getQuality() < 50) {
                    $iValue->setQuality($iValue->getQuality() + 1);
                    if ("Backstage passes to a TAFKAL80ETC concert" == $iValue->getName()) {
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

                if ("Sulfuras, Hand of Ragnaros" != $iValue->getName()) {
                    $iValue->setSellIn($iValue->getSellIn() - 1);
                }

                if ($iValue->getSellIn() < 0) {
                    if ("Aged Brie" == $iValue->getName()) {
                        if ($iValue->getQuality() < 50) {
                            $iValue->setQuality($iValue->getQuality() + 1);
                        }
                    } else {
                        if ("Backstage passes to a TAFKAL80ETC concert" != $iValue->getName()) {
                            if ($iValue->getQuality() > 0) {
                                if ("Sulfuras, Hand of Ragnaros" != $iValue->getName()) {
                                    $iValue->setQuality($iValue->getQuality() - 1);
                                }
                            }
                        } else {
                            $iValue->setQuality($iValue->getQuality() - $iValue->getQuality());
                        }
                    }
                    return;
                }
            } else {
                if ("Backstage passes to a TAFKAL80ETC concert" == $iValue->getName()) {
                    if ($iValue->getQuality() < 50) {
                        $iValue->setQuality($iValue->getQuality() + 1);
                        if ("Backstage passes to a TAFKAL80ETC concert" == $iValue->getName()) {
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
                        if ("Sulfuras, Hand of Ragnaros" != $iValue->getName()) {
                            $iValue->setQuality($iValue->getQuality() - 1);
                        }
                    }
                }
            }

			if ("Sulfuras, Hand of Ragnaros" != $iValue->getName()) {
				$iValue->setSellIn($iValue->getSellIn() - 1);
			}

			if ($iValue->getSellIn() < 0) {
				if ("Aged Brie" == $iValue->getName()) {
                    if ($iValue->getQuality() < 50) {
                        $iValue->setQuality($iValue->getQuality() + 1);
                    }
                } else {
                    if ("Backstage passes to a TAFKAL80ETC concert" != $iValue->getName()) {
                        if ($iValue->getQuality() > 0) {
                            if ("Sulfuras, Hand of Ragnaros" != $iValue->getName()) {
                                $iValue->setQuality($iValue->getQuality() - 1);
                            }
                        }
                    } else {
                        $iValue->setQuality($iValue->getQuality() - $iValue->getQuality());
                    }
                }
			}
		}
	}
}
