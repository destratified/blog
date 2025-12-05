let linea_blog_submenu_button = document.getElementsByClassName("wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle");

if ( linea_blog_submenu_button ) {
    Array.from(linea_blog_submenu_button).forEach(element => {
        element.addEventListener("click", function () {
            this.classList.toggle("icon-up");
            this.nextSibling.classList.toggle("open-submenu");
        });
    });
}

/****************************************************************************/
