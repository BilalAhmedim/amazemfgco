<?php
// get the list of all pages
$pages = get_pages();

if (!empty($pages)) {
    echo '<ul class="page-list">';
    foreach ($pages as $page) {
        $page_title = $page->post_title;
        $page_link = get_page_link($page->ID);

        echo '<li class="page-item">';
        echo '<a href="' . esc_url($page_link) . '">' . esc_html($page_title) . '</a>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No pages found.</p>';
}
