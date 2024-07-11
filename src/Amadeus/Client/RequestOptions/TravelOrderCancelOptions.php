<?php

namespace Amadeus\Client\RequestOptions;

/**
 * Travel_OrderCancel Request Options
 *
 * @package Amadeus\Client\RequestOptions
 * @author Artem Zakharchenko <artz.relax@gmail.com>
 */
class TravelOrderCancelOptions extends AbstractTravelOptions
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $ownerCode;
}
