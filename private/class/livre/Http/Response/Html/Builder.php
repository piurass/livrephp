<?php

namespace Livre\Http\Response\Html;

use \Livre\Log\Log;

class Builder 
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
