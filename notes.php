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

<!--3: click outside menu to close for responsive menu_drupal/super fish-->
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

    //Superfish version
    $('html').click(function () {
        var menu = $('ul.sf-menu');
        if (menu.hasClass('sf-expanded')) {
            menu.removeClass('sf-expanded');
            menu.addClass('sf-hidden');
        }
    });
    //if click on the menu or toggle button do not close, bind event to menu block instead of toggle button because it needs click to toggle
    $('div.block-superfish').click(function (e) {
        e.stopPropagation();
        //Can only bind one object at a time
    });
    $('ul.sf-menu a').click(function (e) {
        e.stopPropagation();
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
    'field_data_field_machie_name',
    'field_machie_name_tid',
    array(
        'operator' => 'or',
        'value' => 'your tid variable',
        'group' => 1,
    ));
$view->execute();
print $view->render('your_display');
//cannot assign print to variables
$result = $view->render('related_policy_view');
?>

<!--12: HTML5 zoom in animation -->
<style>
    item-zoom {
        -webkit-animation: slowZoom 40s infinite;
        -ms-animation: slowZoom 40s infinite;
        animation: slowZoom 40s infinite;
    }

    @-webkit-keyframes slowZoom{0%{-webkit-transform:scale(1)}50%{-webkit-transform:scale(1.1)}100%{-webkit-transform:scale(1)}}
    @-moz-keyframes slowZoom{0%{-moz-transform:scale(1)}50%{-moz-transform:scale(1.1)}100%{-moz-transform:scale(1)}}
    @-o-keyframes slowZoom{0%{-o-transform:scale(1)}50%{-o-transform:scale(1.1)}100%{-o-transform:scale(1)}}
    @keyframes slowZoom{0%{transform:scale(1)}50%{transform:scale(1.1)}100%{transform:scale(1)}}

    /*remember to add overflow: hidden to the parent element*/
</style>

<!--13: simple hook_menu call to set up config form drupal 7-->
<?php
function custom_blocks_admin() {
    $form = array();
    // display value if already set
    $value = variable_get('custom_blocks_switch');
    // check box field
    $form['custom_blocks_switch'] = array(
        '#type' => 'checkbox',
        '#title' => t('Memex server is running'),
        // init default value
        '#default_value' => isset($value) ? $value: '',
    );

    return system_settings_form($form);
}

function custom_blocks_menu() {

    $items = array();
    // put it on admin menu bar
    $items['admin/settings/switch'] = array(
        // name displayed on the menu
        'title' => 'Memex switch',
        'description' => 'Memex server status switch page',
        // call form function here
        'page callback' => 'drupal_get_form',
        'page arguments' => array('custom_blocks_admin'),
        // go to permission page, find the argument that fits your goal
        'access arguments' => array('administer users'),
        'type' => MENU_NORMAL_ITEM,
    );

    return $items;
}
?>

<!--14: one time animation when page loaded-->
<style>
    .item {
        opacity: 0;
        -moz-transition: opacity 1.5s;
        -webkit-transition: opacity 1.5s;
        -o-transition: opacity 1.5s;
        transition: opacity 1.5s;
    }
    .item.fadein {
        opacity: 1;
    }
</style>
<script>
    $(window).load(function() {
        $('.item').addClass("fadein");
    })
</script>

<!--15: global install drush on linux -->
1: install composer and drush

2: find composer dir: composer global config home

3: add symbolic link: sudo ln -s /"composer dir"/vendor/drush/drush/drush /usr/local/bin

<!--16: Image with reflect shadow rotates when hover-->
<style>
    .news-image-wrapper {
        border-radius: 11px;
        overflow: visible;
        position: relative;
        max-width: 110px;
        &::before {
             display: block;
             content: "";
             height: 90%;
             width: 160%;
             position: absolute;
             background-image: url(your_url);
             background-size: 100% auto;
             background-repeat: no-repeat;
             top: 89%;
             left: -30%;
             right: 0;
             transition: all .1s ease-out;
             transform-origin: 30% 50%;
             pointer-events: none;
         }
        &:hover {
            .news-image {
                transform: translateX(15%) rotateZ(0) scale(.87);
                img {
                    transform: scale(1.2) translateX(-10%) translateY(6%) rotateZ(0);
                }
            }
        }
        &:hover::before {
             opacity: 0;
             transform: scaleX(0);
         }
        .news-image {
            transform: translateX(15%) rotateZ(-11deg) scale(.87);
            transition: transform .2s ease-out;
            background: #5fb7ce;
            border: 5px solid #5fb7ce;
            transform-origin: 0 100%;
            overflow: hidden;
            border-radius: 11px;
        }
    }

    .news-title {
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
    }
    .news.row {
        margin-top: 30px;
    }
</style>

<!--17: Drupal 8 redirect after login-->
<?php
function custom_blocks_user_login($account) {
    //base url with https
    global $base_secure_url;
    \Drupal::service('request_stack')->getCurrentRequest()->query->set('destination', $base_secure_url);
}
?>

<!--18: Centered section bottom shadow effect-->
<style>
    section {
        position: relative;
    }
    section:before {
        content: "";
        position: absolute;
        z-index: -1;
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,.6);
        box-shadow: 0 0 15px rgba(0,0,0,.6);
        bottom: 0;
        width: 94%;
        height: 40px;
        -moz-border-radius: 100%;
        border-radius: 100%;
        left: 3%;
    }
</style>

<!--19: JavaScript swap image and text column in odd/even row-->
<script>
    $(document).ready(function(){
        $('.row:odd div.column:first-child').each(function () {
            $(this).insertAfter($(this).next('div'));
        });
    });
</script>

