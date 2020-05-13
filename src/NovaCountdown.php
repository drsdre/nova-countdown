<?php

namespace Swooinc\NovaCountdown;

use Carbon\Carbon;
use Laravel\Nova\Card;

class NovaCountdown extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-countdown';
    }

    /**
     * Set the label at the bottom of the timer.
     *
     * @param  string  $label
     * @return self
     */
    public function label(string $label)
    {
        return $this->withMeta([
            'label' => $label,
        ]);
    }

    /**
     * Get the displayable name of the metric.
     *
     * @param  string  $name
     * @return string
     */
    public function name(string $name)
    {
        return $this->withMeta([
            'name' => $name,
        ]);
    }

    /**
     * Set the end date of the countdown.
     *
     * @param  \Carbon\Carbon  $date
     * @return self
     */
    public function to(Carbon $date)
    {
        return $this->withMeta([
            'to' => $date->timestamp * 1000
        ]);
    }
}
