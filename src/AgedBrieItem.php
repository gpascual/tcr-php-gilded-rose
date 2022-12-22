<?php

namespace GildedRose;

class AgedBrieItem extends Item
{
    public function updateQuality(): void
    {
        $this->increaseQuality();

        $this->updateSellIn();

        if ($this->sellIn < 0) {
            $this->increaseQuality();
        }
    }
}
