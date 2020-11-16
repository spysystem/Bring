<?php
namespace Bring;


/**
 * Class PartiesRequestType
 */
class PartiesRequestType
{

	/**
	 * @var PartyRequestType $sender
	 */
	protected $sender;

	/**
	 * @var PartyRequestType $recipient
	 */
	protected $recipient;

	/**
	 * @var null|PartyRequestType $consignor
	 */
	protected $consignor;

	/**
	 * @var null|PartyRequestType $consignee
	 */
	protected $consignee;

	/**
	 * @var null|PickupPointRequestType $pickupPoint
	 */
	protected $pickupPoint;

	/**
	 * @var null|PartyRequestType $importer
	 */
	protected $importer;

	/**
	 * @var null|PartyRequestType $returnTo
	 */
	protected $returnTo;

	/**
	 * @param PartyRequestType $sender
	 * @param PartyRequestType $recipient
	 */
	public function __construct(PartyRequestType $sender, PartyRequestType $recipient)
	{
		$this->sender = $sender;
		$this->recipient = $recipient;
	}

	/**
	 * @return PartyRequestType
	 */
	public function getSender(): ?PartyRequestType
	{
		return $this->sender;
	}

	/**
	 * @param PartyRequestType $sender
	 * @return PartiesRequestType
	 */
	public function setSender(PartyRequestType $sender): PartiesRequestType
	{
		$this->sender = $sender;
		return $this;
	}

	/**
	 * @return PartyRequestType
	 */
	public function getRecipient(): ?PartyRequestType
	{
		return $this->recipient;
	}

	/**
	 * @param PartyRequestType $recipient
	 * @return PartiesRequestType
	 */
	public function setRecipient(PartyRequestType $recipient): PartiesRequestType
	{
		$this->recipient = $recipient;
		return $this;
	}

	/**
	 * @return null|PartyRequestType
	 */
	public function getConsignor(): ?PartyRequestType
	{
		return $this->consignor;
	}

	/**
	 * @param null|PartyRequestType $consignor
	 * @return PartiesRequestType
	 */
	public function setConsignor(?PartyRequestType $consignor = null): PartiesRequestType
	{
		$this->consignor = $consignor;
		return $this;
	}

	/**
	 * @return null|PartyRequestType
	 */
	public function getConsignee(): ?PartyRequestType
	{
		return $this->consignee;
	}

	/**
	 * @param null|PartyRequestType $consignee
	 * @return PartiesRequestType
	 */
	public function setConsignee(?PartyRequestType $consignee = null): PartiesRequestType
	{
		$this->consignee = $consignee;
		return $this;
	}

	/**
	 * @return null|PickupPointRequestType
	 */
	public function getPickupPoint(): ?PickupPointRequestType
	{
		return $this->pickupPoint;
	}

	/**
	 * @param null|PickupPointRequestType $pickupPoint
	 * @return PartiesRequestType
	 */
	public function setPickupPoint(?PickupPointRequestType $pickupPoint = null): PartiesRequestType
	{
		$this->pickupPoint = $pickupPoint;
		return $this;
	}

	/**
	 * @return null|PartyRequestType
	 */
	public function getImporter(): ?PartyRequestType
	{
		return $this->importer;
	}

	/**
	 * @param null|PartyRequestType $importer
	 * @return PartiesRequestType
	 */
	public function setImporter(?PartyRequestType $importer = null): PartiesRequestType
	{
		$this->importer = $importer;
		return $this;
	}

	/**
	 * @return null|PartyRequestType
	 */
	public function getReturnTo(): ?PartyRequestType
	{
		return $this->returnTo;
	}

	/**
	 * @param null|PartyRequestType $returnTo
	 * @return PartiesRequestType
	 */
	public function setReturnTo(?PartyRequestType $returnTo = null): PartiesRequestType
	{
		$this->returnTo = $returnTo;
		return $this;
	}

}
