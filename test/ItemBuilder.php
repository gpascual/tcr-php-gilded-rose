<?php

namespace GildedRose\Test;

use GildedRose\AgedBrieItem;
use GildedRose\BackstageItem;
use GildedRose\Item;
use GildedRose\SulfurasItem;

class ItemBuilder
{
    var $name;
    var $sellIn;
    var $quality;

    private function __construct()
    {
        $this->name = "Un item cualquiera";
        $this->sellIn = 10;
        $this->quality = 10;
    }

    public static function newItem()
    {
        return new ItemBuilder();
    }

    public function withName(
        $name
    ) {
        $this->name = $name;
        return $this;
    }

    public function withSellIn(
        $sellIn
    ) {
        $this->sellIn = $sellIn;
        return $this;
    }

    public function withQuality(
        $quality
    ) {
        $this->quality = $quality;
        return $this;
    }

    public function build()
    {
        switch ($this->name) {
            case 'Aged Brie':
                return new AgedBrieItem($this->name, $this->sellIn, $this->quality);
            case 'Sulfuras, Hand of Ragnaros':
                return new SulfurasItem($this->name, $this->sellIn, $this->quality);
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new BackstageItem($this->name, $this->sellIn, $this->quality);
        }

        return new Item(
            $this->name,
            $this->sellIn,
            $this->quality
        );
    }
}
