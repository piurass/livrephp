<?php

namespace Livre\Log;

class Log
{
	public static function toFile($str)
	{
		$parts = explode(DIRECTORY_SEPARATOR, LOG_PATH);
		$file = array_pop($parts);
		$dir = '';
		foreach($parts as $part) 
		{
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
			{
				if(!is_dir($dir .= "$part\\")) 
				{
					mkdir($dir);
				}
			} 
			else 
			{
				if(!is_dir($dir .= "/$part")) 
				{
					mkdir($dir);
				}
			}
		}

		if(is_array($str)) 
		{
			$str=print_r($str,true);
		}
		file_put_contents(LOG_PATH, $str . '<br>' . PHP_EOL, FILE_APPEND);
	}

	public static function beginFile()
	{
		file_put_contents(LOG_PATH, '############### INICIO DO LOG ########################<br>' . PHP_EOL, FILE_APPEND);
	}

	public static function clearFile()
	{
		if (file_exists(LOG_PATH)) 
		{
			unlink(LOG_PATH);
		}
	}
}
