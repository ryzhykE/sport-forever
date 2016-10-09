<?php

namespace App\Controllers;


abstract class Controller
{
	
	protected $requestUrl;
	
	protected $controller;
	
	protected $params;
	
	protected $error;
	
	protected $page;
	
	public function route()
	{
		
		if(class_exists($this->controller)) {
			
			$ref = new \ReflectionClass($this->controller);
			
			if($ref->hasMethod('request')) {
				
				if($ref->isInstantiable()) {
					$class = $ref->newInstance();
					$method = $ref->getMethod('request');
					$method->invoke($class,$this->getParams());
				}
			}
			
		}
		else {
			throw new ContrException('Такой страницы не существует','Контроллер - '.$this->controller);
		}
	}

	protected function getController()
	{
		return $this->controller;
	}
	
	protected function getParams()
	{
		return $this->params;
	}
	
	protected function input()
    {
		
	}
	
	protected function output()
    {
		
	}
	
	public function request($param = array())
    {
		$this->input($param);
		$this->output();
		
		if(!empty($this->error)) {
			$this->write_error($this->error);
		}
		
		$this->getPage();
	}
	
	public function getPage()
    {
		echo $this->page;
	}
	
	protected function render($path,$param = array())
    {
		
		extract($param);
		
		ob_start();
		
		if(!include($path.'.php')) {
			throw new ContrException('Данного шаблона нет');
		}
		
		return ob_get_clean();
	}
	
	public function clear_str($var)
    {
		
		if(is_array($var)) {
			$row = array();
			foreach($var as $key=>$item) {
				$row[$key] = trim(strip_tags($item));
			}
			
			return $row;
		}
		return trim(strip_tags($var));
	}
	
	public function is_post()
    {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			return TRUE;
		}
		
		return FALSE;
	}

	public function write_error($err)
    {
		$time = date("d-m-Y G:i:s");
		
		$str = "Fault: ".$time." - ".$err."\n\r";
		file_put_contents("log.txt",$str,FILE_APPEND);
	}
}
