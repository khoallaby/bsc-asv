<div class="entry-meta">
    <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
     |
    @php
    echo get_the_category_list( ', ' );
    @endphp
     |
    <span class="byline author vcard">
      <span rel="author" class="fn">
        {{ get_the_author() }}
      </span>
    </span>
</div>