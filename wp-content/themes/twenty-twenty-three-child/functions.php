<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'twenty_twenty_three_child_style' );
				function twenty_twenty_three_child_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */
function add_back_to_top_script() {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const backToTopButton = document.getElementById("backToTop");
        window.onscroll = function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };
        backToTopButton.onclick = function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        };
    });
    </script>
    <?php
}
add_action('wp_footer', 'add_back_to_top_script');
