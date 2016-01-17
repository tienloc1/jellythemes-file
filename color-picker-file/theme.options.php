<?php

// Add this array option from line 1561

                    array(

                        'id'=>'color',

                        'type' => 'text',

                        'title' => __('Theme color scheme', 'jellythemes'),

                        'subtitle' => __('Select your themes alternative color scheme.', 'jellythemes')

                    ),
                    array(

                        'id'=>'icon',

                        'type' => 'select',

                        'title' => __('Theme icon color', 'jellythemes'),

                        'subtitle' => __('Select your themes icon color.', 'jellythemes'),

                        'options' => array(

                                            'gold' => 'Default',

                                            'red'=>'Red',

                                            'wine'=>'Wine',

                                            'gold'=>'Gold',

                                            'bluegray'=>'Bluegray',

                                            'orange'=>'Orange',

                                            'black'=>'Black',

                                            'yellow'=>'Yellow',

                                            'green'=>'Green',

                                    ),

                        'default' => 'gold',

                    ),


// Add this function the end of the file

if ( !function_exists( 'redux_option_save_with_css' ) ):

    function redux_option_save_with_css() {
        WP_Filesystem();
        global $wp_filesystem, $jellythemes;

        $filename = get_template_directory() . '/css/customs.css';

        if ( is_writable( $filename ) ) {
            $f = fopen( $filename, 'w+' );
                fwrite( $f, $jellythemes['custom_css'] );
                $text = '.logo_elixir {background:url("../images/color/logo_elixir_'. $jellythemes['icon'] .'.png");}
#header .menu-item a:hover, #header .menu-item.current a {color: ' . $jellythemes['color'] . ';}
h2.section-title:before, h2.section-title:after {color: ' . $jellythemes['color'] . ';}
.slide-sep {background: url("../images/color/slide-separator_'. $jellythemes['icon'] .'.png");width: 148px;}
h2.section-title:before, h2.section-title:after {content: url("../images/color/header_decorator_'. $jellythemes['icon'] .'.png");}
section.timetable .column-divider, section.timetable .opening-hours:after{background-image: url("../images/color/column-divider_'. $jellythemes['icon'] .'.png");}
section.reservations h4 span:before,
section.reservations h4 span:after {border-bottom: 1px solid ' . $jellythemes['color'] . ';}
.section.dark h2.section-title:before, .section.dark h2.section-title:after {content: url("../images/color/header_decorator_'. $jellythemes['icon'] .'.png");}
@media only screen and (max-width : 568px) {
.logointro {width: 160px;height: 137px;background-size: cover;margin-top: 160px;margin-bottom: 10px;}
h2.section-title:before, h2.section-title:after, .section.dark h2.section-title:before, .section.dark h2.section-title:after {content: none;}}
 h2.heading{color: ' . $jellythemes['color'] . ';}
.text strong, .text strong {color: ' . $jellythemes['color'] . ';}
section.timetable .section-subtitle {color: ' . $jellythemes['color'] . ';}
section.timetable .section-subtitle.hours {color: #ffffff;}
.timetable-decorator { background:url("../images/color/timetable-decorator_'. $jellythemes['icon'] .'.png");}
.timetable-decorator2 { background:url("../images/color/timetable-decorator2_'. $jellythemes['icon'] .'.png");}
section.menu h3 {color: #831B44;}
section.menu span {color: ' . $jellythemes['color'] . ';}
a.button.menu, .button.menu {border: 2px solid ' . $jellythemes['color'] . ';color: ' . $jellythemes['color'] . ';}
a.button.menu:hover, .button.menu:hover {color: #ffffff; background: ' . $jellythemes['color'] . ';}
section.menu .title {color: #831B44;}
section.menu .subtitle {color: ' . $jellythemes['color'] . ';}
nav.primary ul li a.selected span, nav.primary ul li a span:hover {border-bottom-color:' . $jellythemes['color'] . ';}
a.button, .button {border-color: ' . $jellythemes['color'] . '; color: ' . $jellythemes['color'] . ';}
a.button:hover, .button:hover {background: ' . $jellythemes['color'] . '; color: #ffffff;}
section.testimonials h2 {color: ' . $jellythemes['color'] . ';}
.item span.author {color: ' . $jellythemes['color'] . ';}
.carousel-wrapper.with_pagination .owl-theme .owl-controls .owl-page span {border-color: ' . $jellythemes['color'] . ';}
.testimonials.carousel-wrapper.with_pagination .owl-controls .owl-page.active span, .testimonials.carousel-wrapper.with_pagination .owl-controls.clickable .owl-page:hover span {background: ' . $jellythemes['color'] . ';}
a.button.contact, .button.contact {color: #ffffff; background: ' . $jellythemes['color'] . ';}
a.button.contact:hover, .button.contact:hover {color: ' . $jellythemes['color'] . '; background: #ffffff;}
#footer .social li .icon:hover, .comment-reply-link, #respond input[type=submit] {background:' . $jellythemes['color'] . ';}
a {color: ' . $jellythemes['color'] . ';}';
                fwrite( $f, $text);
                fclose( $f );

        }
    }

    add_action( 'redux/options/jellythemes/saved', 'redux_option_save_with_css' );

endif;