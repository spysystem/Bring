<?php
namespace Bring;

/**
 * Class NatureOfTransaction
 */
class NatureOfTransaction
{
	public const __default = 'SALE_OF_GOODS';
	public const SALE_OF_GOODS = 'SALE_OF_GOODS';
	public const RETURNED_GOODS = 'RETURNED_GOODS';
	public const GIFT = 'GIFT';
	public const COMMERCIAL_SAMPLE = 'COMMERCIAL_SAMPLE';
	public const DOCUMENTS = 'DOCUMENTS';
	public const OTHER = 'OTHER';
}
