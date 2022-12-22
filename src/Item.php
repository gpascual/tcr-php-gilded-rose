<?php

namespace GildedRose;

class Item
{
    var $name;
    var $sellIn;
    var $quality;

    public function __construct(
        $name,
        $sellIn,
        $quality
    ) {
        $this->setName($name);
        $this->setSellIn($sellIn);
        $this->setQuality($quality);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(
        $name
    ) {
        $this->name = $name;
    }

    public function getSellIn()
    {
        return $this->sellIn;
    }

    public function setSellIn(
        $sellIn
    ) {
        $this->sellIn = $sellIn;
    }

    public function getQuality()
    {
        return $this->quality;
    }

    public function setQuality(
        $quality
    ) {
        $this->quality = $quality;
    }

    public function updateSellIn()
    {
        $this->setSellIn($this->getSellIn() - 1);
    }

    public function decreaseQuality()
    {
        if ($this->getQuality() > 0) {
            $this->setQuality($this->getQuality() - 1);
        }
    }

    public function updateQuality()
    {
        $this->decreaseQuality();

        $this->updateSellIn();

        if ($this->getSellIn() < 0) {
            $this->decreaseQuality();
        }
    }

    public function increaseQuality()
    {
        if ($this->getQuality() < 50) {
            $this->setQuality($this->getQuality() + 1);
        }
    }
}
