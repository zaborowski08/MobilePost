<?php
namespace AppBundle\Handler;

use AppBundle\Model\PostmanTravelInterface;

Interface PostmanTravelFormHandlerInterface
{
    public function post(array $parameters);
}