<!--20: Looping page from top to bottom-->
<script>
    var body = document.body,
        html = document.documentElement;
//find height
    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );
//init loop if window needs scroll
    if ($(document).height() > $(window).height() ) {
        setInterval(function(){

            //time to scroll to bottom
            setTimeout(function() {
                //minus the window height bcuz scrollTop measure starts from the top of the window
                $("html, body").animate({ scrollTop: $(document).height() - $(window).height() }, 15000);//15 seconds to the bottom
            },1000);

            //scroll back to top
            $('html, body').animate({scrollTop:0}, 2000);

        },1000);
    }
</script>

<!--21: Use url parameter to open accordion-->
<script>
    // Accordion
    lists.project = $(".project-list");
    function down (el) {
        el.next().slideDown();
        el.addClass('active');
    }
    function up (el) {
        el.next().slideUp();
        el.removeClass('active');
    }
    lists.project.click(function () {
        // Toggle accordion
        return ($(this).hasClass('active')) ? up($(this)) : down($(this));
    });

    // get parameter
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('action')) {
        // set ID based on parameter
        var list_id = "#" + urlParams.get('action');
        // open accordion based on ID
        down($(list_id));
        // move to anchor
        $('html, body').animate({
            scrollTop: $(list_id).offset().top
        }, 1000);
    }
</script>

<!--22: Use session to store data for download as CSV file-->
<!--On page that generate results-->
<?php
$_SESSION['download'] = $download;
?>
<!--On page that handle download-->
<?php
session_start();

function download_csv_results($results, $name) {
    if (!empty($results)) {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $name);
        header('Pragma: no-cache');
        header("Expires: 0");

        $outstream = fopen("php://output", "w");
        fputcsv($outstream, array("Print your header"));
        foreach ($results as $result) {
            $temp = ["Print result row"];
            fputcsv($outstream, $temp);
        }
        fclose($outstream);
        exit();
    }
}

if (!empty($_SESSION['download'])) {
    $results = $_SESSION['download'];
    download_csv_results($results, 'download.csv');
    unset($_SESSION['download']);
}
?>

<!--23: Use regex to extract desired part from HTML-->
<?php
function extractBody($url) {
    // only process html files
    if (strpos($url, '.html') !== false) {
        $file = file_get_contents($url, true);
        $matches = [];
        // in this case get <div id="inside-content2">
        preg_match('/<\s*div.id=.inside-content2.*>.*.<\s*\/\s*div>/', $file, $matches);
        if (!empty($matches[0])) {
            echo $url."is being processed \r";
            file_put_contents($url, $matches[0]);
        }
    }
}

// get directory
$dir = "../html-mini/";
$a = scandir($dir);
foreach ($a as $html) {
    extractBody($html);
}
?>

<!--24: Convert multiple HTML files into a json file for Drupal feeds-->
<?php
function toJson($url) {
    // only process HTML
    if (strpos($url, '.html') !== false) {
        $arr = [];
        $filename = pathinfo($url, PATHINFO_FILENAME);
        echo "processing file: " . $filename . "\n";
        $arr['title'] = $filename;
        $body = file_get_contents($url, true);
        $arr['body'] = $body;
        // return null for article without body content
        if (strlen($body) > 0) {
            return $arr;
        }
    }
}
$array = [];
$dir = "../html-mini/";
$a = scandir($dir);
foreach ($a as $html) {
    $temp = toJson($html);
    // ignore article without body content
    if ($temp !== null) {
        $array[] = $temp;
    }
}
$fp = fopen('summery.json', 'w');
fwrite($fp, json_encode($array));
fclose($fp);
?>

<!--25: Radio select button with custom text input field-->
<div class="amount">
    <input name="amount" onchange="ca.disabled = true;" type="radio" value="1000.00" id="b1000"><label for="b1000">&nbsp;$1,000</label>
    <input name="amount" onchange="ca.disabled = true;" type="radio" value="500.00" id="b500"><label for="b500">&nbsp;$500</label>
    <input name="amount" onchange="ca.disabled = true;" type="radio" value="250.00" id="b250"><label for="b250">&nbsp;$250</label>
    <input name="amount" onchange="ca.disabled = true;" type="radio" value="100.00" id="b100"><label for="b100">&nbsp;$100</label>
    <!--if custom amount checked, enable text input field-->
    <br>
    <input name="amount" onchange="ca = document.getElementById('custom_amount'); ca.value = ''; ca.disabled = false; ca.name = 'amount';" type="radio" id="other">
    <label for="other">Other: $ </label>
    <input disabled="disabled" id="custom_amount" name="amount_disabled" onchange="document.getElementById('a3').value = this.value;" required="" size="5" type="text">
</div>
<style>
    /*hide custom amount until radio button is checked*/
    #custom_amount {
        font-size: 1.5em;
        display: none;
    }
    #other:checked + label + input {
        display: inline;
    }
</style>

<!--26: Image tooltip pure CSS-->
<a class="tooltip-image" href="javascript: void(0)">
    mountains
    <span>
        <img src="/image.jpg">
    </span>
</a>
<style>
    /*SCSS*/
    .tooltip-image {
        text-decoration:none;
        position:relative;
        span {
            display:none;
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            border-radius:6px;
            color:black;
            background:white;
            img {
                float:left;
                max-width: 300px;
            }
        }
        &:hover {
            span {
                display:block;
                position:absolute;
                top: -240px;
                left: -120px;
                z-index:1000;
                width:auto;
                max-width:320px;
                min-height:128px;
                border:1px solid #eee;
                overflow:hidden;
                padding:8px;
                -webkit-box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);
                -moz-box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);
                box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);
            }
        }
    }
</style>