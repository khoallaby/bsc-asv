<aside class="sidebar col-md-3">
  @php
    if( is_home() || is_single() )
      dynamic_sidebar('sidebar-blog');
    else
      dynamic_sidebar('sidebar-primary');
  @endphp
</aside>