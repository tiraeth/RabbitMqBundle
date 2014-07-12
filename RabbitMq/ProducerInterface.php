<?php

namespace OldSound\RabbitMqBundle\RabbitMq;

interface ProducerInterface
{
    /**
     * Publishes the message and merges additional properties with basic properties
     *
     * @param string $msgBody
     * @param string $routingKey
     * @param array $additionalProperties
     */
    public function publish($msgBody, $routingKey = '', $additionalProperties = array());
}
