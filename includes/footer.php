      <?php
        $searches = get_recent_user_access( get_option( 'recent_searches_count' ) );
        if ( $searches ) {
      ?>
        <div class="recent-search-divider"></div>

        <div class="recent-search clearfix">
          <div class="title">Recent Search</div>

          <div class="items clearfix">
            <?php foreach( $searches as $item ) { ?>
              <a href="<?php echo search_permalink( $item['title'] ); ?>"><?php echo $item['title']; ?></a>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>

<center>
<script type="text/javascript" src="//ylx-1.com/bnr.php?section=General&pub=828915&format=300x50&ga=g&mbtodb=1"></script>
<noscript><a href="https://yllix.com/publishers/828915" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub_0ei6v1.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" /></a></noscript>
	</center>
    <footer id="footer">
      <div class="container">
        <div class="credit">
          <?php echo str_replace( [ '%year%', '%site_name%' ], [ date( 'Y' ), get_option( 'site_name' ) ], get_option( 'footer_copyright' ) ); ?>
                    <a href="https://caradasar.com/">Caradasar.com</a>
		</div>
      </div>
    </footer>

    <?php
      register_script( site_url() . '/assets/js/jquery.min.js' );

      if ( $route['name'] == 'download' ) {
        register_script( site_url() . '/assets/js/jquery.fitvids.js' );
      }

      register_script( site_url() . '/assets/js/scripts.js' );
    ?>

    <?php
      if ( file_exists( BASE . '/config/' . $_SERVER['HTTP_HOST'] . '/_footer.php' ) ) {
        include BASE . '/config/' . $_SERVER['HTTP_HOST'] . '/_footer.php';
      }
    ?>
  </body>
</html>
