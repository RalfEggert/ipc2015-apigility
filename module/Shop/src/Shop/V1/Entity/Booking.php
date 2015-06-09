<?php

namespace Shop\V1\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking", indexes={@ORM\Index(name="customer", columns={"customer"})})
 * @ORM\Entity
 */
class Booking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var \Shop\V1\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="Shop\V1\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Bookingposition")
     * @ORM\JoinTable(name="bookingposition",
     *      joinColumns={@ORM\JoinColumn(name="booking", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="product", referencedColumnName="id")}
     *      )
     **/
    private $positions;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Booking
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Booking
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set customer
     *
     * @param \Shop\V1\Entity\Customer $customer
     *
     * @return Booking
     */
    public function setCustomer(\Shop\V1\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Shop\V1\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->positions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add position
     *
     * @param \Shop\V1\Entity\Bookingposition $position
     *
     * @return Booking
     */
    public function addPosition(\Shop\V1\Entity\Bookingposition $position)
    {
        $this->positions[] = $position;

        return $this;
    }

    /**
     * Remove position
     *
     * @param \Shop\V1\Entity\Bookingposition $position
     */
    public function removePosition(\Shop\V1\Entity\Bookingposition $position)
    {
        $this->positions->removeElement($position);
    }

    /**
     * Get positions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPositions()
    {
        return $this->positions;
    }
}