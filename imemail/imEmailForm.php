<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('', @$_POST['imObjectForm_1_1'], '', true);
	$form->setField('Nombre', @$_POST['imObjectForm_1_2'], '', false);
	$form->setField('Apellido', @$_POST['imObjectForm_1_3'], '', false);
	$form->setField('Correo Electronico', @$_POST['imObjectForm_1_4'], '', false);
	$form->setField('fecha', @$_POST['imObjectForm_1_5'], '', false);
	$form->setField('mensaje', @$_POST['imObjectForm_1_6'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '391CB44D9CEFBD6C495B50F11C9E555C' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('luiscarlosgoyes@gmail.com', 'luiscarlosgoyes@gmail.com', 'CONTACTO_COFFSIG', '', true);
		$form->mailToCustomer('luiscarlosgoyes@gmail.com', $_POST['imObjectForm_1_4'], '', '', true);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file