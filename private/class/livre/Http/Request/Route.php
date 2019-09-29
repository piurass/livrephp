<?php

namespace Livre\Http\Request;

use \Livre\Log\Log;

class Route 
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
