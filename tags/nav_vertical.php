<?php
$arrMenu = [];
$categories = get_categories();
usort($categories, function($a, $b) {
	return get_field("rf", "category_".$a->term_id) - get_field("rf", "category_".$b->term_id);
});
foreach($categories as $i => $cat) {
	/**
	 * @var WP_Term $cat
	 */
	$arrMenu[$i]['title'] = $cat->name;
	$args = [
		'post_type' => 'post',
		'tax_query' => [
			[
				'taxonomy' => 'category',
				'field'    => 'term_id',
				'terms'    => $cat->term_id,
			],
		],
	];
	$query = new WP_Query($args);
	if($query->have_posts()) {
		$arrMenu[$i]['items'] = [];
		while($query->have_posts()) {
			$query->the_post();
			$arrMenu[$i]['items'][] = $query->post->post_title;
		}
	}
	wp_reset_postdata();
}
dump($arrMenu);

