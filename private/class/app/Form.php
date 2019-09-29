<?php

namespace App
{
	use  \Livre\Http\Request;
	use  \Livre\Http\Response;

	class Form  
	{
		public function __construct()
		{
			$this->loadApp();
			$this->getRequest();
			$this->buildForm();
			$this->sendResponse();
		}


		private function loadApp()
		{
			$this->log = new \Livre\Log\Log();
			$this->log::toFile(__method__);

			$this->route	= new Request\Route();
			$this->request	= new Request\Request();
			$this->data	= new Request\Data();
			$this->reponse	= new Response\Response();
			$this->page	= new Response\Html\Builder();
		}

		private function getRequest()
		{
			$this->log::toFile(__method__);
			//$this->request->setPath($this->route->getRoute());
			//$this->data->store();
		}

		private function sendResponse()
		{
			$this->log::toFile(__method__);
			//$this->response->send($this->page->getPage());
		}
		private function buildForm()
		{
			$this->log::toFile(__method__);
			/*
			$this->page->setPage($this->request->getPath());
			$this->page->style('style');
			$this->page->header('header');
			$this->page->body('body');
			$this->page->form('form');
			$this->page->footer('footer');
			*/
		}
	}
}
