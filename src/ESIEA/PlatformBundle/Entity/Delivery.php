<?php
namespace ESIEA\PlatformBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="esiea_delivery")
 * @ORM\Entity(repositoryClass="ESIEA\PlatformBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Delivery
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
   * @var string
   *
   * @ORM\Column(name="fullname", type="string", length=255)
   */
  private $fullname;
  /**
   * @var string
   *
   * @ORM\Column(name="adressone", type="string", length=255)
   */
  private $adressone;
    /**
   * @var string
   *
   * @ORM\Column(name="adresstwo", type="string", length=255)
   */
  private $adresstwo;
    /**
   * @var string
   *
   * @ORM\Column(name="city", type="string", length=255)
   */
  private $city;
    /**
   * @var string
   *
   * @ORM\Column(name="zip", type="string", length=255)
   */
  private $zip;
    /**
   * @var string
   *
   * @ORM\Column(name="telephone", type="string", length=255)
   */
  private $telephone;
    /**
   * @ORM\Column(name="published", type="boolean")
   */
  private $published = true;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Delivery
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set adressone
     *
     * @param string $adressone
     *
     * @return Delivery
     */
    public function setAdressone($adressone)
    {
        $this->adressone = $adressone;

        return $this;
    }

    /**
     * Get adressone
     *
     * @return string
     */
    public function getAdressone()
    {
        return $this->adressone;
    }

    /**
     * Set adresstwo
     *
     * @param string $adresstwo
     *
     * @return Delivery
     */
    public function setAdresstwo($adresstwo)
    {
        $this->adresstwo = $adresstwo;

        return $this;
    }

    /**
     * Get adresstwo
     *
     * @return string
     */
    public function getAdresstwo()
    {
        return $this->adresstwo;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Delivery
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Delivery
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Delivery
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Delivery
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
}
