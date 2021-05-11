<?php
$db = mysqli_connect( 'localhost', 'root', '', 'test' ); //соединение с бд 'test'
$db->set_charset('utf8');
mysqli_select_db( $db, 'articles' );
?> 