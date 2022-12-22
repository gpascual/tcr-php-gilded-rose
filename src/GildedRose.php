<?php

namespace GildedRose;

class GildedRose
{
    /**
     * @param Item[] $items
     * @return void
     */
    public static function updateQuality(array $items)
    {
        foreach ($items as $iValue) {
            $iValue->updateQuality();
        }
    }
}
