<?php

namespace AppBundle\Model;
Interface PostmanTravelInterface
{
    public function setPostman(\AppBundle\Entity\Postman $postman = null);
	public function getPostman();
	public function getLat();
    public function setLat($lat);
    public function getLarg();
    public function setLarg($larg);
    public function getDistance();
    public function setDistance($distance);
    public function getTimestamp();
    public function setTimestamp($timestamp);
}