<?php

namespace Shop\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", indexes={@ORM\Index(name="address_id", columns={"invoice_address"}), @ORM\Index(name="delivery_address", columns={"delivery_address"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="changed", type="datetime", nullable=false)
     */
    private $changed;

    /**
     * @var \Shop\V1\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="Shop\V1\Entity\Address", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_address", referencedColumnName="id")
     * })
     */
    private $invoiceAddress;

    /**
     * @var \Shop\V1\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="Shop\V1\Entity\Address", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_address", referencedColumnName="id")
     * })
     */
    private $deliveryAddress;



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
     * Set changed
     *
     * @param \DateTime $changed
     *
     * @return Customer
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;

        return $this;
    }

    /**
     * Get changed
     *
     * @return \DateTime
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set invoiceAddress
     *
     * @param \Shop\V1\Entity\Address $invoiceAddress
     *
     * @return Customer
     */
    public function setInvoiceAddress(\Shop\V1\Entity\Address $invoiceAddress = null)
    {
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    /**
     * Get invoiceAddress
     *
     * @return \Shop\V1\Entity\Address
     */
    public function getInvoiceAddress()
    {
        return $this->invoiceAddress;
    }

    /**
     * Set deliveryAddress
     *
     * @param \Shop\V1\Entity\Address $deliveryAddress
     *
     * @return Customer
     */
    public function setDeliveryAddress(\Shop\V1\Entity\Address $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get deliveryAddress
     *
     * @return \Shop\V1\Entity\Address
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }
}
