<?
$page = $this->kablamo( true );
// $this->echoarray( $page );
$herosrc = '/files/v1-template/pages/'.$page['dir_uid'].'_hero.jpg';
if( file_exists(SP.$herosrc) ){
	echo '<img class="img-fluid hero" src="'.$herosrc.'" />';
} else {
	echo '<div style="height:45px">&nbsp;</div>';
}
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<?
			$this->kablamo();
			?>
		</div>
	</div>
</div>
