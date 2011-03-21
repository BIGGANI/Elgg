<?php
/**
 * Blog sidebar
 *
 * @package Blog
 */

// fetch & display latest comments
if ($vars['page'] == 'all') {
	echo elgg_view('page/elements/comments_block', array(
		'subtypes' => 'blog',
	));
} elseif ($vars['page'] == 'owner') {
	echo elgg_view('page/elements/comments_block', array(
		'subtypes' => 'blog',
		'owner_guid' => elgg_get_page_owner_guid(),
	));
}

echo elgg_view('blog/sidebar/archives', $vars);

echo elgg_view('blog/sidebar/tagcloud', $vars);