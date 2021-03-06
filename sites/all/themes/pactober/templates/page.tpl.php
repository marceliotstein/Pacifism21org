<?php
/**
* @file
* Default theme implementation to display a single Drupal page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.tpl.php template in this directory.
*
* Available variables:
*
* General utility variables:
* - $base_path: The base URL path of the Drupal installation. At the very
*   least, this will always default to /.
* - $directory: The directory the template is located in, e.g. modules/system
*   or themes/bartik.
* - $is_front: TRUE if the current page is the front page.
* - $logged_in: TRUE if the user is registered and signed in.
* - $is_admin: TRUE if the user has permission to access administration pages.
*
* Site identity:
* - $front_page: The URL of the front page. Use this instead of $base_path,
*   when linking to the front page. This includes the language domain or
*   prefix.
* - $logo: The path to the logo image, as defined in theme configuration.
* - $site_name: The name of the site, empty when display has been disabled
*   in theme settings.
* - $site_slogan: The slogan of the site, empty when display has been disabled
*   in theme settings.
*
* Navigation:
* - $main_menu (array): An array containing the Main menu links for the
*   site, if they have been configured.
* - $secondary_menu (array): An array containing the Secondary menu links for
*   the site, if they have been configured.
* - $breadcrumb: The breadcrumb trail for the current page.
*
* Page content (in order of occurrence in the default page.tpl.php):
* - $title_prefix (array): An array containing additional output populated by
*   modules, intended to be displayed in front of the main title tag that
*   appears in the template.
* - $title: The page title, for use in the actual HTML content.
* - $title_suffix (array): An array containing additional output populated by
*   modules, intended to be displayed after the main title tag that appears in
*   the template.
* - $messages: HTML for status and error messages. Should be displayed
*   prominently.
* - $tabs (array): Tabs linking to any sub-pages beneath the current page
*   (e.g., the view and edit tabs when displaying a node).
* - $action_links (array): Actions local to the page, such as 'Add menu' on the
*   menu administration interface.
* - $feed_icons: A string of all feed icons for the current page.
* - $node: The node object, if there is an automatically-loaded node
*   associated with the page, and the node ID is the second argument
*   in the page's path (e.g. node/12345 and node/12345/revisions, but not
*   comment/reply/12345).
*
* Regions:
* - $page['help']: Dynamic help text, mostly for admin pages.
* - $page['highlighted']: Items for the highlighted content region.
* - $page['content']: The main content of the current page.
* - $page['sidebar_first']: Items for the first sidebar.
* - $page['sidebar_second']: Items for the second sidebar.
* - $page['header']: Items for the header region.
* - $page['footer']: Items for the footer region.
*
* @see bootstrap_preprocess_page()
* @see template_preprocess()
* @see template_preprocess_page()
* @see bootstrap_process_page()
* @see template_process()
* @see html.tpl.php
*
* @ingroup themeable
*/
?>
<? 
  // determine if sidebar should be present
  $include_sidebar = true;
  if ($is_front) {
    $include_sidebar = false;
  } else if ($title=="All Articles") {
    $include_sidebar = false;
  } else if ($title=="Peaceful Thoughts") {
    $include_sidebar = false;
  }
