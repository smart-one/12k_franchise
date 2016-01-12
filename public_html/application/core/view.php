<?php

class View
{
	function generate( $content_view, $template_view, $data = null )
	{
        //header('Content-Type: application/json; charset=utf8');
        //print_r($data);
        //exit();

        include("application/views/".$content_view);
        $compiled = compilePage( $data );

		include("application/views/".$template_view);


        echo renderPage(
            $compiled['head'],
            $compiled['header'],
            $compiled['body'],
            $compiled['footer']
        );
	}
}
