<?php $link = get_sub_field('link_headline')

if ($link) :
	$link_url = $link['url']
	$link_title = $link['title']
	$link_target = $link['target'] ? $link['target'] : '_self'
?>

<a class="" href="<?php echo esc_url($link_url) ?>" target="<?php echo esc_attr($link_target) ?>"><?php echo esc_html($link_title) ?></a>

<?php endif ?>