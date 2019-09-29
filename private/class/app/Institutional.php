<?php

namespace App
{
	use  \Livre\Http\Request;
	use  \Livre\Http\Response;

	class Institutional 
	{
		public function __construct()
		{
			$this->loadApp();
			$this->getRequest();
			$this->sendResponse();
		}


		private function loadApp()
		{
			$this->log = new \Livre\Log\Log();
			$this->log::toFile(__method__);

			$this->route	= new Request\Route();
			$this->request	= new Request\Request();
			$this->reponse	= new Response\Response();
			$this->html	= new Response\Html\Html();
		}

		private function getRequest()
		{
			$this->log::toFile(__method__);
			//$this->request->setPath($this->route->getRoute());
		}

		private function sendResponse()
		{
			$this->log::toFile(__method__);
			//$this->html->setFile($this->request->getPath());
			//$this->response->send($this->html->getFile());
		}
	}
}
