<?php
	get_header();
//	require_once('inc/board/index.php');
?>


<?php
    if (strpos($_SERVER['REQUEST_URI'], 'board') !== false) {
	    require_once('inc/board-demo/index.php');
    } elseif (strpos($_SERVER['REQUEST_URI'], 'profile') !== false) {
        require_once('inc/profile-demo/index.php');
    } else {
	    require_once('inc/main/index.php');
//	    echo 'hello world';
    }
?>
<?php  get_footer(); ?>