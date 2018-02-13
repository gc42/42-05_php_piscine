<?php

	// Teste si `test` existe et est egal a `ok`
	if (isset($_GET['test']) && $_GET['test'] == 'ok')
	{
		echo 'OK';
	}
	else
		echo 'KAHO'
?>