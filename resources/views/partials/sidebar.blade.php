<aside class="sidebar col-md-3 {{ ( is_home() || is_single() ) ? 'sidebar-blog' : 'sidebar-primary' }}">
  @php
    if( is_home() || is_single() )
      dynamic_sidebar('sidebar-blog');
    else
      dynamic_sidebar('sidebar-primary');
  @endphp
</aside>