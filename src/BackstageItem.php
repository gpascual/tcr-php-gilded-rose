<?php

namespace GildedRose;

class BackstageItem extends Item
{

    public function updateQuality()
    {
        $this->increaseQuality();

        if ($this->getSellIn() < 11) {
            $this->increaseQuality();
        }

        if ($this->getSellIn() < 6) {
            $this->increaseQuality();
        }

        $this->updateSellIn();

        if ($this->getSellIn() < 0) {
            $this->setQuality($this->getQuality() - $this->getQuality());
        }
    }
}
