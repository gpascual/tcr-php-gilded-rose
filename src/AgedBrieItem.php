<?php

namespace GildedRose;

class AgedBrieItem extends Item
{
    public function updateQuality()
    {
        $this->increaseQuality();

        $this->updateSellIn();

        if ($this->getSellIn() < 0) {
            $this->increaseQuality();
        }
    }
}
