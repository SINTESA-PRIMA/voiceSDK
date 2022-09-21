<?php

declare(strict_types=1);

/*
 * VoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceAPILib\Models;

use stdClass;

class Blastrequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $destination;

    /**
     * @var string
     */
    private $textToSpeech;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $repeat;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var string
     */
    private $callbackUrl;

    /**
     * @param string $destination
     * @param string $textToSpeech
     * @param string $language
     * @param string $gender
     * @param string $repeat
     * @param string $externalId
     * @param string $callbackUrl
     */
    public function __construct(
        string $destination,
        string $textToSpeech,
        string $language,
        string $gender,
        string $repeat,
        string $externalId,
        string $callbackUrl
    ) {
        $this->destination = $destination;
        $this->textToSpeech = $textToSpeech;
        $this->language = $language;
        $this->gender = $gender;
        $this->repeat = $repeat;
        $this->externalId = $externalId;
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * Returns Destination.
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * Sets Destination.
     *
     * @required
     * @maps destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * Returns Text to Speech.
     */
    public function getTextToSpeech(): string
    {
        return $this->textToSpeech;
    }

    /**
     * Sets Text to Speech.
     *
     * @required
     * @maps text_to_speech
     */
    public function setTextToSpeech(string $textToSpeech): void
    {
        $this->textToSpeech = $textToSpeech;
    }

    /**
     * Returns Language.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Sets Language.
     *
     * @required
     * @maps language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns Gender.
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     *
     * @required
     * @maps gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns Repeat.
     */
    public function getRepeat(): string
    {
        return $this->repeat;
    }

    /**
     * Sets Repeat.
     *
     * @required
     * @maps repeat
     */
    public function setRepeat(string $repeat): void
    {
        $this->repeat = $repeat;
    }

    /**
     * Returns External Id.
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     *
     * @required
     * @maps external_id
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * Returns Callback Url.
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * Sets Callback Url.
     *
     * @required
     * @maps callback_url
     */
    public function setCallbackUrl(string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
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
        $json['destination']    = $this->destination;
        $json['text_to_speech'] = $this->textToSpeech;
        $json['language']       = $this->language;
        $json['gender']         = $this->gender;
        $json['repeat']         = $this->repeat;
        $json['external_id']    = $this->externalId;
        $json['callback_url']   = $this->callbackUrl;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
