
<?
// Pull in all sections for homepage
foreach (glob($this->inc.'/snippets/sections/section-*.php') as $file) {
  require_once $file;
}

// require $this->inc.'/snippets/sections/section-0-hero.php';
// require $this->inc.'/snippets/sections/section-1.php';
?>

