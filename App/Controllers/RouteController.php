<?php

namespace App\Controllers;

use App\Singleton;

class RouteController extends Controller
{

	use Singleton;
	
	public $site = '/';

	private function __construct()
    {
		
		$zapros = $_SERVER['REQUEST_URI'];
		
		$path = substr($_SERVER['PHP_SELF'],0,strpos($_SERVER['PHP_SELF'],'index.php'));
		
		if($path === $this->site) {
			$this->requestUrl = substr($zapros,strlen($this->site));
			
			$url = explode('/',rtrim($this->requestUrl,'/'));
			
			if (!empty($url[0])) {
				$this->controller = ucfirst($url[0]).'Controller';
			}
			else {
				$this->controller = "IndexController";
			}
			
			$count = count($url);
			
			if(!empty($url[1])) {
				
				$key = array();
				$value = array();
				
				for($i = 1;$i < $count; $i++) {
					
					if($i%2 != 0) {
						$key[] = $url[$i];
					}
					else {
						$value[] = $url[$i];
					}
				}
				
				if(!$this->params = array_combine($key,$value)) {
					throw new ContrException("Не правильный адресс",$zapros);
				}
			}
		}
		else {
			try{
				throw new \Exception('<p style="color:red">Не правильный адресс сайта.</p>');
			}
			catch(\Exception $e) {
				echo $e->getMessage();
				exit();
			}
		}
		
	}
}
?>