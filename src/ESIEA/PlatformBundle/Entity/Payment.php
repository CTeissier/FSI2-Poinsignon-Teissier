<?php
namespace ESIEA\PlatformBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
// N'oubliez pas ce use :

/**
 * @ORM\Table(name="esiea_payment")
 * @ORM\Entity(repositoryClass="ESIEA\PlatformBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Payment
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="cardnumber", type="string", length=255)
   */
  private $cardnumber;


  /**
   * @var string
   *
   * @ORM\Column(name="zipcode", type="string", length=255)
   */
  private $zipcode;


  /**
   * @var string
   *
   * @ORM\Column(name="cardowner", type="string", length=255)
   */
  private $cardowner;


  /**
   * @var string
   *
   * @ORM\Column(name="deliveryname", type="string", length=255)
   */
  private $deliveryname;
  /**
   * @var string
   *
   * @ORM\Column(name="address", type="string", length=2550)
   */
  private $address;
   /**
   * @var string
   *
   * @ORM\Column(name="city", type="string", length=2550)
   */
  private $city;
    



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
     * Set cardnumber
     *
     * @param string $cardnumber
     *
     * @return Payment
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;

        return $this;
    }

    /**
     * Get cardnumber
     *
     * @return string
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Payment
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set cardowner
     *
     * @param string $cardowner
     *
     * @return Payment
     */
    public function setCardowner($cardowner)
    {
        $this->cardowner = $cardowner;

        return $this;
    }

    /**
     * Get cardowner
     *
     * @return string
     */
    public function getCardowner()
    {
        return $this->cardowner;
    }

    /**
     * Set deliveryname
     *
     * @param string $deliveryname
     *
     * @return Payment
     */
    public function setDeliveryname($deliveryname)
    {
        $this->deliveryname = $deliveryname;

        return $this;
    }

    /**
     * Get deliveryname
     *
     * @return string
     */
    public function getDeliveryname()
    {
        return $this->deliveryname;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Payment
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Payment
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

}
