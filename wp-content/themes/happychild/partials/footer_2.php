<?php get_sidebar( 'footer' );
$socialButtons = get_option( 'socials' );
$instaPedi = "";
$instaPediHref = "";
$fbPedi = "";
$fbPediHref = "";
$instaLapte = "";
$instaLapteHref = "";
$fbLapte = "";
$fbLapteHref = "";
$subtitlu = "";
$locatie = "";
$instaClass = 'fa fa-instagram fa-lg';
$fbClass = 'fa fa-facebook-square fa-lg';
$locatieClass = '';

foreach ( $socialButtons as $buttonKey => $buttonUrl ){
    if ( empty( $buttonUrl ) ) {
      continue;
  }
  $text = explode('|', $buttonUrl);
  if ($buttonKey == 'facebook') {
      $fbPedi = $text[0];
      $fbPediHref = $text[1];
  } else if ($buttonKey == 'twitter') {
      $instaPedi = $text[0];
      $instaPediHref = $text[1];
  } else if ($buttonKey == 'linkedin') {
      $fbLapte = $text[0];
      $fbLapteHref = $text[1];
  } else if ($buttonKey == 'instagram') {
      $instaLapte = $text[0];
      $instaLapteHref = $text[1];
  } else if ($buttonKey == 'google') {
      $subtitlu = $buttonUrl;
  } else if ($buttonKey == 'vimeo') {
      $locatie = $buttonUrl;
  }
}
?>
<footer id="footer" class="type_2">
    <div class="container">
      <div class="wp-container-footer wp-block-group has-background" style="background-color:#e9d9c7"><div
          class="wp-block-group__inner-container">
          <h2 class="has-text-align-center oleo-script-swash has-text-color" style="color:#ff0007">Dr. Cristina
          Koriche</h2>
          <h6 class="has-text-align-center has-cyan-bluish-gray-color has-text-color">– <?php echo $subtitlu; ?> –</h6>
          <div>
            <h6 class="has-text-align-center has-text-color"><i class="fa fa-map-marker"></i> <?php echo $locatie; ?></h6>
          </div>
          <div class="bottom_socials has-text-align-center">
            <a href="<?php echo $instaPediHref; ?>" target="_blank" class="footer_icons"><i class="<?php echo
                $instaClass;
            ?>"></i> <?php echo $instaPedi ?></a>
            <br/>
            <a href="<?php echo $fbPediHref; ?>" target="_blank" class="footer_icons"><i class="<?php echo $fbClass;
            ?>"></i> <?php echo $fbPedi ?></a>
            <br/><br/>
            <a href="<?php echo $instaLapteHref; ?>" target="_blank" class="footer_icons"><i class="<?php echo $instaClass;
            ?>"></i> <?php echo $instaLapte ?></a>
            <br/>
            <a href="<?php echo $fbLapteHref; ?>" target="_blank" class="footer_icons"> <i class="<?php echo $fbClass;
            ?>"></i> <?php echo $fbLapte ?></a>
          </div><!--social_icons-->
          <br/>
        <?php $footer = get_option( 'footer' ); ?>
        <?php if ( ! empty( $footer['copyright'] ) ) { ?>
            <div class="copyrights text-align-center">
                <?php echo $footer['copyright']; ?>
            </div>
        <?php } ?>
      </div>
    </div>
</footer>

<style>
    #footer.type_2 .bottom_socials a{
        color: #000000;
    }
    #footer {
        background-image: none;
    }
    .wp-container-footer {
        padding: 20px;
    }
    .fa-facebook-square {
        color: blue;
    }
    .fa-instagram {
        color: #ee4565;
    }
    .footer_icons {
        /*margin-top: 25px;*/
    }
</style>