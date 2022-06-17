<?php

namespace OlegBodyansky\DeepL\Api\Endpoints;

use OlegBodyansky\DeepL\Api\Resources\Usage;

class UsageEndpoint extends EndpointAbstract
{
    protected $resourcePath = 'usage';

    protected function getResourceObject()
    {
        return new Usage($this->client);
    }

    /**
     * Get the usage.
     *
     * @return \OlegBodyansky\DeepL\Api\Resources\BaseResource|\OlegBodyansky\DeepL\Api\Resources\Usage
     * @throws \OlegBodyansky\DeepL\Api\Exceptions\ApiException
     */
    public function get()
    {
        return $this->getRequest();
    }
}
