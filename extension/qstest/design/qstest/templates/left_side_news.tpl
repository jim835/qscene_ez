{def $left_news = fetch( 'content', 'list',
hash( 'parent_node_id', 168,
      'limit', 5,
      'sort_by', array( 'modified', false() )) )}

<div>
<ul>
{foreach $left_news as $news}
    <li>
        <a href="{$news.url_alias}">{$news.name}</a>
    </li>
{/foreach}
</ul>
</div>