?>
<div class="navbar navbar-default navbar-fixed-top" id="xyzsubnav">
  <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
    <div class="navbar-header">

      <a href="/" class="navbar-btn btn-logo btn-default"><img class="paclogo" width="240" src="/sites/all/themes/pactober/images/Pac21Straight416.jpg" /></a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/search" role="button" data-toggle="modal">Search</a></li>
        <li><a href="/newsletter/signup" role="button" data-toggle="modal">Subscribe</a></li>
        <li><a href="/about" role="button" data-toggle="modal">About Pacifism21</a></li>
      </ul>
    </div>
  </div>
  <div class="hidden-xs col-sm-12">
    <div class="navbar-header">

      <a href="/" class="navbar-btn btn-logo btn-default"><img class="paclogo" src="/sites/all/themes/pactober/images/Pac21Straight416.jpg" /></a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/search" role="button" data-toggle="modal">Search</a></li>
        <li><a href="/newsletter/signup" role="button" data-toggle="modal">Subscribe</a></li>
        <li><a href="/about" role="button" data-toggle="modal">About Pacifism21</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="row pac-main">
  <div class="col-xs-0 col-xl-1">
  </div>
  <div class="col-xs-12 col-xl-10">
    <?php if ($is_front): ?>
      <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl">
        <?php print views_embed_view('front_top_articles', 'block_1'); ?>
        <?php print views_embed_view('front_top_items', 'block_1'); ?>
        <?php print views_embed_view('front_top_touts', 'block_1'); ?>
        <?php print views_embed_view('front_more_articles', 'block_1'); ?>
        <?php print views_embed_view('front_more_items', 'block_1'); ?>
      </div>
      <div class="hidden-xs hidden-sm col-md-6 col-lg-6 col-xl-6">
        <?php print views_embed_view('front_top_articles', 'block_1'); ?>
        <?php print views_embed_view('front_more_articles', 'block_1'); ?>
      </div>
      <div class="hidden-xs hidden-sm col-md-6 col-lg-6 col-xl-6">
        <?php print views_embed_view('front_top_items', 'block_1'); ?>
        <?php print views_embed_view('front_top_touts', 'block_1'); ?>
        <?php print views_embed_view('front_more_items', 'block_1'); ?>
      </div>
    <?php else: ?>
      <!-- STANDARD PAGE TEMPLATE -->
      <div class="row pac-readable-core">
        <?php if ($include_sidebar): ?>
          <div class="pac-readable-main col-xs-12 col-sm-12 col-md-8">
        <?php else: ?>
          <div class="pac-readable-main col-xs-12 col-sm-12 col-md-12">
        <?php endif; ?>
          <a id="main-content"></a>
          <?php 
             // optional section heading 
             if (!empty($node)) {
               if (!empty($node->field_story_section)) {
                 if ($node->field_story_section['und'][0]['tid']==11) {
                   print '<div class="pac-section-heading">TESTIMONIAL</div>';
                 } else if ($node->field_story_section['und'][0]['tid']==14) {
                   print '<div class="pac-section-heading">HEROES OF PACIFISM</div>';
                 } else if ($node->field_story_section['und'][0]['tid']==15) {
                   print '<div class="pac-section-heading">FOCUS ON KOREA</div>';
                 }
               }
             }
          ?>
          <?php 
            // special banner and title for "item" content type
            if (!empty($title)) {
              if (!empty($node)) {
                if ($node->type=="item") {
                  print '<a href="peaceful-thoughts"><img class="ptbanner img-responsive" src="sites/all/themes/pactober/images/ptbanner1200.jpg" /></a>';
                  print '<div class="pac-art-credit">Artwork: <a href="http://espenerichsen.blogspot.com">Espen Erichsen</a></div>';
                  print '<h2>' . $title . '</h2>';
                } else {
                  // all content types other than item
                  print '<h1>' . $title . '</h1>';
                }
              } else {
                $show_title = true;
                // exclude title when there is an image title banner
                if ($title=="Peaceful Thoughts") {
                  $show_title = false;
                }
                if ($show_title) { 
                  print '<h1>' . $title . '</h1>';
                }
              } 
            }
          ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <div class="pacadd">
            <div class="addthis_sharing_toolbox"></div>
          </div>
        </div>
        <?php if ($include_sidebar): ?>
          <div class="hidden-xs hidden-sm col-md-4">
            <div class="pac-rightbar">
              <?php
                print render($page['highlighted']);
              ?>
              <div class="rightbar-box rightbar-search">
                <h2 class="rightbar-title">Search</h2>
                <?php
                  $block = module_invoke('search', 'block_view');
                  $search_render = render($block);
                  print $search_render;
                ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-xs-0 col-xl-1">
  </div>
</div>

<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
