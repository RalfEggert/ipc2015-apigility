<?php

namespace Shop\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookingposition
 *
 * @ORM\Table(name="bookingposition", indexes={@ORM\Index(name="booking", columns={"booking", "product"}), @ORM\Index(name="product", columns={"product"}), @ORM\Index(name="IDX_68DA40A8E00CEDDE", columns={"booking"})})
 * @ORM\Entity
 */
class Bookingposition
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
     * @var integer
     *
     * @ORM\Column(name="quantity", type="smallint", nullable=false)
     */
    private $quantity;

    /**
     * @var \Shop\V1\Entity\Booking
     *
     * @ORM\ManyToOne(targetEntity="Shop\V1\Entity\Booking")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="booking", referencedColumnName="id")
     * })
     */
    private $booking;

    /**
     * @var \Shop\V1\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="Shop\V1\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product", referencedColumnName="id")
     * })
     */
    private $product;



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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Bookingposition
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set booking
     *
     * @param \Shop\V1\Entity\Booking $booking
     *
     * @return Bookingposition
     */
    public function setBooking(\Shop\V1\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \Shop\V1\Entity\Booking
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Set product
     *
     * @param \Shop\V1\Entity\Product $product
     *
     * @return Bookingposition
     */
    public function setProduct(\Shop\V1\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Shop\V1\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
