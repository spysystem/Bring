<?php
namespace Bring;


/**
 * Class MeasurementsRequestType
 */
class MeasurementsRequestType
{

	/**
	 * @var int $heightInCm
	 */
	protected $heightInCm;

	/**
	 * @var int $widthInCm
	 */
	protected $widthInCm;

	/**
	 * @var int $lengthInCm
	 */
	protected $lengthInCm;

	/**
	 * @param int $heightInCm
	 * @param int $widthInCm
	 * @param int $lengthInCm
	 */
	public function __construct(int $heightInCm, int $widthInCm, int $lengthInCm)
	{
		$this->heightInCm = $heightInCm;
		$this->widthInCm = $widthInCm;
		$this->lengthInCm = $lengthInCm;
	}

	/**
	 * @return int
	 */
	public function getHeightInCm(): ?int
	{
		return $this->heightInCm;
	}

	/**
	 * @param int $heightInCm
	 * @return MeasurementsRequestType
	 */
	public function setHeightInCm(int $heightInCm): MeasurementsRequestType
	{
		$this->heightInCm = $heightInCm;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getWidthInCm(): ?int
	{
		return $this->widthInCm;
	}

	/**
	 * @param int $widthInCm
	 * @return MeasurementsRequestType
	 */
	public function setWidthInCm(int $widthInCm): MeasurementsRequestType
	{
		$this->widthInCm = $widthInCm;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLengthInCm(): ?int
	{
		return $this->lengthInCm;
	}

	/**
	 * @param int $lengthInCm
	 * @return MeasurementsRequestType
	 */
	public function setLengthInCm(int $lengthInCm): MeasurementsRequestType
	{
		$this->lengthInCm = $lengthInCm;
		return $this;
	}

}
