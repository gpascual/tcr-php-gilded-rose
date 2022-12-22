<?php

namespace GildedRose\Test;

use GildedRose\AgedBrieItem;
use GildedRose\BackstageItem;
use GildedRose\Item;
use GildedRose\SulfurasItem;

class ItemBuilder
{
    public $name;
    public $sellIn;
    public $quality;

    private function __construct()
    {
        $this->name = "Un item cualquiera";
        $this->sellIn = 10;
        $this->quality = 10;
    }

    public static function newItem(): ItemBuilder
    {
        return new ItemBuilder();
    }

    public function withName($name): static
    {
        $this->name = $name;
        return $this;
    }

    public function withSellIn($sellIn): static {
        $this->sellIn = $sellIn;
        return $this;
    }

    public function withQuality($quality): static {
        $this->quality = $quality;
        return $this;
    }

    public function build(): Item
    {
        return match ($this->name) {
            'Aged Brie' => new AgedBrieItem($this->name, $this->sellIn, $this->quality),
            'Sulfuras, Hand of Ragnaros' => new SulfurasItem($this->name, $this->sellIn, $this->quality),
            'Backstage passes to a TAFKAL80ETC concert' => new BackstageItem(
                $this->name,
                $this->sellIn,
                $this->quality
            ),
            default => new Item(
                $this->name,
                $this->sellIn,
                $this->quality
            ),
        };
    }
}
