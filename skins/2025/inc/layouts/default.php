<?
$page = $this->kablamo( true );
// $this->echoarray( $page );
$herosrc = '/files/v1-template/pages/'.$page['dir_uid'].'_hero.jpg';
if( file_exists(SP.$herosrc) ){
	echo '<img class="img-fluid hero" src="'.$herosrc.'" />';
} else {
	// echo '<div style="height:45px">&nbsp;</div>';
}
?>


	
<?
$page = $this->kablamo( true );
$file = 'snippets/pages/'.$_SESSION['dirs'][0].'.php';
if( file_exists( $this->inc.$file ) ){
	require_once $this->inc.$file;
} else {
	require_once $this->inc.'snippets/pages/subpage.php';
}
?>
