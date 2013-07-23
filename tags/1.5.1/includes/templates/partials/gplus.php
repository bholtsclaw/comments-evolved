<?php
/**
 * @author         Brandon Holtsclaw <me@brandonholtsclaw.com>
 * @copyright      2013 Brandon Holtsclaw
 * @license        GPL
 */
defined('ABSPATH') or exit;

?>
<!-- gplus-tab -->
<div id="gplus-tab" class="clearfix">
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('#gplus-tab').html('<div class="g-comments" data-width="'+window.comment_tab_width+'" data-href="<?php echo the_permalink(); ?>" data-first_party_property="BLOGGER" data-view_type="FILTERED_POSTMOD">Loading Google+ Comments ...</div>');
    });
  </script>
  <script async type="text/javascript" src="//apis.google.com/js/plusone.js?callback=gpcb"></script>
  <noscript>Please enable JavaScript to view the <a href="https://plus.google.com/">comments powered by Google+.</a></noscript>
</div>
<!-- //gplus-tab -->

<?php
//https://apis.google.com/_/widget/render/commentcount?bsv&href=http://www.cloudhero.net/gplus-comments
//$gpcount = wp_remote_retrieve_body( wp_remote_get('https://apis.google.com/_/widget/render/commentcount?bsv&href=http://www.cloudhero.net/gplus-comments') );