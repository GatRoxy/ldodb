<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place", indexes={@ORM\Index(name="fk_place_uri_idx", columns={"place_uri"}), @ORM\Index(name="fk_place_region1_idx", columns={"region_id"})})
 * @ORM\Entity
 */
class Place
{
    /**
     * @var integer
     *
     * @ORM\Column(name="place_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $placeId;

    /**
     * @var string
     *
     * @ORM\Column(name="place_name", type="string", length=255, nullable=true)
     */
    private $placeName;

    /**
     * @var string
     *
     * @ORM\Column(name="place_uri", type="string", length=255, nullable=true)
     */
    private $placeUri;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_lake_district", type="boolean", nullable=true, options={"default": false})
     */
    private $inLakeDistrict = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=5, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=5, nullable=true)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer", nullable=true)
     */
    private $regionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=true)
     */
    private $countryId;


}

