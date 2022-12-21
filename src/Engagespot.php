<?php

declare(strict_types=1);

namespace jobin\engagespot;

class Engagespot
{

    private $_apiKey;

    private $_apiSecret;

    private $_baseUrl = 'https://api.engagespot.co/v3/';

    /**
     * Create a new Engagespot Instance
     */
    public function __construct($config = null)
    {
        if (is_array($config)) {

            $this->setApiKey($config['apiKey']);
            $this->setApiSecret($config['apiSecret']);

            if (isset($config['baseUrl'])) {
                $this->setBaseUrl($config['baseUrl']);
            }
        } else {
            throw new EngagespotException('Error: __construct() - Configuration data is missing.');
        }
    }
    /**
     * Set config varibles
     */
    public function setBaseUrl()
    {
        return $this->_baseUrl;
    }

    public function setApiKey()
    {
        return $this->_apiKey;
    }

    public function setApiSecret()
    {
        return $this->_apiSecret;
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }

    public function updateOrCreate(string $identifier, object $profile = null)
    {
        if (!$identifier) {
            throw new EngagespotException('Error: updateOrCreate() - identifier data is missing.');
        }
        return $identifier;
    }
}
