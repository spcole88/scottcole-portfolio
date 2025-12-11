<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    
<?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header class="scst-header grid-general" id="scst-header">
        <a class="scst-header__logo portfolio-logo__header" href="<?php echo site_url(); ?>">
            <span>Scott Cole</span>
        </a>

        <nav class="scst-header__nav">
            <div id="menu-main-menu-wrapper">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Main Menu',
                    'container' => '',
                ));
                ?>

                <button id="scst-main-menu-icon__close">
                    <span></span>
                    <span></span>
                </button>
            </div>

            <button id="scst-main-menu-icon__open">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main class="scst-main-content grid-general">