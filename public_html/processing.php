<?php 	//processing.php

if(isset($_POST)){

	$data = "";
	$extra = "";

	foreach ($_POST as $key => $value) {

		if(stristr($key, "name")){
			$data .= "Имя: ". htmlspecialchars($value)."\n";
		}
		elseif(stristr($key, "tel")){
			if($value == "") die("spam");
			$data .= "Телефон: ". htmlspecialchars($value)."\n";
		}
		elseif(stristr($key, "email")){
			$data .= "Почта: ". htmlspecialchars($value)."\n";
		}
		else{
			$extra .= htmlspecialchars($key).": ".htmlspecialchars($value)."\n";
		}
		
	}

	$data .= $extra;

	$mail = "egor.zubarev@gmail.com, alex_19@mail.ru, manager@1-fk.ru, roman@indagate.ru";
	$subject="=?utf-8?B?". base64_encode("Новая заявка с посадочной страницы: Франшиза 12комнат"). "?=";	
	$date = date("d.m.yг. H:i:s", time() );

	$headers='';
    $headers.="Mime-Version: 1.0\r\n";
    $headers.="Content-type: text/plain"."; charset=UTF-8\r\n";

    mail($mail, $subject, $data, $headers);

    echo "success";
    
}

?>