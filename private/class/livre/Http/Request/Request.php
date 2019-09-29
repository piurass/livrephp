<?php

namespace Livre\Http\Request;

use \Livre\Log\Log;

class Request 
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
