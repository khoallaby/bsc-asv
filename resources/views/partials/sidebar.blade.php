<?php
  $is_blog = is_home() || is_single() || is_category() ? true : false;
?>
<aside class="sidebar col-md-3 {{ $is_blog ? 'sidebar-blog' : 'sidebar-primary' }}">
  <?php if( $is_blog ) { ?>
    <section class="widget widget_text widget-follow-us">
      <h3>Follow Us</h3>
      <div class="textwidget">
        @include('partials.social-media')
      </div>
    </section>
    <?php
    dynamic_sidebar('sidebar-blog');
  } else {
    dynamic_sidebar('sidebar-primary');
  }
  ?>
</aside>
