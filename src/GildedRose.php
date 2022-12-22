<?php

namespace GildedRose;

class GildedRose
{
    /**
     * @param Item[] $items
     * @return void
     */
    public static function updateQuality(array $items): void
    {
        foreach ($items as $iValue) {
            $iValue->updateQuality();
        }
    }
}
