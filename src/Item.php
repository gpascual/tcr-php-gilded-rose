<?php

namespace GildedRose;

class Item
{
    public function __construct(
        protected string $name,
        protected int $sellIn,
        protected int $quality
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSellIn(): int
    {
        return $this->sellIn;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function updateQuality(): void
    {
        $this->decreaseQuality();

        $this->updateSellIn();

        if ($this->sellIn < 0) {
            $this->decreaseQuality();
        }
    }

    protected function updateSellIn(): void
    {
        --$this->sellIn;
    }

    protected function decreaseQuality(): void
    {
        if ($this->quality > 0) {
            --$this->quality;
        }
    }

    protected function increaseQuality(): void
    {
        if ($this->quality < 50) {
            ++$this->quality;
        }
    }
}
