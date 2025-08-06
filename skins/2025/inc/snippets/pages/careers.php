
<section class="mb-4">
    <div class="row">
        <div class="col-12 col-md-6 feature-content bg-mid-green">
            <h1 class="color-white"><?=$page['h1']?></h1>
            <p class="color-white">CIS is a family-friendly, team-oriented environment where you are supported by your teammates to achieve both personal and company goals. With dedication and results, there are no limits to what we can accomplish.</p>
        </div>
        <div class="col-12 col-md-6 bg-hero_2 bg-cover">
            &nbsp;
        </div>
    </div>
</section>

<section class="py-5">

<? if( $postdir = $_SESSION['dirs'][1] ) { ?>

    <!-- <p>The job url is <?=$postdir ?></p> -->
    <div class="container">
        <? $this->kablamo() ?>
    </div>

<? } else { ?>


  <div class="container">
    <?
    $data = $this->widget( 'employment', 'postdata' );
    // $this->echoarray( $data );
    if( is_array( $data ) ){
        $out = '<div id="job-posts">
            <h2 class="mb-5">Current Openings</h2>';
        foreach( $data as $item ){
            $created = $this->readableDate( $item['created'] );
            $out .= '
            <div class="post">
                <h3>'.$item['title'].'</h3>
                <div class="row">
                    <div class="col-5">
                        <p>'.$item['abstract'].'</p>
                    </div>
                    <div class="col-2 offset-1">
                        <p>'.$created.'</p>
                    </div>
                    <div class="col-2">
                        <p>'.$item['location'].'</p>
                    </div>
                    <div class="col-2">
                        <a href="/careers/'.$item['url'].'/" class="btn btn-primary btn-arrow">Learn More</i></a>
                    </div>
                </div>
            </div>';
        }
        $out .= '</div>';
        echo $out;
    }
    ?>
  </div>

<? } ?>
</section>

<?
// require_once $this->inc.'snippets/sections/section-6.php';
?>
