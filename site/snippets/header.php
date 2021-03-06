<!DOCTYPE HTML>
<?php
$url = $site->find("projects")->children()->visible()->filter(function($child) {
  return $child->hasImages();
});
$url = $url->shuffle()->first();
$images = $url->images()->shuffle();
$img = $images->first()->url();

?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo html($site->title()) ?></title>

  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta property="og:url" content="<?php echo html($site->url()) ?>/" />
  <meta property="og:description" content="<?php echo html($site->description()) ?>" />
  <meta property="og:image" content="<?php echo $img; ?>"" />
  <link rel="image_src" href="<?php echo $img; ?>" />

  <?php 
    echo css('assets/css/main.css');
   ?>

  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="assets/img/manifest.json">
  <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#000000">
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <meta name="msapplication-config" content="assets/img/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">


</head>