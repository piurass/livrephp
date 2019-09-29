<?php

namespace Livre;

class Livre 
{
	public function __construct()
	{
		Log::toFile(__method__);
	}
}
