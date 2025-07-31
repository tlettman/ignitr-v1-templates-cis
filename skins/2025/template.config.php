<?
// Bootstrap version 
$config['bootstrap'] = 5;

// Top level 
$config['ignitr']['date_default_timezone_set'] = 'America/Chicago';
$config['ignitr']['debug'] = false;
$config['ignitr']['testmode'] = true;
$config['ignitr']['forcehttps'] = false;

// Contact Settings
$config['ignitr']['devemail']        =  'support@space2burn.com';
$config['ignitr']['adminemail']      =  'support@space2burn.com';
$config['ignitr']['sitename']        =  'V1 TEMPLATE';
$config['ignitr']['clientphone']     =  '612-834-0841';
$config['ignitr']['clientemail']     =  'support@space2burn.com';
$config['ignitr']['fromaddress']     =  'support@space2burn.com';
$config['ignitr']['replytoaddress']  =  'support@space2burn.com';

$config['ignitr']['pushstate'] = false;
$config['ignitr']['pushstate_mode'] = 'fade';
$config['ignitr']['pushstate_speed'] = 800;
$config['ignitr']['pushstate_bgcolor'] = '#FFF';
$config['ignitr']['pushstate_opacity'] = '0.98';

// Google Analytics 
$config['google']['analytics_account_id'] = 'UA-16818420-2'; 

// Google Adwords 
$config['google']['adwords_conversion_id'] = '';
$config['google']['adwords_conversion_label'] = '';

// Typekit ID 
$config['ignitr']['typekitid'] = 'bzf8igd';

// OpenGraph 
$config['opengraph']['fb:admins'] = '';
$config['opengraph']['fb:app_id'] = '';
$config['opengraph']['og:image'] = '/templates/v1-template/skins/2025/favicon/amy_carman_sharing.jpg'; 

// Pages
$config['pages']['thumb'] = false;
$config['pages']['hero'] = true;
$config['pages']['abstract'] = true;

// Contact Form engine
$config['contactform']['labels'] = true;
$config['contactform']['email_user'] = true;

$config['contactform']['autocomplete'] = true;
$config['contactform']['fields'][] = array( 'type'=>'text', 'id'=>'name', 'placeholder'=>'Your Name', 'required'=>true );
$config['contactform']['fields'][] = array( 'type'=>'email', 'id'=>'email', 'placeholder'=>'you@yourdomain.com', 'required'=>true );
$config['contactform']['fields'][] = array( 'type'=>'textarea', 'id'=>'comments', 'label'=>'Do you have any additional questions for us?', 'placeholder'=>'Questions or comments.', 'required'=>true );
// $config['contactform']['fields'][] = array( 'type'=>'file', 'id'=>'file', 'label'=>'Do you have something you would like us to take a look at? Attach a JPG image here.' );

// Gallery
$config['gallery']['thumbqty'] = 100;
$config['gallery']['thumbwidth'] = 246;
$config['gallery']['thumbheight'] = 184;
$config['gallery']['thumbcropratio'] = '4:3';
$config['gallery']['rowqty'] = 4;
$config['gallery']['spacer'] = true;
$config['gallery']['divider'] = true;
$config['gallery']['fullsizewidth'] = 1500;
$config['gallery']['fullsizeheight'] = 800;
$config['gallery']['fullsizequality'] = 95;

?>