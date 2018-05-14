<?php
if(!empty($_POST['submit']) && $_POST['submit'] === 'saveDivs'){

	//save div states to cookie
	$divs = $_POST['divData'];
	setcookie('divStates', $divs, time() + (86400 * 30), "/"); 
	echo 'Div state saved';
}else if(!empty($_GET['submit']) && $_GET['submit'] === 'initPage'){

	//retrieve states from cookie
    if(isset($_COOKIE['divStates'])) {
    	echo $_COOKIE['divStates'];
    }else{
    	echo 'none';
    }
    
}else{
    echo 'failed called';
}
?>