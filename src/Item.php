<?php

namespace GildedRose;

class Item
{
    protected $name;
    protected $sellIn;
    protected $quality;

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

    public function getSellIn()
    {
        return $this->sellIn;
    }

    public function getQuality()
    {
        return $this->quality;
    }

    public function updateQuality()
    {
        $this->decreaseQuality();

        $this->updateSellIn();

        if ($this->getSellIn() < 0) {
            $this->decreaseQuality();
        }
    }

    protected function setName(
        $name
    ) {
        $this->name = $name;
    }

    protected function setSellIn(
        $sellIn
    ) {
        $this->sellIn = $sellIn;
    }

    protected function setQuality(
        $quality
    ) {
        $this->quality = $quality;
    }

    protected function updateSellIn()
    {
        $this->setSellIn($this->getSellIn() - 1);
    }

    protected function decreaseQuality()
    {
        if ($this->getQuality() > 0) {
            $this->setQuality($this->getQuality() - 1);
        }
    }

    protected function increaseQuality()
    {
        if ($this->getQuality() < 50) {
            $this->setQuality($this->getQuality() + 1);
        }
    }
}
