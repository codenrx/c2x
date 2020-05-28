<?php
/*Import content data*/
function c2x_import_files()
{
    return array([
        'import_file_name'             => 'Complete Demo',
        'local_import_file'            => trailingslashit(get_template_directory()) . '/demo/content.xml',
        'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/demo/customizer.dat',
        'import_preview_image_url'     => trailingslashit(get_template_directory()) . 'screenshot.png',
        'import_notice'                => __('Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'c2x'),
    ]);
}

function c2x_after_import($selected_import)
{
    if ('Complete Demo' === $selected_import['import_file_name']) {
        $header = get_term_by('name', 'header', 'nav_menu');
        set_theme_mod('nav_menu_locations', array(
            'header' => $header->term_id,
        ));

        $home = get_page_by_title('Home');
        $blog = get_page_by_title('Blog');
        if (isset($home->ID)) {
            update_option('page_on_front', $home->ID);
            update_option('page_for_posts', $blog->ID);
            update_option('show_on_front', 'page');
        }
        update_option('posts_per_page', 9);
    }
}
add_action('pt-ocdi/after_import', 'c2x_after_import');
add_filter('pt-ocdi/import_files', 'c2x_import_files');
