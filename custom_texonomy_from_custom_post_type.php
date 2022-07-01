
// Show Custom Post Type Categorys in Single Items
if (!function_exists('wr_product_published_in')) :
    function wr_product_published_in()
    {
        if ('download' === get_post_type()) {
			$download_category = get_the_term_list( get_the_ID(), 'download_category', '', ', ', '' );
            if ($download_category) {
                printf('<span class="cat-links">' . esc_html__('%1$s', 'elitio') . '</span>', $download_category);
            }
        }
    }
endif;


$download_category = get_the_term_list( Post Id, custom taxonomy (like product_category), before items(like html tag start, ', steps (like ',/-'), after items(like html tag end) );
