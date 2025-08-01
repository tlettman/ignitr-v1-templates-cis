
<?
// Pull in all sections for homepage
foreach (glob($this->inc.'/snippets/sections/section-*.php') as $file) {
  require_once $file;
}
?>

