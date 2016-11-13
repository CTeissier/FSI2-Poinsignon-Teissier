<?php
namespace ESIEA\PlatformBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
// N'oubliez pas ce use :

/**
 * @ORM\Table(name="esiea_payment")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Payment
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
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
   * @ORM\Column(name="cardowner", type="string", length=255)
   */
  private $cardowner;
  /**
   * @var string
   *
   * @ORM\Column(name="expirationdate", type="string", length=255)
   */
  private $expirationdate;
  /**
   * @var string
   *
   * @ORM\Column(name="ccv", type="string", length=255)
   */
  private $ccv;


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
     * Set expirationdate
     *
     * @param string $expirationdate
     *
     * @return Payment
     */
    public function setExpirationdate($expirationdate)
    {
        $this->expirationdate = $expirationdate;

        return $this;
    }

    /**
     * Get expirationdate
     *
     * @return string
     */
    public function getExpirationdate()
    {
        return $this->expirationdate;
    }

    /**
     * Set ccv
     *
     * @param string $ccv
     *
     * @return Payment
     */
    public function setCcv($ccv)
    {
        $this->ccv = $ccv;

        return $this;
    }

    /**
     * Get ccv
     *
     * @return string
     */
    public function getCcv()
    {
        return $this->ccv;
    }
}
