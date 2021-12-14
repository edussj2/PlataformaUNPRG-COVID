<?php
	$peticionAjax = true;
	require_once "../config/configGeneral.php";

	if(isset($_POST['titulo-reg']) || isset($_POST['codigo-del'])){
		
		require_once "../controladores/temaControlador.php";
		$instema = new temaControlador();

		/**-----AGREGAR----**/
		if(isset($_POST['titulo-reg']) ){
			echo $instema->agregar_tema_controlador();
		}

		/**-----ELMINAR---**/
		if(isset($_POST['codigo-del']) && isset($_POST['privilegio-admin'])){
			echo $instema->eliminar_tema_controlador();
		}

		
	}else{
		session_start(['name'=>'UNPRG']);
		session_destroy();
		echo '<script> window.location.href="'.SERVERURL.'login/"</script>';
	}