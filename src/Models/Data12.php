<?php

declare(strict_types=1);

/*
 * VoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceAPILib\Models;

use stdClass;
use VoiceAPILib\ApiHelper;

class Data12 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $customerCode;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $active;

    /**
     * @var string
     */
    private $did;

    /**
     * @var string
     */
    private $didType;

    /**
     * @var int
     */
    private $activationCost;

    /**
     * @var string|null
     */
    private $incoming;

    /**
     * @var string|null
     */
    private $destinationDetail;

    /**
     * @var int|null|string
     */
    private $isActive;

    /**
     * @param string $customerCode
     * @param int $id
     * @param int $active
     * @param string $did
     * @param string $didType
     * @param int $activationCost
     */
    public function __construct(
        string $customerCode,
        int $id,
        int $active,
        string $did,
        string $didType,
        int $activationCost
    ) {
        $this->customerCode = $customerCode;
        $this->id = $id;
        $this->active = $active;
        $this->did = $did;
        $this->didType = $didType;
        $this->activationCost = $activationCost;
    }

    /**
     * Returns Customer Code.
     */
    public function getCustomerCode(): string
    {
        return $this->customerCode;
    }

    /**
     * Sets Customer Code.
     *
     * @required
     * @maps customer_code
     */
    public function setCustomerCode(string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Active.
     */
    public function getActive(): int
    {
        return $this->active;
    }

    /**
     * Sets Active.
     *
     * @required
     * @maps active
     */
    public function setActive(int $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Did.
     */
    public function getDid(): string
    {
        return $this->did;
    }

    /**
     * Sets Did.
     *
     * @required
     * @maps did
     */
    public function setDid(string $did): void
    {
        $this->did = $did;
    }

    /**
     * Returns Did Type.
     */
    public function getDidType(): string
    {
        return $this->didType;
    }

    /**
     * Sets Did Type.
     *
     * @required
     * @maps did_type
     */
    public function setDidType(string $didType): void
    {
        $this->didType = $didType;
    }

    /**
     * Returns Activation Cost.
     */
    public function getActivationCost(): int
    {
        return $this->activationCost;
    }

    /**
     * Sets Activation Cost.
     *
     * @required
     * @maps activation_cost
     */
    public function setActivationCost(int $activationCost): void
    {
        $this->activationCost = $activationCost;
    }

    /**
     * Returns Incoming.
     */
    public function getIncoming(): ?string
    {
        return $this->incoming;
    }

    /**
     * Sets Incoming.
     *
     * @maps incoming
     */
    public function setIncoming(?string $incoming): void
    {
        $this->incoming = $incoming;
    }

    /**
     * Returns Destination Detail.
     */
    public function getDestinationDetail(): ?string
    {
        return $this->destinationDetail;
    }

    /**
     * Sets Destination Detail.
     *
     * @maps destination_detail
     */
    public function setDestinationDetail(?string $destinationDetail): void
    {
        $this->destinationDetail = $destinationDetail;
    }

    /**
     * Returns Is Active.
     *
     * @return int|null|string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets Is Active.
     *
     * @maps isActive
     * @mapsBy anyOf(oneOf(anyOf(int,null),anyOf(string,null)),null)
     *
     * @param int|null|string $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['customer_code']      = $this->customerCode;
        $json['id']                 = $this->id;
        $json['active']             = $this->active;
        $json['did']                = $this->did;
        $json['did_type']           = $this->didType;
        $json['activation_cost']    = $this->activationCost;
        $json['incoming']           = $this->incoming;
        $json['destination_detail'] = $this->destinationDetail;
        $json['isActive']           =
            ApiHelper::verifyTypes(
                $this->isActive,
                'anyOf(oneOf(anyOf(int,null),anyOf(string,null)),null)'
            );

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
