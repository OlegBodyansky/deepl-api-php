<?php

namespace OlegBodyansky\DeepL\Api\Resources;

use OlegBodyansky\DeepL\Api\DeepLApiClient;

abstract class BaseResource
{
    /**
     * @var DeepLApiClient
     */
    protected $client;

    /**
     * @param $client
     */
    public function __construct(DeepLApiClient $client)
    {
        $this->client = $client;
    }
}
