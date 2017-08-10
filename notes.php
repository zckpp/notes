<!--Notes-->

<!--1: make footer always on the bottom-->

<!--set parent height first-->
<style>
    html, body {
        height: 100%;
    }

    /*set container*/
    .your-container {
        min-height: 100%;
        margin-bottom: -230px;
    }

    .your-container:after {
        content: "";
        display: block;
        height: 230px;
    }
</style>

<!--2: Bio block image with gradient background text-->
<style>
    .your-banner {
        position: relative;
        background: #e9edee;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px;
    }
    .your-banner-text {
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        -ms-border-radius: 0 3px 3px 0;
        -o-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
        position: absolute;
        bottom: 0;
        left: 30%;
        max-height: 370px;
        position: absolute;
        right: 0;
        top: 0;
        background: #e9edee;
    }
    .your-banner-text:before {
        content: "";
        display: inline-block;
        float: left;
        height: 100%;
        margin-left: -55px;
        max-height: 370px;
        position: relative;
        width: 55px;
        background-image: -webkit-gradient(linear,to right,to left,color-stop(0%,rgba(233,237,238,0)),color-stop(100%,#e9edee));
        background-image: -webkit-linear-gradient(to right,rgba(233,237,238,0),#e9edee);
        background-image: -moz-linear-gradient(to right,rgba(233,237,238,0),#e9edee);
        background-image: -o-linear-gradient(to right,rgba(233,237,238,0),#e9edee);
        background-image: linear-gradient(to right,rgba(233,237,238,0),#e9edee);
    }
</style>

<div class="your-banner container-12">
    <div class="your-banner-img">
        <img src="">
    </div>
    <div class="your-banner-text">
        <h2 class="intro-title">Title</h2>
        <h4> Blurb...<a class="project" href="/">Read More</a></h4>
    </div>
</div>

<!--3: click outside menu to close for responsive menu_drupal-->
<script>
    $('body').click(function (e) {
        var menu = $('.responsive-menus');
        if ('responsive-menus-simple' == e.target.className || 'responsive-menus' == e.target.className || 'toggler' == e.target.className) {
            e.stopPropagation();
        }
        else {
            if (menu.hasClass('responsive-toggled')) {
                menu.removeClass('responsive-toggled');
            }
        }
    });
</script>

<!--4: image frame effect-->
<style>
    img {
        border-radius: 2px;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        padding: 8px;
        -webkit-box-shadow: 1px 2px 1px #d1d1d1;
        -moz-box-shadow: 1px 2px 1px #d1d1d1;
        box-shadow: 1px 2px 1px #d1d1d1;
    }
</style>

<!--5: yellow box effect-->
<style>
    .container
    {
        position:relative;
        -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    }
    .container:before, .container:after
    {
        content:"";
        position:absolute;
        z-index:-1;
        -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
        -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
        box-shadow:0 0 20px rgba(0,0,0,0.8);
        top:10px;
        bottom:10px;
        left:0;
        right:0;
        -moz-border-radius:100px / 10px;
        border-radius:100px / 10px;
    }
    .container:after
    {
        right:10px;
        left:auto;
        -webkit-transform:skew(8deg) rotate(3deg);
        -moz-transform:skew(8deg) rotate(3deg);
        -ms-transform:skew(8deg) rotate(3deg);
        -o-transform:skew(8deg) rotate(3deg);
        transform:skew(8deg) rotate(3deg);
    }
</style>

<!--6: page move to bookmark animation-->
<script>
    $("#anchor").on('click',function(e) {
        var url = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(url).offset().top
        }, 1000);
        return false;
    });
</script>

<!--7: JS toggle two functions-->
<script>
    function down (el) {
        el.next().slideDown();
        el.addClass('active');
    }

    function up (el) {
        el.next().slideUp();
        el.removeClass('active');
    }
    $('button').click(function () {
        return (this.tog = !this.tog) ? down($(this)) : up($(this));
    });
</script>

<!--8: Back to Top button-->
<style>
    .footer-logo .back-top {
        background-color: rgba(0,0,0,0.3);
        bottom: 0;
        color: #fff;
        cursor: pointer;
        display: none;
        font-size: 1.4rem;
        height: 60px;
        line-height: 3.2rem;
        position: fixed;
        right: 5%;
        text-align: center;
        text-decoration: none;
        width: 60px;
        z-index: 99;
    }
    .footer-logo .arrow {
        border-left: 2px solid #fff;
        border-top: 2px solid #fff;
        height: 25px;
        left: 30%;
        position: relative;
        top: 40%;
        width: 25px;
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>

<script>
    //scroll event, hide button till certain offset
    $(window).scroll(function (event) {
        if (jQuery(this).scrollTop() > 400) {
            jQuery('.back-top').fadeIn(300);
        } else {
            jQuery('.back-top').fadeOut(300);
        }
    });

    //click event
    $('.back-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 300);
        return false;
    })
</script>

<!--9: Add template based on content type, without effect on edit form-->
    <?php
    // Get path arguments.
    $args = arg();
    // Do we have a node? Is this a edit page?
    if (isset($vars['node']) && !isset($args[2])) {

        $suggests = &$vars['theme_hook_suggestions'];

        // Remove first argument of "node".
        unset($args[0]);

        // Set type.
        $type = "page__type_{$vars['node']->type}";

        // Bring it all together.
        $suggests = array_merge(
            $suggests,
            array($type),
            theme_get_suggestions($args, $type)
        );
    }
    ?>

<!--10: Add CSS file based on content type-->
    <?php
    drupal_add_css(
    //path is case sensitive
        path_to_theme('theme', 'startupgrowth_ciw') .'/CSS/types/'. $vars['node']->type .'.css',
        array('group' => CSS_THEME, 'type' => 'file' , 'preprocess' => True)
    );
    ?>

<!--11: Add taxonomy filter to view dynamically-->
    <?php
    //    set view and display
    $view = views_get_view('your_view');
    $view->set_display('your_display');
    //    filter by lab taxonomy by tid
    $view->add_item(
        $view->current_display,
        'filter',
        'taxonomy_index',
        'tid',
        array(
            'operator' => 'or',
            'value' => 'your tid variable',
            'group' => 1,
        ));
    $view->execute();
    print $view->render('your_display');
    ?>
