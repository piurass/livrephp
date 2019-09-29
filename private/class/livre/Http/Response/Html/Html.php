<?php

namespace Livre\Http\Response\Html;

use \Livre\Log\Log;

class Html
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
