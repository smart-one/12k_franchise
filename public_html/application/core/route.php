<?php


class Route
{

	static function start()
	{
        //
        // default controller and action
        //
        $controller_name = 'main';
        $action_name = 'index';

        session_start();

        //
        // разбираем текущий запрос
        //
        $url = parse_url($_SERVER['REQUEST_URI']);

        if(
            is_array($url) &&
            isset($url['path'])
        )
        {
            $routes = explode('/', $url['path'] );

            //
            // получаем имя контроллера
            //
            if ( !empty($routes[1]) )
            {
                $controller_name = $routes[1];
            }
            //
            // получаем имя экшена
            //
            if ( !empty($routes[2]) )
            {
                $action_name = $routes[2];
            }
        }


        //
		// add prefix
        //
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;


		//
        // include model
        //
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if( file_exists( $model_path ) )
		{
			include("application/models/".$model_file);
		}

        //
		// include controller
        //
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}

        //
        // TODO
        //
        //session_destroy();
	}

	function ErrorPage404()
	{
        /*$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');*/
        echo "Page not found";
    }
    
}
