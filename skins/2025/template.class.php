<?

class templateClass extends ignitrClass {

	// Set Framework
	
	public function setFramework()
	{
		global $config;
		
		switch ( $_SESSION['dirs'][0] ){
			default:
				require_once( $this->inc.'frameworks/default.framework.php' );
				break;
		}
	}
	
	
	// Set Layout

	public function setLayout () 
	{
		global $config;
		
		switch ( $_SESSION['dirs'][0] ){
			case '':
				require_once( $this->inc.'layouts/homepage.php' );
				break;
			default:
				require_once( $this->inc.'layouts/default.php' );
		}
	}


	private function flaresWidget( $category_uid, $postqty=4 )
	{
		$dim = 800;
		$quality = 95;

		$dimh = $dim;

		$json = '{ "postqty":"'.$postqty.'", "abstractmaxchars":"160", "category_uid":"'.$category_uid.'", "quality":"'.$quality.'", "postimgwidth":"'.$dim.'", "postimgheight":"'.$dimh.'", "crop":"false", "favor":"height" }';
		$data = $this->widget( 'flares', 'postdata', $json, false );
		if( is_array( $data ) ){
			foreach( $data as $post ){
				$out .= '
				<h2 class="mb-5 fw-semibold color-brand-dark-blue">Upcoming Events</h2>  
				<img src="'.$post['postimg'].'" alt="'.$post['title'].'" class="mb-4" style="height: 100px;">
				<h3 class="fw-bold mb-1">'.$post['title'].'</h3>
				<p class="mb-1 dates">'.$post['event_date'].' - '.$post['event_date2'].'</p>
				<p class="abstract">'.$post['abstract'].'</p>
				<a href="/events/'.$post['posturl'].'/" class="btn btn-primary">Learn More <i class="fas fa-arrow-right ms-2"></i></a>';
			}

			echo $out;
		}
	}


}


$templateClass = new templateClass;
$templateClass->skindir = $_SESSION['template']['skindir'];
$templateClass->template_id = $_SESSION['template']['id'];
$templateClass->template_name = $_SESSION['template']['name'];
$templateClass->lang_id = $_SESSION['userdata']['world']['language']['id'];
$templateClass->inc = SP.'/templates/'.$_SESSION['template']['name'].$_SESSION['template']['skindir'].'/inc/';
?>