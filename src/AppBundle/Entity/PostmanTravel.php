<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Model\PostmanTravelInterface;

/**
 * PostmanTravel
 *
 * @ORM\Table(name="postman_travel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostmanTravelRepository")
 */
class PostmanTravel implements PostmanTravelInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \stdClass
     * @ORM\ManyToOne(targetEntity="Postman",cascade={"persist"})
     * @ORM\JoinColumn(name="postman_id", referencedColumnName="id" )
     */
    private $postman;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="larg", type="float")
     */
    private $larg;

    /**
     * @var int
     *
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return PostmanTravel
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set larg
     *
     * @param float $larg
     *
     * @return PostmanTravel
     */
    public function setLarg($larg)
    {
        $this->larg = $larg;

        return $this;
    }

    /**
     * Get larg
     *
     * @return float
     */
    public function getLarg()
    {
        return $this->larg;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     *
     * @return PostmanTravel
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return PostmanTravel
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
   * Set postman
   *
   * @param \AppBundle\Entity\Postman $postman
   *
   * @return PostmanTravel
   */
  public function setPostman(\AppBundle\Entity\Postman $postman = null) {
    $this->postman = $postman;

    return $this;
  }

  /**
   * Get postman
   *
   * @return \AppBundle\Entity\PostmanTravel
   */
  public function getPostman() {
    return $this->postman;
  }
}

