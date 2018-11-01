<?php global $post;
if(get_option('hero_choice')) {
	get_template_part( 'template-parts/heros/hero', get_option('hero_choice') );
	//echo locate_template(get_template_part( 'template-parts/heros/hero', get_option('hero_choice') ));
}
else {
	get_template_part(locate_template( 'template-parts/heros/hero', 'one'));
	//echo locate_template(get_template_part( 'template-parts/heros/hero', 'one'));
}
?>
