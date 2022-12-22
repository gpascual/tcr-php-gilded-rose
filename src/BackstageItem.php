<?php

namespace GildedRose;

class BackstageItem extends Item
{

    public function updateQuality(): void
    {
        $this->increaseQuality();

        if ($this->sellIn < 11) {
            $this->increaseQuality();
        }

        if ($this->sellIn < 6) {
            $this->increaseQuality();
        }

        $this->updateSellIn();

        if ($this->sellIn < 0) {
            $this->decreaseQuality();
        }
    }

    protected function decreaseQuality(): void
    {
        $this->quality = 0;
    }
}
