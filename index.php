<?php
	get_header();
//	require_once('inc/board/index.php');
?>


<?php
    if (strpos($_SERVER['REQUEST_URI'], 'board') !== false) {
	    require_once('inc/board-demo/index.php');
    } elseif (strpos($_SERVER['REQUEST_URI'], 'profile') !== false) {
        require_once('inc/profile-demo/index.php');
    } elseif (strpos($_SERVER['REQUEST_URI'], 'properties-detail') !== false) {
        require_once('inc/properties-detail/index.php');
    } elseif (strpos($_SERVER['REQUEST_URI'], 'properties-new') !== false) {
        require_once('inc/properties-new/index.php');
    }elseif (strpos($_SERVER['REQUEST_URI'], 'properties') !== false) {
        require_once('inc/properties/index.php');
    }elseif (strpos($_SERVER['REQUEST_URI'], 'clients') !== false) {
        require_once('inc/clients/index.php');
    }elseif (strpos($_SERVER['REQUEST_URI'], 'documents') !== false) {
        require_once('inc/documents/index.php');
    }elseif (strpos($_SERVER['REQUEST_URI'], 'milestones') !== false) {
        require_once('inc/milestones/index.php');
    } else {
	    require_once('inc/main/index.php');
//	    echo 'hello world';
    }
?>
<?php  get_footer(); ?>