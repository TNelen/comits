<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Manrope:200,300,400,500,600,700,800">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 108px;
}
.u-header .u-image-1 {
  width: 97px;
  height: 64px;
  margin: 22px auto 22px 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 97px;
  }
}</style>
