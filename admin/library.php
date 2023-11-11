<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style_foot.css">

    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="https://kit.fontawesome.com/93df7150d5.js" crossorigin="anonymous"></script>

    <style>
        /* .left-side {
            height: 400px;
            width: 20%;
            border: solid 1px black;

        }

        .right-side {
            height: 400px;
            width: 300;
            border: solid 1px black;

        } */

        .flex-container {
            display: flex;
            /* background-color: blue; */

        }

        .flex-container>aside {
            background-color: blue;
            margin: auto;
            /* background-color: blue; */
        }

        .left_menubar {
            height: 100%;
            width: 100%;
            background-color: #E7E9EB;
            overflow-y: scroll;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .topnav {
            position: relative;
            z-index: 2;
            font-size: 17px;
            background-color: #282A35;
            color: #f1f1f1;
            width: 100%;
            padding: 0;
            letter-spacing: 1px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .Lt3-card,
        .Lt3-card-2 {
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .topnav a {
            padding: 10px 15px 9px 15px !important;
            text-decoration: none;
        }

        .topnav .Lt3-bar a:hover,
        .topnav .Lt3-bar a:focus {
            background-color: #000000 !important;
            color: #ffffff !important;
            text-decoration: none;
        }

        .topnav .Lt3-bar a.active {
            background-color: #04AA6D !important;
            color: #ffffff;
        }

        .topnav a.topnav-icons {
            background-color: #282A35;
        }

        a.topnav-icons {
            width: 52px !important;
            font-size: 20px !important;
            padding-top: 11px !important;
            padding-bottom: 13px !important;
        }

        a.topnav-icons.fa-home {
            font-size: 22px !important
        }

        a.topnav-icons.fa-menu {
            font-size: 22px !important
        }

        a.topnav-localicons {
            font-size: 20px !important;
            padding-top: 6px !important;
            padding-bottom: 12px !important;
        }

        .Lt3-bar .Lt3-button {
            white-space: normal
        }

        .Lt3-bar .Lt3-bar-item {
            padding: 8px 16px;
            float: left;
            width: auto;
            border: none;
            display: block;
            outline: 0
        }

        .Lt3-left {
            float: left !important
        }

        .Lt3-right {
            float: right !important
        }

        .Lt3-sidebar {
            height: 100%;
            width: 200px;
            background-color: #fff;
            position: fixed !important;
            z-index: 1;
            overflow: auto;
        }

        #leftmenuinner {
            position: fixed;
            top: 25px;
            padding-top: 118px;
            padding-bottom: 0;
            height: 100%;
            width: 220px;
            background-color: transparent;
        }


        #leftmenuinnerinner {
            height: 100%;
            width: 100%;
            background-color: #E7E9EB;
            overflow-y: scroll;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .Lt3-sidebar {
            height: 100%;
            width: 200px;
            background-color: #fff;
            position: fixed !important;
            z-index: 1;
            overflow: auto;
        }


        .w3-container:after,
        .w3-container:before,
        .w3-panel:after,
        .w3-panel:before,
        .w3-row:after,
        .w3-row:before,
        .w3-row-padding:after,
        .w3-row-padding:before,
        .w3-cell-row:before,
        .w3-cell-row:after,
        .w3-clear:after,
        .w3-clear:before,
        .w3-bar:before,
        .w3-bar:after {
            content: "";
            display: table;
            clear: both;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .w3-container:after,
        .w3-container:before,
        .w3-panel:after,
        .w3-panel:before,
        .w3-row:after,
        .w3-row:before,
        .w3-row-padding:after,
        .w3-row-padding:before,
        .w3-cell-row:before,
        .w3-cell-row:after,
        .w3-clear:after,
        .w3-clear:before,
        .w3-bar:before,
        .w3-bar:after {
            content: "";
            display: table;
            clear: both;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        .w3-clear:after, .w3-clear:before, .w3-bar:before, .w3-bar:after {
    content: "";
    display: table;
    clear: both;
}
        .Lt3-sidebar.Lt3-collapse {
            display: block !important;
        }

        #sidenav h2 {
            font-size: 21px;
            padding-left: 16px;
            margin: -4px 0 4px 0;
            width: 204px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Segoe UI", Arial, sans-serif;
            font-weight: 400;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
        }

        .w3-main {
            transition: margin-left 0s;
        }


        .w3-light-grey,
        .w3-hover-light-grey:hover,
        .w3-light-gray,
        .w3-hover-light-gray:hover {
            color: #000 !important;
            background-color: #f1f1f1 !important;
        }

        .w3-white,
        .w3-hover-white:hover {
            color: #000 !important;
            background-color: #fff !important;
        }
    </style>

    <title>library</title>
</head>

<body>
    <?php include 'users/user_nav.php' ?>
    <?php include 'users/_dbconnect.php' ?>

    <div class='Lt3-card-2 topnav notranslate' id='topnav'>
        <div style="overflow:auto;">
            <div class="Lt3-bar Lt3-left" style="width:100%;overflow:hidden;height:44px">
                <a href='javascript:void(0);' class='topnav-icons fa fa-menu Lt3-hide-large Lt3-left Lt3-bar-item Lt3-button' onclick='open_menu()' title='Menu'></a>
                <a href='/default.asp' class='topnav-icons fa fa-home Lt3-left Lt3-bar-item Lt3-button' title='Home'></a>
                <a class="Lt3-bar-item Lt3-button" href='/html/default.asp' title='HTML Tutorial' style="padding-left:18px!important;padding-right:18px!important;">dynamics of social change</a>
                <a class="Lt3-bar-item Lt3-button" href='/css/default.asp' title='CSS Tutorial'>Principle of management</a>
                <a class="Lt3-bar-item Lt3-button" href='/js/default.asp' title='JavaScript Tutorial'>Legal and Constitutional History</a>
                <a class="Lt3-bar-item Lt3-button" href='/sql/default.asp' title='SQL Tutorial'>Managerial Economics</a>
                <a class="Lt3-bar-item Lt3-button" href='/python/default.asp' title='Python Tutorial'>Psychology</a>
                <a class="Lt3-bar-item Lt3-button" href='/java/default.asp' title='Java Tutorial'>Law of special contacts</a>
                <a class="Lt3-bar-item Lt3-button" href='/php/default.asp' title='PHP Tutorial'>PHP</a>
                <a class="Lt3-bar-item Lt3-button" href='/bootstrap/bootstrap_ver.asp' title='Bootstrap Tutorial'>BOOTSTRAP</a>
                <a class="Lt3-bar-item Lt3-button" href='/howto/default.asp' title='How To'>HOW TO</a>
                <a class="Lt3-bar-item Lt3-button" href='/Lt3css/default.asp' title='Lt3.CSS Tutorial'>Lt3.CSS</a>
                <a class="Lt3-bar-item Lt3-button" href='/c/index.php' title='C Tutorial'>C</a>
                <a class="Lt3-bar-item Lt3-button" href='/cpp/default.asp' title='C++ Tutorial'>C++</a>
                <a class="Lt3-bar-item Lt3-button" href='/cs/index.php' title='C# Tutorial'>C#</a>
                <a class="Lt3-bar-item Lt3-button" href='/react/default.asp' title='React Tutorial'>REACT</a>
                <a class="Lt3-bar-item Lt3-button" href='/r/default.asp' title='R Tutorial'>R</a>
                <a class="Lt3-bar-item Lt3-button" href='/jquery/default.asp' title='jQuery Tutorial'>JQUERY</a>
                <a class="Lt3-bar-item Lt3-button" href='/django/index.php' title='Django Tutorial'>DJANGO</a>
                <a class="Lt3-bar-item Lt3-button" href='/typescript/index.php' title='Typescript Tutorial'>TYPESCRIPT</a>
                <a class="Lt3-bar-item Lt3-button" href='/nodejs/default.asp' title='NodeJS Tutorial'>NODEJS</a>
                <a class="Lt3-bar-item Lt3-button" href='/mysql/default.asp' title='MySQL Tutorial'>MYSQL</a>
                
                <!--
      <a class="Lt3-bar-item Lt3-button Lt3-right" id='topnavbtn_exercises' href='javascript:void(0);' onclick='Lt3_open_nav("exercises")' title='Exercises'>EXERCISES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
      -->

            </div>
        </div>
    </div>
    </div>

    <div class="Lt3-sidebar Lt3-collapse" id="sidenav" style="top: 118px; padding-top: 150px; display: none;">
        <div id="leftmenuinner" style="padding-top: 118px;">
            <div id="leftmenuinnerinner" style="overflow-y: scroll;">
                <!--  <a href='javascript:void(0)' onclick='close_menu()' class='Lt3-button Lt3-hide-large Lt3-large Lt3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
                <h2 class="left"><span class="left_h2">HTML</span> Tutorial</h2>
                <a target="_top" href="default.asp" class="active">HTML HOME</a>
                <a target="_top" href="html_intro.asp">HTML Introduction</a>
                <a target="_top" href="html_editors.asp">HTML Editors</a>
                <a target="_top" href="html_basic.asp">HTML Basic</a>
                <a target="_top" href="html_elements.asp">HTML Elements</a>
                <a target="_top" href="html_attributes.asp">HTML Attributes</a>
                <a target="_top" href="html_headings.asp">HTML Headings</a>
                <a target="_top" href="html_paragraphs.asp">HTML Paragraphs</a>
                <a target="_top" href="html_styles.asp">HTML Styles</a>
                <a target="_top" href="html_formatting.asp">HTML Formatting</a>
                <a target="_top" href="html_quotation_elements.asp">HTML Quotations</a>
                <a target="_top" href="html_comments.asp">HTML Comments</a>
                <a target="_top" href="html_colors.asp">HTML Colors</a>
                <div class="tut_overview">
                    <a target="_top" href="html_colors.asp">Colors</a>
                    <a target="_top" href="html_colors_rgb.asp">RGB</a>
                    <a target="_top" href="html_colors_hex.asp">HEX</a>
                    <a target="_top" href="html_colors_hsl.asp">HSL</a>
                </div>
                <a target="_top" href="html_css.asp">HTML CSS</a>
                <a target="_top" href="html_links.asp">HTML Links</a>
                <div class="tut_overview">
                    <a target="_top" href="html_links.asp">Links</a>
                    <a target="_top" href="html_links_colors.asp">Link Colors</a>
                    <a target="_top" href="html_links_bookmarks.asp">Link Bookmarks</a>
                </div>
                <a target="_top" href="html_images.asp">HTML Images</a>
                <div class="tut_overview">
                    <a target="_top" href="html_images.asp">Images</a>
                    <a target="_top" href="html_images_imagemap.asp">Image Map</a>
                    <a target="_top" href="html_images_background.asp">Background Images</a>
                    <a target="_top" href="html_images_picture.asp">The Picture Element</a>
                </div>
                <a target="_top" href="html_favicon.asp">HTML Favicon</a>
                <a target="_top" href="html_tables.asp">HTML Tables</a>
                <div class="tut_overview">
                    <a target="_top" href="html_tables.asp">HTML Tables</a>
                    <a target="_top" href="html_table_borders.asp">Table Borders</a>
                    <a target="_top" href="html_table_sizes.asp">Table Sizes</a>
                    <a target="_top" href="html_table_headers.asp">Table Headers</a>
                    <a target="_top" href="html_table_padding_spacing.asp">Padding &amp; Spacing</a>
                    <a target="_top" href="html_table_colspan_rowspan.asp">Colspan &amp; Rowspan</a>
                    <a target="_top" href="html_table_styling.asp">Table Styling</a>
                    <a target="_top" href="html_table_colgroup.asp">Table Colgroup</a>
                </div>



                <a target="_top" href="html_lists.asp">HTML Lists</a>
                <div class="tut_overview">
                    <a target="_top" href="html_lists.asp">Lists</a>
                    <a target="_top" href="html_lists_unordered.asp">Unordered Lists</a>
                    <a target="_top" href="html_lists_ordered.asp">Ordered Lists</a>
                    <a target="_top" href="html_lists_other.asp">Other Lists</a>
                </div>
                <a target="_top" href="html_blocks.asp">HTML Block &amp; Inline</a>
                <a target="_top" href="html_classes.asp">HTML Classes</a>
                <a target="_top" href="html_id.asp">HTML Id</a>
                <a target="_top" href="html_iframe.asp">HTML Iframes</a>
                <a target="_top" href="html_scripts.asp">HTML JavaScript</a>
                <a target="_top" href="html_filepaths.asp">HTML File Paths</a>
                <a target="_top" href="html_head.asp">HTML Head</a>
                <a target="_top" href="html_layout.asp">HTML Layout</a>
                <a target="_top" href="html_responsive.asp">HTML Responsive</a>
                <a target="_top" href="html_computercode_elements.asp">HTML Computercode</a>
                <a target="_top" href="html5_semantic_elements.asp">HTML Semantics</a>
                <a target="_top" href="html5_syntax.asp">HTML Style Guide</a>
                <a target="_top" href="html_entities.asp">HTML Entities</a>
                <a target="_top" href="html_symbols.asp">HTML Symbols</a>
                <a target="_top" href="html_emojis.asp">HTML Emojis</a>
                <a target="_top" href="html_charset.asp">HTML Charset</a>
                <a target="_top" href="html_urlencode.asp">HTML URL Encode</a>
                <a target="_top" href="html_xhtml.asp">HTML vs. XHTML</a>
                <br>
                <h2 class="left"><span class="left_h2">HTML</span> Forms</h2>
                <a target="_top" href="html_forms.asp">HTML Forms</a>
                <a target="_top" href="html_forms_attributes.asp">HTML Form Attributes</a>
                <a target="_top" href="html_form_elements.asp">HTML Form Elements</a>
                <a target="_top" href="html_form_input_types.asp">HTML Input Types</a>
                <a target="_top" href="html_form_attributes.asp">HTML Input Attributes</a>
                <a target="_top" href="html_form_attributes_form.asp">HTML Input Form Attributes</a>
                <br>
                <h2 class="left"><span class="left_h2">HTML</span> Graphics</h2>
                <a target="_top" href="html5_canvas.asp">HTML Canvas</a>
                <a target="_top" href="html5_svg.asp">HTML SVG</a>
                <br>
                <h2 class="left"><span class="left_h2">HTML</span> Media</h2>
                <a target="_top" href="html_media.asp">HTML Media</a>
                <a target="_top" href="html5_video.asp">HTML Video</a>
                <a target="_top" href="html5_audio.asp">HTML Audio</a>
                <a target="_top" href="html_object.asp">HTML Plug-ins</a>
                <a target="_top" href="html_youtube.asp">HTML YouTube</a>
                <br>
                <h2 class="left"><span class="left_h2">HTML</span> APIs</h2>
                <a target="_top" href="html5_geolocation.asp">HTML Geolocation</a>
                <a target="_top" href="html5_draganddrop.asp">HTML Drag/Drop</a>
                <a target="_top" href="html5_webstorage.asp">HTML Web Storage</a>
                <a target="_top" href="html5_webworkers.asp">HTML Web Workers</a>
                <a target="_top" href="html5_serversentevents.asp">HTML SSE</a>
                <br>
                <h2 class="left"><span class="left_h2">HTML</span> Examples</h2>
                <a target="_top" href="html_examples.asp">HTML Examples</a>
                <a target="_top" href="html_quiz.asp">HTML Quiz</a>
                <a target="_top" href="html_exercises.asp">HTML Exercises</a>
                <a target="_top" href="html_exam.asp">HTML Certificate</a>
                <a target="_top" href="html_summary.asp">HTML Summary</a>
                <a target="_top" href="html_accessibility.asp">HTML Accessibility</a>
                <br>
                <h2 class="left"><span class="left_h2">HTML</span> References</h2>
                <a target="_top" href="/tags/default.asp">HTML Tag List</a>
                <a target="_top" href="/tags/ref_attributes.asp">HTML Attributes</a>
                <a target="_top" href="/tags/ref_standardattributes.asp">HTML Global Attributes</a>
                <a target="_top" href="/tags/ref_html_browsersupport.asp">HTML Browser Support</a>
                <a target="_top" href="/tags/ref_eventattributes.asp">HTML Events</a>
                <a target="_top" href="/tags/ref_colornames.asp">HTML Colors</a>
                <a target="_top" href="/tags/ref_canvas.asp">HTML Canvas</a>
                <a target="_top" href="/tags/ref_av_dom.asp">HTML Audio/Video</a>
                <a target="_top" href="/tags/ref_html_dtd.asp">HTML Doctypes</a>
                <a target="_top" href="/tags/ref_charactersets.asp">HTML Character Sets</a>
                <a target="_top" href="/tags/ref_urlencode.asp">HTML URL Encode</a>
                <a target="_top" href="/tags/ref_language_codes.asp">HTML Lang Codes</a>
                <a target="_top" href="/tags/ref_httpmessages.asp">HTTP Messages</a>
                <a target="_top" href="/tags/ref_httpmethods.asp">HTTP Methods</a>
                <a target="_top" href="/tags/ref_pxtoemconversion.asp">PX to EM Converter</a>
                <a target="_top" href="/tags/ref_keyboardshortcuts.asp">Keyboard Shortcuts</a>
                <br><br>
            </div>
        </div>
    </div>

    <div class="w3-main w3-light-grey" id="belowtopnav" style="margin-left: 220px; padding-top: 0px;">
        <div class="w3-row w3-white">
            <div class="w3-col l10 m12" id="main">
                <div id="mainLeaderboard" style="overflow:hidden;">
                    <!-- MainLeaderboard-->

                    <div id="div-gpt-ad-1422003450156-2" data-google-query-id="CN6q3Oz3xvoCFTq_SwUdhTEDoA">

                        <div id="google_ads_iframe_/16833175/MainLeaderboard_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/16833175/MainLeaderboard_0" name="google_ads_iframe_/16833175/MainLeaderboard_0" title="3rd party ad content" width="970" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="1"></iframe></div>
                    </div>

                </div>
                <h1>HTML<span class="color_h1"> Tutorial</span></h1>
                <div class="w3-clear nextprev">
                    <a class="w3-left w3-btn" href="/default.asp">❮ Home</a>
                    <a class="w3-right w3-btn" href="html_intro.asp">Next ❯</a>
                </div>

                <div class="w3-panel w3-info intro">
                    <p>HTML is the standard markup language for Web pages.</p>
                    <p>With HTML you can create your own Website.</p>
                    <p>HTML is easy to learn - You will enjoy it!</p>
                </div>
                <hr>

                <br>
                <div class="w3-clear nextprev">
                    <a class="w3-left w3-btn" href="/default.asp">❮ Home</a>
                    <a class="w3-right w3-btn" href="html_intro.asp">Next ❯</a>
                </div>

            </div>


        </div>



</body>

</html>