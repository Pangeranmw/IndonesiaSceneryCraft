<?php 
	class App {
		protected $controller = 'Home';
		protected $method = 'index';
		protected $params = [];

		public function construck()
		{
			$url = $this->urlget();
			//controller
			if( file_exists('../app/controllers/' . $url[0] . '.php')){
				$this->controller = $url[0];
				unset($url[0]);
			}

			require_once '../app/controllers/' . $this->controller . '.php';
			$this->controller = new $this->controller; 

			//method
			if( isset($url[1])){
				if(method_exists($this->controller, $url[1])){
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			//parameter
			if(!empty($url)){
				$this->params = array_values($url);
				
			}

			//menjalankan controller, method, dan parameter jika ada
			call_user_func_array([$this->controller, $this->method], $this->params);

		}
		public function urlget()
		{
			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'],"/");
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode("/", $url);
				return $url;
			}
		}
	}