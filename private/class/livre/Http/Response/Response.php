<?php

namespace Livre\Http\Response;

use \Livre\Log\Log;

class Response 
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
