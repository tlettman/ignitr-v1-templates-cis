<?php
// Simple logic to only allow users with a query string value token
$_SESSION['securitytoken'] = 'n5j2g1zq9ktxvw0b8rp3yhdm74scl6eaoiun';
// App URL: https://expensifyapp.space2burn.com?securitytoken=n5j2g1zq9ktxvw0b8rp3yhdm74scl6eaoiun

// Whitelist NordVPN dedicated IP + home modem IP range
$whitelistedips = array("138.128.132.203","104.28.97.67","104.28.97.68","104.28.97.69","104.28.97.70","104.28.97.71","104.28.97.72","69.174.233.195");

// Simulate unauthorized access
// unset ($_SESSION['accessgranted']);
// $whitelistedips = array();

// If user does not already have access they must have the securitytoken in the query or be accessing the site from a whitelisted iP
if( !$_SESSION['accessgranted'] ){
    if( $_GET['securitytoken'] === $_SESSION['securitytoken'] || in_array($_SERVER['REMOTE_ADDR'],$whitelistedips) ){
        $_SESSION['accessgranted'] = true;

        // Save unknown IP addresses that access this site
        // if (!in_array($_SERVER['REMOTE_ADDR'],$whitelistedips)){
        //     $now_cst = date('Y-m-d H:i:s', strtotime('-5 hours'));
        //     $line = $_SERVER['REMOTE_ADDR'] . ' @ ' . $now_cst . PHP_EOL;
        //     file_put_contents('/expensify/app/secure/ipaccess/ipaccess.txt', $line, FILE_APPEND);
        // }
        
    } else {
        // Pithy quote
        die('<link rel="stylesheet" type="text/css" href="/css/styles.css"><p style="margin:30px">Be yourself; everyone else is already taken.<br /><br />~ Oscar Wilde</p>');
    }
}
?>