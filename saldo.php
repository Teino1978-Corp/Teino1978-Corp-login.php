<? php
	session_start();
	if (isset($_SESSION['sukses'] ))
		echo " balance  anda : 0 ";
	else
		echo "you  have not  logged";
?>