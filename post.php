<?php 
function catchPost(){
	if (!empty($_POST))
	{

		if (isset($_POST['action'])&& $_POST['action']==="sendmail" ) {
			return mail_master();
		}

	}
}
 ?>