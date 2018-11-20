<?php
namespace Bring;


/**
 * Class LinksResponseType
 */
class LinksResponseType
{

	/**
	 * @var string $labels
	 */
	protected $labels;

	/**
	 * @var null|string $labelArchiveUrl
	 */
	protected $labelArchiveUrl;

	/**
	 * @var null|string $waybill
	 */
	protected $waybill;

	/**
	 * @var string $tracking
	 */
	protected $tracking;

	/**
	 * @param string $labels
	 * @param string $tracking
	 */
	public function __construct(string $labels, string $tracking)
	{
		$this->labels = $labels;
		$this->tracking = $tracking;
	}

	/**
	 * @return string
	 */
	public function getLabels(): ?string
	{
		return $this->labels;
	}

	/**
	 * @param string $labels
	 * @return LinksResponseType
	 */
	public function setLabels(string $labels): LinksResponseType
	{
		$this->labels = $labels;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLabelArchiveUrl(): ?string
	{
		return $this->labelArchiveUrl;
	}

	/**
	 * @param null|string $labelArchiveUrl
	 * @return LinksResponseType
	 */
	public function setLabelArchiveUrl(?string $labelArchiveUrl = null): LinksResponseType
	{
		$this->labelArchiveUrl = $labelArchiveUrl;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getWaybill(): ?string
	{
		return $this->waybill;
	}

	/**
	 * @param null|string $waybill
	 * @return LinksResponseType
	 */
	public function setWaybill(?string $waybill = null): LinksResponseType
	{
		$this->waybill = $waybill;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTracking(): ?string
	{
		return $this->tracking;
	}

	/**
	 * @param string $tracking
	 * @return LinksResponseType
	 */
	public function setTracking(string $tracking): LinksResponseType
	{
		$this->tracking = $tracking;
		return $this;
	}

}
