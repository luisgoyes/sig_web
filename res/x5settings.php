<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://coffsig.com/',
	'homepage_url' => 'http://coffsig.com/index.html',
	'icon' => 'http://coffsig.com/favImage.png',
	'version' => '17.1.2.0',
	'sitename' => 'PROYECTO_SIG_WEB',
	'lang_code' => 'es-ES',
	'public_folder' => '',
	'salt' => 'ozbr2p8b1mutwfogxw4cnkzlg7md3t7ir6a',
	'use_common_email_sender_address' => true,
	'common_email_sender_addres' => 'luiscarlosgoyes@gmail.com'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false,
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Palabra de control:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'notification_public_key' => '36fcb62819f5b4f7',
	'notification_private_key' => '43fa22069d6222da',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'a42b86i0' => array(
		'description' => 'proyecto_final',
		'host' => 'localhost:5436',
		'database' => 'proyecto_final_sig_web',
		'user' => 'base de datos',
		'password' => 'p'
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Estimado cliente,<br /><br />Gracias por su compra. Este es un resumen de su pedido<br /><br />A continuaci??n encontrar?? una lista de los productos pedidos, la informaci??n de facturaci??n y las instrucciones sobre el env??o y la forma de pago que ha elegido.',
	'email_closing' => 'P??ngase en contacto con nosotros si requiere informaci??n adicional.<br /><br />Atentamente, el personal de Ventas.',
	'email_digital_shipment_opening' => 'Estimado Cliente,<br /><br />muchas gracias por su compra. Aqu?? le presentamos la lista de enlaces de descarga correspondientes a los productos solicitados:',
	'email_digital_shipment_closing' => 'Estamos a su disposici??n si necesita m??s informaci??n.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_physical_shipment_opening' => 'Estimado Cliente,<br /><br />muchas gracias por su compra. A continuaci??n, la lista de productos enviados:',
	'email_physical_shipment_closing' => 'Estamos a su disposici??n si necesita m??s informaci??n.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => '',
	'vat_type' => 'included'
));

$ecommerce->setDigitalProductsData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 17.1.2 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFD8A3" style="background-color: #FFD8A3;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Arial\'; color: #FFFFFF; background-color: #000000; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: transparent; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #000000" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Arial\'; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Este e-mail incluye informaci??n exclusiva para el destinatario mencionado anteriormente.<br>Si lo ha recibido por error, notif??queselo inmediatamente al remitente y destr??yalo sin copiarlo.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#000000';
$ImMailer->bodyBackgroundEven = '#000000';
$ImMailer->bodyBackgroundOdd = '#0F0F0F';
$ImMailer->bodyBackgroundBorder = '#323232';
$ImMailer->bodyTextColorOdd = '#FFFFFF';
$ImMailer->bodySeparatorBorderColor = '#FFFFFF';
$ImMailer->emailBackground = '#FFD8A3';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Arial\'; color: #FFFFFF; background-color: #000000; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Arial;';

// End of file x5settings.php