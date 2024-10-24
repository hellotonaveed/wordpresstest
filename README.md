markdown
Copy code
# wordpresstest

I started this work by creating a child theme of the Twenty Twenty-Three theme.

## Custom CSS Modifications
The custom CSS styles were added to the `style.css` file of the Twenty Twenty-Three child theme to modify various elements of the theme as mentioned in the task.

### Header Styling
Nesting is applied in header styling.

```css
/* Header Styling */
.wp-site-blocks {
    padding: 0;
    header {
        background: brown;
        .wp-block-group > div {
            padding: 10px 0 !important;
            a {
                color: #fff !important;
            }
            a:hover {
                color: #EB4C77 !important;
                text-decoration: none;
            }
        }
        .wp-block-navigation:not(.has-background) .wp-block-navigation__responsive-container.is-menu-open {
            background-color: brown;
        }
        svg {
            fill: #fff !important;
        }
    }
}
Button Styling
css
Copy code
.button a {
    background-color: #0073aa; 
    color: #ffffff; 
    padding: 10px 20px;
    border: none; 
    border-radius: 5px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    transition: background-color 0.3s ease, transform 0.3s ease; 
    cursor: pointer;
}
.button a:hover {
    background-color: #005177 !important; 
    transform: translateY(-2px);
}
Implementing Google ‘Roboto’ Font and Adjusting Font Sizes
Google Roboto Font is implemented by using the @import function and applied to all HTML tags of the theme.

css
Copy code
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

html * {
    font-family: 'Roboto', sans-serif; 
    font-size: 16px;
}
h1 {
    font-size: 3.6rem;
}
h2 {
    font-size: 2.8rem;
}
h3 {
    font-size: 2.2rem;
}
h4 {
    font-size: 1.8rem;
}
p, p * {
    font-size: 1rem;
}
Ensuring Responsiveness
To make the theme responsive and mobile-friendly, the following CSS media queries and adjustments were added:

css
Copy code
@media all and (max-width: 768px) {
    body .entry-content .is-layout-flex {
        flex-direction: column;
    }
    h1 {
        font-size: 2.6rem;
    }
    h2 {
        font-size: 2rem !important;
        margin-top: 0;
    }
    h3 {
        font-size: 1.8rem;
    }
    h4 {
        font-size: 1.4rem;
    }
    p, p * {
        font-size: 0.9rem;
    }
    .wp-block-spacer {
        height: 30px !important;
    }
}
JavaScript Implementation
Back-to-Top Button
A back-to-top button was added to enhance user navigation. The following HTML and JavaScript code is added in the functions.php file.

Add this HTML at the bottom of the homepage:

html
Copy code
<button id="backToTop" style="display: none; position: fixed; bottom: 20px; right: 20px; padding: 10px 15px; background-color: #0073aa; color: #ffffff; border: none; border-radius: 5px; cursor: pointer; z-index: 1000;">Back to Top</button>
And this JavaScript in the functions.php file:

php
Copy code
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
