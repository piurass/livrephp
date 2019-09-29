<?php

namespace Livre\Http\Request;

use \Livre\Log\Log;

class Data 
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
