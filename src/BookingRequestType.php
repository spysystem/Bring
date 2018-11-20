<?php
namespace Bring;


/**
 * Class BookingRequestType
 */
class BookingRequestType
{

	/**
	 * @var int $schemaVersion
	 */
	protected $schemaVersion;

	/**
	 * @var null|string $clientUrl
	 */
	protected $clientUrl;

	/**
	 * @var consignments $consignments
	 */
	protected $consignments;

	/**
	 * @var bool $testIndicator
	 */
	protected $testIndicator;

	/**
	 * @param int $schemaVersion
	 * @param consignments $consignments
	 * @param bool $testIndicator
	 */
	public function __construct(int $schemaVersion, consignments $consignments, bool $testIndicator)
	{
		$this->schemaVersion = $schemaVersion;
		$this->consignments = $consignments;
		$this->testIndicator = $testIndicator;
	}

	/**
	 * @return int
	 */
	public function getSchemaVersion(): ?int
	{
		return $this->schemaVersion;
	}

	/**
	 * @param int $schemaVersion
	 * @return BookingRequestType
	 */
	public function setSchemaVersion(int $schemaVersion): BookingRequestType
	{
		$this->schemaVersion = $schemaVersion;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getClientUrl(): ?string
	{
		return $this->clientUrl;
	}

	/**
	 * @param null|string $clientUrl
	 * @return BookingRequestType
	 */
	public function setClientUrl(?string $clientUrl = null): BookingRequestType
	{
		$this->clientUrl = $clientUrl;
		return $this;
	}

	/**
	 * @return consignments
	 */
	public function getConsignments(): ?consignments
	{
		return $this->consignments;
	}

	/**
	 * @param consignments $consignments
	 * @return BookingRequestType
	 */
	public function setConsignments(consignments $consignments): BookingRequestType
	{
		$this->consignments = $consignments;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getTestIndicator(): ?bool
	{
		return $this->testIndicator;
	}

	/**
	 * @param bool $testIndicator
	 * @return BookingRequestType
	 */
	public function setTestIndicator(bool $testIndicator): BookingRequestType
	{
		$this->testIndicator = $testIndicator;
		return $this;
	}

}
