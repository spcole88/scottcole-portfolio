document.addEventListener("DOMContentLoaded", function (event) {

    /**
     * Small screen menu
     */
    var $navOpenButton = document.getElementById('scst-main-menu-icon__open');
    $navOpenButton.addEventListener('click', main_menu_open);
    $navOpenButton.addEventListener('touchstart', main_menu_open);

    var $navCloseButton = document.getElementById('scst-main-menu-icon__close');
    $navCloseButton.addEventListener('click', main_menu_close);
    $navCloseButton.addEventListener('touchstart', main_menu_close);

    function main_menu_open() {
        var $menuWrapper = document.getElementById('menu-main-menu-wrapper');
        $menuWrapper.classList.add('scst-header__nav__active');
        // Fire main_menu_close() if window resized
        window.addEventListener('resize', main_menu_close);
    }

    function main_menu_close() {
        var $menuWrapper = document.getElementById('menu-main-menu-wrapper');
        $menuWrapper.classList.remove('scst-header__nav__active');
        // Remove window resize event listener once menu is closed to prevent
        // constant firing
        window.removeEventListener('resize', main_menu_close);
        // Fire the dropdown_close() function to make sure dropdowns close
        // when menus are closed (even where menu is closed due to screen being
        // resized)
        dropdown_close();
    }

    /**
     * Dropdown menu functionality, both for large and small screens
     */
    // Start by creating and putting in dropdown buttons
    var $mainMenu = document.getElementById('menu-main-menu');
    var $subMenus = $mainMenu.getElementsByClassName('sub-menu');
    var $subMenusLength = $subMenus.length;

    // Loop through above, creating and appending button element
    for (i = 0; i < $subMenusLength; i++) {
        var $dropDownIcon = document.createElement('button');
        $dropDownIcon.classList.add('menu-main-menu__dropdown-button');
        $dropDownIcon.innerHTML = '+';
        $subMenus[i].insertAdjacentElement('beforebegin', $dropDownIcon);
        $dropDownIcon.addEventListener('mouseup', dropdown_toggle);
    }

    /**
     * Either opens or closes the particular dropdown menu adjacent,
     * depending on whether it's currently open or closed. As well as
     * .show-dropdown class being used, explicit height is calculated
     * and added as a style to enable CSS transition (and is removed
     * when dropdown is being closed).
     */
    function dropdown_toggle(e) {
        $isClassPresent = e.target.nextElementSibling.classList.contains('show-dropdown');

        if ($isClassPresent == true) {
            e.target.nextElementSibling.classList.remove('show-dropdown');
            e.target.nextElementSibling.style.height = null;
            $elToRemove = $mainMenu.getElementsByClassName('sub-menu');
            for (i = 0; i < $elToRemove.length; i++) {
                $elToRemove[i].classList.remove('show-dropdown');
                $elToRemove[i].style.height = null;
            }
        } else {
            $elToRemove = $mainMenu.getElementsByClassName('sub-menu');
            for (i = 0; i < $elToRemove.length; i++) {
                $elToRemove[i].classList.remove('show-dropdown');
                $elToRemove[i].style.height = null;
            }
            e.target.nextElementSibling.classList.add('show-dropdown');
            var $dropdownHeight = e.target.nextElementSibling.scrollHeight;
            e.target.nextElementSibling.style.height = $dropdownHeight + 'px';
        }
    }

    /**
     * Loops through the list of UL .sub-menu elements, removes the 
     * .show-dropdown class (if it exists) and removes the height style
     * (where it exists). This is fired in the main_menu_close() function,
     * so it fires on window resize as well so that if menu closed, or if
     * menu closed due to the window being resized, the dropdowns are also
     * closed.
     */
    function dropdown_close() {
        for (i = 0; i < $subMenusLength; i++) {
            $subMenus[i].classList.remove('show-dropdown');
            $subMenus[i].style.height = null;
        }
    }

    var $header = document.getElementById('scst-header');
    window.addEventListener('scroll', header_background);

    function header_background() {
        if (window.scrollY > 50) {
            $header.classList.add('background-white');
        }
        else {
            $header.classList.remove('background-white');
        }
    }

    /**
     * Scroll listener to change home page title on scroll.
     */
/*
    var $homeTitle = document.getElementById('home-title');
    window.addEventListener('scroll', home_title_change);

    function home_title_change() {
        if (window.scrollY > 25) {
            $homeTitle.textContent = 'Scott';
        }
        else if (window.scrollY > 50) {
            $homeTitle.textContent = 'a Dad';
        }
        else {
            $homeTitle.textContent = 'a Web Developer';
        }
    }
        */
});