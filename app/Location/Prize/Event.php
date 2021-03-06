<?php

namespace ALttP\Location\Prize;

use ALttP\Location\Prize;
use ALttP\Item;
use ALttP\Item\Event as ItemEvent;

/**
 * Event Location
 */
class Event extends Prize
{
    /**
     * sets the item for this location.
     *
     * @param Item|null $item can only be items that are Logical Events.
     *
     * @return $this
     */
    public function setItem(Item $item = null)
    {
        if (!$item instanceof ItemEvent && $item !== null) {
            throw new \Exception('Trying to set non-Event in an Event Prize Location');
        }

        $this->item = $item;
        return $this;
    }
}
