<?php $is_blog = is_home() || is_single() || is_category() ? true : false; ?>
<aside class="sidebar col-md-3 {{ $is_blog ? 'sidebar-blog' : 'sidebar-primary' }}">
</aside>
