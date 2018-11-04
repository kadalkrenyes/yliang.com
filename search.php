<?php

/**
 * SCRIPT INI 100% GRATIS DAN TIDAK DIPERBOLEHKAN UNTUK DIPERJUAL BELIKAN!
 * SAYA BERJANJI TIDAK AKAN MENJUAL SCRIPT INI KEPADA SIAPAPUN
 * JIKA SAYA MENJUAL SCRIPT INI MAKA REZEKI SAYA DAN KETURUNAN SAYA AKAN SERET SELAMANYA!
 * AAMIIN
 */

require 'libraries/ua.class.php';
require 'libraries/simple_html_dom.php';

require 'core/functions/options.php';
require 'core/functions/cache.php';
require 'core/functions/permalinks.php';
require 'core/functions/common.php';
require 'core/functions/site.php';
require 'core/classes/agc.php';


$result = agc()->get_search();
$size = ( isset( $result[0]['size'] ) ) ? $result[0]['size'] : '';

set_recent_user_access( [ 'title' => get_search_query() ], 'title', get_option( 'recent_searches_limit', 25000 ) );

$site_title = str_replace( [ '%query%', '%domain%' ], [ get_search_query(), $_SERVER['HTTP_HOST'] ], get_option( 'search_title' ) );
$meta_description = str_replace( [ '%query%', '%domain%' ], [ get_search_query(), $_SERVER['HTTP_HOST'] ], get_option( 'search_description' ) );

include 'includes/header.php';

?>
  <h1 class="page-title"><?php echo str_replace( '%query%', get_search_query(), get_option( 'search_page_title' ) ); ?></h1>

  <div class="search-text">
    Result for <strong><?php echo get_search_query(); ?></strong> on <?php echo get_option( 'site_name' ); ?>.
    Download <strong><?php echo get_search_query(); ?></strong> mp3 that you want and it's FREE forever!
  </div>

  <div class="search-divider"></div>

  <?php if ( $result ) { ?>
    <div class="main-items clearfix">
      <div class="list clearfix">
        <div class="items clearfix">
          <?php foreach ( $result as $item ) { ?>
            <div class="item clearfix">
              <div class="image">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlentities( $item['title'], ENT_QUOTES ); ?>" />
              </div>

              <div class="info">
                <div class="title"><?php echo $item['title']; ?></div>
                <div class="artist"><?php echo $item['channel']; ?></div>
                <div class="btn">
                  <a rel="nofollow" title="Download <?php echo htmlentities( $item['title'], ENT_QUOTES ); ?> Mp3 and Videos" href="http://bopo-iklan.blogspot.com/2018/09/administration-your-auto-car.html#<?php echo $item['id']; ?>">Download</a>
                </div>
              </div>
            </div>
          <?php } unset( $item ); ?>
        </div>
      </div>
    </div>
	  <?php } ?>
	<br><br><div class="search-text">
      Tag Keyword: <strong>Download lagu <?php echo get_search_query(); ?> Mp3 Gratis, Download Audio <?php echo get_search_query(); ?> Mp3, <?php echo get_search_query(); ?> Audio Mp3, Download <?php echo get_search_query(); ?> Mp3</strong>
    </div>
<?php include 'includes/footer.php'; ?>
