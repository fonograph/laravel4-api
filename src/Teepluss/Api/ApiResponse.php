<?php
/**
 * User: fono
 * Date: 2014-05-09
 * Time: 10:26 AM
 */

namespace Teepluss\Api;


use Illuminate\Http\Response;

class ApiResponse extends Response
{
	protected $_originalContent;

	function __construct($originalContent, $arrayContent, $status = 200, array $headers = array())
	{
		$this->_original = $originalContent;

		parent::__construct($arrayContent, $status, $headers);
	}

	public function getOriginalContent()
	{
		return $this->_originalContent;
	}

}