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


}


$templateClass = new templateClass;
$templateClass->skindir = $_SESSION['template']['skindir'];
$templateClass->template_id = $_SESSION['template']['id'];
$templateClass->template_name = $_SESSION['template']['name'];
$templateClass->lang_id = $_SESSION['userdata']['world']['language']['id'];
$templateClass->inc = SP.'/templates/'.$_SESSION['template']['name'].$_SESSION['template']['skindir'].'/inc/';
?>