<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}



if (!function_exists('gsf_vc_templates')) {
    function gsf_vc_templates() {
        $templates = array();


        $template = array();
        $template['name'] = 'Page Title';
        $template['image_path'] = 'page-title';
        $template['custom_class'] = 'page-title';
        $template['content'] = <<<CONTENT
<p>[vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1542014395452{background-color: #f4f3ec !important;}"][vc_column][gsf_space desktop="68" tablet="55" tablet_portrait="50" mobile_landscape="45" mobile="40"][/vc_column][vc_column width="1/2"][gsf_page_title font_container="text_align:left|color:%23333333" title_font_size_md="34" title_font_size_sm="28" title_font_size_mb="24"][/vc_column][vc_column width="1/2"][gsf_breadcrumbs align="text-right" el_class="sm-text-left"][/vc_column][vc_column][gsf_space desktop="67" tablet="55" tablet_portrait="50" mobile_landscape="45" mobile="40"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Footer 01';
        $template['image_path'] = 'footer-01';
        $template['custom_class'] = 'footer';
        $template['content'] = <<<CONTENT
[vc_row color_skin="skin-dark" equal_height="yes" css=".vc_custom_1545877085097{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/12/footer-background.jpg?id=737) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][gsf_space desktop="124" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][vc_column el_class="md-mg-bottom-50,col-mb-12" width="1/2" offset="vc_col-md-3 vc_col-xs-6"][vc_widget_sidebar sidebar_id="footer1"][gsf_social_networks social_networks="social-facebook,social-twitter,social-instagram,social-skype" space_between="40|30|25|20|15" css=".vc_custom_1544169783179{padding-top: 7px !important;}"][/vc_column][vc_column el_class="md-mg-bottom-50,col-mb-12" width="1/2" offset="vc_col-md-2 vc_col-xs-6"][vc_widget_sidebar sidebar_id="footer2"][/vc_column][vc_column el_class="md-mg-bottom-50,col-mb-12" width="1/2" offset="vc_col-md-3 vc_col-xs-6"][vc_widget_sidebar sidebar_id="footer3"][/vc_column][vc_column el_class="md-mg-bottom-50,col-mb-12" width="1/2" offset="vc_col-md-4 vc_col-xs-6"][vc_widget_sidebar sidebar_id="footer4"][/vc_column][vc_column][gsf_space desktop="100" tablet="80" tablet_portrait="20" mobile_landscape="10" mobile="0"][/vc_column][vc_column width="1/2"][vc_widget_sidebar sidebar_id="bottombarleft"][/vc_column][vc_column width="1/2"][vc_widget_sidebar el_class="text-right,sm-text-left" sidebar_id="bottombarright"][/vc_column][vc_column][gsf_space desktop="50" tablet="45" tablet_portrait="40" mobile_landscape="40" mobile="40"][/vc_column][/vc_row]
CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Footer 02';
        $template['image_path'] = 'footer-02';
        $template['custom_class'] = 'footer';
        $template['content'] = <<<CONTENT
[vc_row css=".vc_custom_1542077624985{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-01.jpg?id=196) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][gsf_space desktop="100" tablet="80" tablet_portrait="70" mobile_landscape="65" mobile="60"][vc_widget_sidebar el_class="text-center,footer-horizontal-menu" sidebar_id="footer02menu"][gsf_space desktop="58" tablet="50" tablet_portrait="50" mobile_landscape="45" mobile="40"][vc_single_image image="192" img_size="full" alignment="center" css=".vc_custom_1542077676392{margin-bottom: 33px !important;}"][gsf_social_networks social_networks="social-twitter,social-facebook,social-instagram,social-pinterest,social-youTube" social_shape="circle-outline" el_class="text-center,hover-light" css=".vc_custom_1543823764085{margin-bottom: 40px !important;}"][vc_column_text css=".vc_custom_1542080133787{margin-bottom: 30px !important;}"]
<ul class="fs-14 primary-font text-center custom-footer-text-list">
 	<li>© 2018 Auteur. All Rights Reserved</li>
 	<li class="fw-bold"><a class="gsf-link transition03" href="#">(+68) 120034509</a></li>
 	<li><a class="gsf-link transition03" href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
</ul>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Footer 03';
        $template['image_path'] = 'footer-03';
        $template['custom_class'] = 'footer';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column][vc_column_text css=".vc_custom_1542080126051{margin-bottom: 30px !important;}"]</p>
<ul class="fs-14 primary-font text-center custom-footer-text-list">
<li>© 2018 Auteur. All Rights Reserved</li>
<li class="fw-bold"><a class="gsf-link transition03" href="#">(+68) 120034509</a></li>
<li><a class="gsf-link transition03" href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
</ul>
<p>[/vc_column_text][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Footer 04';
        $template['image_path'] = 'footer-04';
        $template['custom_class'] = 'footer';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542094094199{background-color: #f4f3ec !important;}"][vc_column][gsf_space desktop="120" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][vc_column el_class="md-mg-bottom-60" offset="vc_col-lg-4 vc_col-md-6"][gsf_heading layout_style="style-3" text_align="text-left justify-content-start" title="S2VlcCUyMGluJTIwdG91Y2g=" title_color="#333333" title_font_size="48" title_line_height="1.33|em" sub_title_font_size="18" sub_title_use_theme_fonts="" title_font_size_md="40" title_font_size_sm="34" title_font_size_mb="28" sub_title="CONTACT ME" css=".vc_custom_1544153285562{margin-bottom: 25px !important;}"][vc_column_text]</p>
<p class="fs-18 primary-font" style="color: #7d7d7d;">If you’d like to chat about working on a project together, or learn more about working with me, get in touch!</p>
<p>[/vc_column_text][/vc_column][vc_column offset="vc_col-lg-offset-2 vc_col-md-6"][contact-form-7 id="219"][/vc_column][vc_column][gsf_space desktop="120" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][vc_single_image image="216" img_size="full" alignment="center" el_class="text-center" css=".vc_custom_1542094190870{margin-bottom: 20px !important;}"][gsf_heading layout_style="style-3" title="Um9iZXJ0JTIwRnJhemllcg==" title_color="#333333" title_font_size="56" sub_title_font_size="18" title_use_theme_fonts="" title_font_size_lg="48" title_font_size_md="40" title_font_size_sm="34" title_font_size_mb="28" css=".vc_custom_1542095023079{margin-bottom: 40px !important;}"][gsf_social_networks social_networks="social-facebook,social-twitter,social-instagram,social-youTube,social-pinterest" space_between="35|30||25|" el_class="text-center" css=".vc_custom_1544153206016{margin-bottom: 50px !important;}"][vc_column_text]</p>
<ul class="fs-14 primary-font text-center custom-footer-text-list">
<li>© 2018 Auteur. All Rights Reserved</li>
<li class="fw-bold"><a class="gsf-link transition03" href="#">(+68) 120034509</a></li>
<li><a class="gsf-link transition03" href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
</ul>
<p>[/vc_column_text][gsf_space desktop="56" tablet="50" tablet_portrait="45" mobile_landscape="40" mobile="40"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = '404 Content';
        $template['image_path'] = '404-content';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row full_height="yes" content_placement="middle" css=".vc_custom_1542868671272{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/404-background.jpg?id=554) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column el_class="bg-clip-content" offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10" css=".vc_custom_1542868309203{background-color: #ffffff !important;}"][vc_row_inner el_class="text-center" css=".vc_custom_1542869141622{margin-top: 20px !important;margin-right: 20px !important;margin-bottom: 20px !important;margin-left: 20px !important;border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-bottom: 48px !important;border-left-color: #e4e2d8 !important;border-left-style: solid !important;border-right-color: #e4e2d8 !important;border-right-style: solid !important;border-top-color: #e4e2d8 !important;border-top-style: solid !important;border-bottom-color: #e4e2d8 !important;border-bottom-style: solid !important;}"][vc_column_inner][gsf_heading layout_style="style-3" title="NDA0" title_color="#333333" title_font_size="100|80|72|60|56" sub_title_font_size="18" title_use_theme_fonts="" title_typography="Libre Baskerville|700|700|normal" css=".vc_custom_1542869069244{margin-top: 32px !important;margin-bottom: 18px !important;}"][gsf_heading layout_style="style-4" space_between="17|px" title="V29vcHMlMkMlMjBsb29rcyUyMGxpa2UlMjB0aGlzJTIwcGFnZSUyMGRvZXMlMjBub3QlMjBleGlzdA==" title_color="#333333" title_font_size="24||||" title_line_height="1.42|em" sub_title_font_size="15" sub_title_letter_spacing="0|px" sub_title_color="disable-color" sub_title_use_theme_fonts="" sub_title="You could either go back or go to homepage" sub_title_typography="Libre Baskerville|italic|400|italic" css=".vc_custom_1542869127445{margin-bottom: 45px !important;}"][gsf_button title="HOMEPAGE" color="accent" icon_font="fal fa-home" el_class="dib" link="url:https%3A%2F%2Fauteur.g5plus.net%2F|title:Homepage||" css=".vc_custom_1542868760088{margin-right: 15px !important;margin-left: 15px !important;}"][gsf_button title="GO BACK" style="outline" color="gray" icon_font="fal fa-reply-all" el_class="dib" link="url:https%3A%2F%2Fauteur.g5plus.net%2F|title:Homepage||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Get In Touch';
        $template['image_path'] = 'get-in-touch';
        $template['custom_class'] = 'info-box';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column el_class="md-mg-bottom-60" offset="vc_col-md-4"][gsf_info_box layout_style="ib-left" title="ADDRESS" use_theme_fonts="" title_font_size="20" title_letter_spacing="1|px" ib_bg_color="" icon_font="fal fa-map-marker-alt" icon_color="#d8b069" icon_size="ib-medium" hover_bg_color="" hover_text_color="#333333" icon_hover_color="#d8b069" typography="Nunito Sans|800|800|normal" css=".vc_custom_1542860189401{margin-bottom: 40px !important;}"]</p>
<p class="fs-15 primary-font" style="color: #7e7e7e;">1800 Abbot Kinney Blvd. Unit D &amp; E Venice</p>
<p>[/gsf_info_box][gsf_info_box layout_style="ib-left" title="CONTACT" use_theme_fonts="" title_font_size="20" title_letter_spacing="1|px" sub_title_font_size="15" ib_bg_color="" icon_font="fal fa-phone" icon_color="#d8b069" icon_size="ib-medium" hover_bg_color="" hover_text_color="#333333" icon_hover_color="#d8b069" typography="Nunito Sans|800|800|normal" css=".vc_custom_1544410336740{margin-bottom: 40px !important;}"]</p>
<div class="fs-15 primary-font" style="color: #7e7e7e; line-height: 2.13;">Mobile: <span class="fw-bold heading-color">(+88) - 1990 - 6886</span><br />
Hotline: <span class="fw-bold heading-color">1800 - 1102</span><br />
Mail: contact@auteur.com</div>
<p>[/gsf_info_box][gsf_info_box layout_style="ib-left" title="HOUR OF OPERATION" use_theme_fonts="" title_font_size="20" title_letter_spacing="1|px" sub_title_font_size="15" ib_bg_color="" icon_font="fal fa-clock" icon_color="#d8b069" icon_size="ib-medium" hover_bg_color="" hover_text_color="#333333" icon_hover_color="#d8b069" typography="Nunito Sans|800|800|normal"]</p>
<div class="fs-15 primary-font" style="color: #7e7e7e; line-height: 2.13;">Monday - Friday: 09:00 - 20:00<br />
Sunday &amp; Saturday: 10:30 - 22:00</div>
<p>[/gsf_info_box][/vc_column][vc_column offset="vc_col-md-8"][gsf_heading layout_style="style-3" text_align="text-left justify-content-start" title="R2V0JTIwSW4lMjBUb3VjaA==" title_color="#333333" title_font_size="48|48|40|34|30" title_line_height="1.33|em" sub_title_font_size="18"][gsf_space desktop="45" tablet="40" tablet_portrait="40" mobile_landscape="35" mobile="35"][contact-form-7 id="546"][/vc_column][vc_column][gsf_space desktop="120" tablet="100" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Send A Message';
        $template['image_path'] = 'send-a-message';
        $template['custom_class'] = 'contact-form';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_space desktop="110" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][gsf_heading layout_style="style-3" title="U2VuZCUyMEElMjBNZXNzYWdl" title_color="#333333" title_font_size="48|48|40|34|30" title_line_height="1.33|em" sub_title_font_size="18"][gsf_space desktop="45" tablet="40" tablet_portrait="40" mobile_landscape="35" mobile="35"][contact-form-7 id="541"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Keep In Touch With Us';
        $template['image_path'] = 'keep-in-touch-with-us';
        $template['custom_class'] = 'info-box';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_heading layout_style="style-3" title="S2VlcCUyMEluJTIwVG91Y2glMjBXaXRoJTIwVXM=" title_color="#333333" title_font_size="48|48|40|34|30" title_line_height="1.33|em" sub_title_font_size="18" css=".vc_custom_1542857137080{margin-bottom: 25px !important;}"][vc_column_text]</p>
<p class="fs-15 text-center" style="color: #7e7e7e;">Auteur is a monthly book review publication distributed to 400,000 avid readers through subscribing bookstores and public libraries. Founded in 1988 and located in Nashville, Tennessee, BookPage serves as a broad-based selection guide to the best new books published every month.</p>
<p>[/vc_column_text][gsf_space desktop="90" tablet="80" tablet_portrait="70" mobile_landscape="60" mobile="50"][/vc_column][vc_column][vc_row_inner][vc_column_inner el_class="md-mg-bottom-40" width="1/2" offset="vc_col-md-4"][gsf_info_box layout_style="ib-left" title="ADDRESS" use_theme_fonts="" title_font_size="20" title_letter_spacing="1|px" ib_bg_color="" icon_font="fal fa-map-marker-alt" icon_color="#d8b069" icon_size="ib-medium" hover_bg_color="" hover_text_color="#333333" icon_hover_color="#d8b069" typography="Nunito Sans|800|800|normal"]</p>
<p class="fs-15 primary-font" style="color: #7e7e7e;">1800 Abbot Kinney Blvd. Unit D &amp; E Venice</p>
<p>[/gsf_info_box][/vc_column_inner][vc_column_inner el_class="md-mg-bottom-40" width="1/2" offset="vc_col-md-4"][gsf_info_box layout_style="ib-left" title="CONTACT" use_theme_fonts="" title_font_size="20" title_letter_spacing="1|px" sub_title_font_size="15" ib_bg_color="" icon_font="fal fa-phone" icon_color="#d8b069" icon_size="ib-medium" hover_bg_color="" hover_text_color="#333333" icon_hover_color="#d8b069" typography="Nunito Sans|800|800|normal"]</p>
<div class="fs-15 primary-font" style="color: #7e7e7e; line-height: 2.13;">Mobile: <span class="fw-bold heading-color">(+88) - 1990 - 6886</span><br />
Hotline: <span class="fw-bold heading-color">1800 - 1102</span><br />
Mail: contact@auteur.com</div>
<p>[/gsf_info_box][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-md-4"][gsf_info_box layout_style="ib-left" title="HOUR OF OPERATION" use_theme_fonts="" title_font_size="20" title_letter_spacing="1|px" sub_title_font_size="15" ib_bg_color="" icon_font="fal fa-clock" icon_color="#d8b069" icon_size="ib-medium" hover_bg_color="" hover_text_color="#333333" icon_hover_color="#d8b069" typography="Nunito Sans|800|800|normal"]</p>
<div class="fs-15 primary-font" style="color: #7e7e7e; line-height: 2.13;">Monday - Friday: 09:00 - 20:00<br />
Sunday &amp; Saturday: 10:30 - 22:00</div>
<p>[/gsf_info_box][/vc_column_inner][/vc_row_inner][gsf_space desktop="80" tablet="70" tablet_portrait="60" mobile_landscape="60" mobile="50"][gsf_google_map markers="%5B%7B%22address%22%3A%2240.617622%2C%20-73.984915%22%2C%22title%22%3A%226300-6310%2020th%20Ave%22%2C%22description%22%3A%22Brooklyn%2C%20NY%2011204%22%7D%5D" map_zoom="13" map_style="sliver"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Sponsors & affiliates';
        $template['image_path'] = 'sponsors-affiliates';
        $template['custom_class'] = 'partners';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column][gsf_space desktop="103" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][gsf_heading layout_style="style-4" space_between="20|px" title="U3BvbnNvcnMlMjAlMjYlMjBhZmZpbGlhdGVz" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.33|em" sub_title_font_size="14" sub_title_letter_spacing="0|px" sub_title_color="text-color" sub_title_use_theme_fonts="" sub_title="Lorem ipsum dolor sit amet conse ctetur adipisicing elit," sub_title_typography="Nunito Sans|600|600|normal"][gsf_space desktop="42" tablet="40" tablet_portrait="35" mobile_landscape="35" mobile="35"][gsf_partners items="6" columns_gutter="0" opacity="30" items_md="4" items_sm="3" items_xs="3" items_mb="2" partners="%5B%7B%22image%22%3A%22523%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22524%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22525%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22526%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22527%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22528%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%5D"][gsf_space desktop="70" tablet="60" tablet_portrait="55" mobile_landscape="50" mobile="45"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Testimonials 04';
        $template['image_path'] = 'testimonials-04';
        $template['custom_class'] = 'testimonials';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542332535105{background-color: #f4f3ec !important;}"][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_space desktop="60" tablet="55" tablet_portrait="55" mobile_landscape="50" mobile="50"][gsf_heading layout_style="style-3" title="UmVhZCUyMFJldmlld3MlMjBieSUyME15JTIwUmVhZGVycw==" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.4" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="TESTIMONIALS" css=".vc_custom_1542332731886{margin-bottom: 38px !important;padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-10.png?id=353) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column][gsf_testimonials layout_style="style-03" columns_gutter="70" content_line_height="2|em" space_between="46|40||35|30" testimonial_use_theme_font="" values="%5B%7B%22author_name%22%3A%22Vladimir%20Nabokov%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22%5C%22%20Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%5C%22%20%22%2C%22author_avatar%22%3A%22354%22%7D%2C%7B%22author_name%22%3A%22Savanna%20Walker%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22%5C%22%20It%20was%20a%20dark%20night%2C%20with%20only%20occasional%20scattered%20lights%2C%20glittering%20like%20stars%20on%20the%20plain.%20It%20flashed%20upon%20me%20suddenly%3A%20they%20were%20going%20to%20shoot%20me!%5C%22%20%22%2C%22author_avatar%22%3A%22355%22%7D%2C%7B%22author_name%22%3A%22Savanna%20Walker%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22%5C%22%20Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%5C%22%20%22%2C%22author_avatar%22%3A%22354%22%7D%5D" nav="on" nav_position="nav-center" nav_hover_style="nav-hover-bg" nav_hover_scheme="hover-light" columns="2" columns_md="2" columns_sm="1" columns_xs="1" columns_mb="1" content_typography="Libre Baskerville|italic|400|italic"][gsf_space desktop="127" tablet="105" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Contact Info';
        $template['image_path'] = 'contact-info';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row content_width="full-desktop" content_placement="middle" el_class="lg-pd-left-right-0" css=".vc_custom_1542765879792{padding-right: 85px !important;padding-left: 85px !important;}"][vc_column][gsf_space desktop="110" tablet="30" tablet_portrait="30" mobile_landscape="30" mobile="30"][/vc_column][vc_column el_class="mg-bottom-30" offset="vc_col-lg-6"][vc_row_inner][vc_column_inner el_class="sm-mg-bottom-30" width="1/2"][gsf_banner hover_effect="flash-effect" image="499"][/gsf_banner][/vc_column_inner][vc_column_inner width="1/2"][gsf_banner hover_effect="flash-effect" image="500"][/gsf_banner][/vc_column_inner][/vc_row_inner][/vc_column][vc_column el_class="lg-col-pd-left-right-15,mg-bottom-30" css=".vc_custom_1545877581600{padding-left: 100px !important;}" offset="vc_col-lg-6"][vc_column_text]</p>
<p class="fs-15 mg-bottom-45 sm-mg-bottom-25" style="max-width: 370px;">Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit estibulum issim Lorem ipsum dolor sit amet, AKON lsicn íoifa lkoix consectetur cing elit.</p>
<p class="contact-info-title">ADDRESS</p>
<p class="contact-info-content">1800 Abbot Kinney Blvd. Unit D &amp; E Venice</p>
<p class="contact-info-title">PHONE</p>
<p class="contact-info-content">Mobile: (+88) - 1990 - 6886<br />
Hotline: 1800 - 1102</p>
<p class="contact-info-title">EMAIL</p>
<p class="contact-info-content">contact@auteur.com</p>
<p>[/vc_column_text][/vc_column][vc_column][gsf_space desktop="128" tablet="75" tablet_portrait="60" mobile_landscape="50" mobile="40"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Welcom to Auteur 02';
        $template['image_path'] = 'welcom-to-auteur-02';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542707844429{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background_18.jpg?id=497) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_space desktop="110" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][vc_single_image image="248" img_size="full" alignment="center" css=".vc_custom_1544405208297{margin-bottom: 37px !important;}"][gsf_heading layout_style="style-4" space_between="33|px" title="V2VsY29tJTIwdG8lMjBBdXRldXI=" title_color="#333333" title_line_height="1.29|em" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="A MONTHLY BOOKS REVIEW PUBLICATION" css=".vc_custom_1544405232433{margin-bottom: 52px !important;}"][vc_column_text]</p>
<p class="mg-bottom-55 sm-mg-bottom-25">Imagine two men facing each other, pointing past one another. One is pointing at a tornado that is coming, and the other at a raging fire headed towards them. Each sees their own truth and is angry at the sight of the other’s hand. Each feels that the other’s hand is “wrong.” This may seem silly, but replace the tornado and fire with any modern issues, and the hands with words, and this scene describes how we often try to communicate.</p>
<p class="primary-font fw-bold heading-color mg-bottom-55 sm-mg-bottom-25" style="font-size: 19px; line-height: 1.58;"><img class="size-full wp-image-715 alignleft" style="margin-right: 12px; margin-top: 0;" src="https://auteur.g5plus.net/wp-content/uploads/2018/12/quote.jpg" alt="" width="86" height="62" />We point past each other with our words, arguing as though we are looking at the same facts and experiences.</p>
<p class="">We want to prove our words are the right ones, instead of learning to look at what the other’s words are pointing at. Words are seductive, and for all their undeniable usefulness, they also can lead us away from understanding when we focus on them, when we make them more important than the truth they are meant to point at.</p>
<p>[/vc_column_text][gsf_space desktop="65" tablet="60" tablet_portrait="55" mobile_landscape="50" mobile="50"][/vc_column][vc_column][vc_row_inner css=".vc_custom_1542707637200{margin-right: 0px !important;margin-left: 0px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-19.jpg?id=494) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner][gsf_space desktop="240" tablet="200" tablet_portrait="160" mobile_landscape="120" mobile="100"][gsf_video link="https://www.youtube.com/watch?v=eH2WNtL5ong" icon_bg_color="#ffffff" icon_color="#ffffff" icon_bg_hover_color="#e4573d" icon_hover_color="#ffffff"][gsf_space desktop="240" tablet="200" tablet_portrait="160" mobile_landscape="120" mobile="100"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'The Bookshop Events';
        $template['image_path'] = 'the-bookshop-events';
        $template['custom_class'] = 'events';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542704966667{background-color: #f4f3ec !important;}"][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="65" tablet="60" tablet_portrait="55" mobile_landscape="50" mobile="45"][gsf_heading layout_style="style-3" title="VGhlJTIwQm9va3Nob3AlMjBFdmVudHM=" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.11" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="UPCOMING EVENTS" css=".vc_custom_1542704690531{padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-12.png?id=417) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][gsf_space desktop="55" tablet="45" tablet_portrait="40" mobile_landscape="40" mobile="35"][/vc_column][vc_column][gsf_events image_size="553x300" items_per_page="4" event_columns_gutter="70" is_slider="on" nav="on" nav_position="nav-center" nav_hover_style="nav-hover-bg" nav_hover_scheme="hover-light" autoplay="on" event_animation="" columns="2" columns_md="2" columns_sm="2" columns_xs="1" columns_mb="1" el_class="nav-center-outer"][gsf_space desktop="110" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_heading layout_style="style-4" space_between="16|px" title="U3RheSUyMEluJTIwVG91Y2glMjB3aXRoJTIwT3VyJTIwVXBkYXRlcw==" title_color="#333333" title_font_size="34||30|28|28" title_line_height="1.11" sub_title_font_size="14" sub_title_letter_spacing="0|px" sub_title_color="disable-color" sub_title_use_theme_fonts="" sub_title="Newsletter to get in touch" sub_title_typography="Nunito Sans|600|600|normal"][gsf_space desktop="50" tablet="45" tablet_portrait="40" mobile_landscape="40" mobile="35"][/vc_column][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_mail_chimp layout_style="style-03" css=".vc_custom_1542705046058{margin-right: 60px !important;margin-left: 60px !important;}"][gsf_space desktop="111" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Our Newest Arrivals';
        $template['image_path'] = 'our-newest-arrivals';
        $template['custom_class'] = 'products';
        $template['content'] = <<<CONTENT
<p>[vc_row equal_height="yes" content_placement="middle"][vc_column][gsf_space desktop="87" tablet="70" tablet_portrait="65" mobile_landscape="60" mobile="60"][gsf_heading layout_style="style-3" title="T3VyJTIwTmV3ZXN0JTIwQXJyaXZhbHM=" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.11" sub_title_font_size="18" css=".vc_custom_1542704489139{margin-bottom: 35px !important;}"][vc_row_inner equal_height="yes" content_placement="middle" el_class="custom-product-nav-position,cate-filter-center,row"][vc_column_inner][/vc_column_inner][vc_column_inner el_class="order-lg-2" offset="vc_col-md-8"][gsf_products show_category_filter="on" cate_filter_align="cate-filter-center" products_per_page="8" columns="4" columns_md="3" columns_sm="2" columns_xs="2" columns_mb="1"][/vc_column_inner][vc_column_inner el_class="bg-clip-content,order-lg-1,md-mg-top-30" width="2/3" css=".vc_custom_1545876952064{background-color: #e2d9d4 !important;}" offset="vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-2"][gsf_heading layout_style="style-4" space_between="15|px" title="JTNDc3BhbiUyMGNsYXNzJTNEJTIyZnMtMzQlMjB0ZXh0LWl0YWxpYyUyMGhlYWRpbmctY29sb3IlMjBmdy1ub3JtYWwlMjIlM0VHZXQlMjBFeHRyYSUzQyUyRnNwYW4lM0UlM0NiciUyRiUzRSUwQVNhbGUlMjAtMjUlMjUlMjA=" title_color="#e4573d" title_font_size="48||40|34|30" title_line_height="1.30|em" sub_title_font_size="16" sub_title_letter_spacing="5px" sub_title_color="heading-color" title_use_theme_fonts="" sub_title_use_theme_fonts="" title_typography="Libre Baskerville|700|700|normal" sub_title="ON ORDER OVER $100" css=".vc_custom_1545814421607{margin-top: 30px !important;margin-bottom: 20px !important;}"][vc_single_image image="481" img_size="395x300" alignment="center"][gsf_button title="VIEW MORE" color="white" align="center" icon_font="fal fa-angle-double-right" icon_align="right" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|" css=".vc_custom_1542704563518{margin-bottom: 30px !important;}"][/vc_column_inner][/vc_row_inner][gsf_space desktop="140" tablet="110" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Author Info';
        $template['image_path'] = 'author-info';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row content_placement="middle" css=".vc_custom_1542703029948{background-color: #f4f3ec !important;}"][vc_column][gsf_space desktop="131" tablet="110" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][vc_column el_class="md-mg-bottom-50" width="1/2" offset="vc_col-md-4"][gsf_heading layout_style="style-3" text_align="text-left justify-content-start" title="QmVzdCUyMEF1dGhvciUwQW9mJTIwVGhlJTIwTW9udGg=" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.2" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="IN AUGUST" css=".vc_custom_1542702807135{margin-bottom: 30px !important;}"][gsf_partners items="3" opacity="100" items_md="3" items_sm="3" items_xs="3" items_mb="2" partners="%5B%7B%22image%22%3A%22235%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22236%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22294%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%5D"][gsf_button title="VIEW HER BOOK" color="accent" icon_font="fal fa-angle-double-right" icon_align="right" link="url:%23|||"][/vc_column][vc_column offset="vc_col-md-8"][vc_row_inner content_placement="middle" css=".vc_custom_1542703211809{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-17.png?id=474) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner el_class="sm-mg-bottom-50" width="1/2"][vc_single_image image="311" img_size="300x370" alignment="center" el_class="md-text-left"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]</p>
<p class="fs-24 text-italic heading-color primary-font" style="line-height: 2;">" My books are marked down because most of them are marked with a on the edge by publishers."</p>
<h5 class="author-name text-uppercase mg-top-0 pd-top-15 mg-bottom-15 fw-bold">Savanna Walker</h5>
<p>[/vc_column_text][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJnZi1zb2NpYWwtbmV0d29ya3MlMjBob3Zlci1saWdodCUyMiUzRSUwQSUzQ3VsJTIwY2xhc3MlM0QlMjJnZi1zb2NpYWwtaWNvbiUyMHNvY2lhbC1ndXR0ZXItMTAlMjBnZi1pbmxpbmUlMjBzb2NpYWwtaWNvbi1jaXJjbGUtb3V0bGluZSUyMiUzRSUwQSUyMCUyMCUyMCUyMCUzQ2xpJTIwY2xhc3MlM0QlMjJzb2NpYWwtZmFjZWJvb2slMjIlM0UlM0NhJTIwY2xhc3MlM0QlMjJ0cmFuc2l0aW9uMDMlMjIlMjB0aXRsZSUzRCUyMkZhY2Vib29rJTIyJTIwaHJlZiUzRCUyMiUyMyUyMiUzRSUzQ2klMjBjbGFzcyUzRCUyMmZhYiUyMGZhLWZhY2Vib29rLWYlMjIlM0UlM0MlMkZpJTNFRmFjZWJvb2slM0MlMkZhJTNFJTNDJTJGbGklM0UlMEElMjAlMjAlMjAlMjAlM0NsaSUyMGNsYXNzJTNEJTIyc29jaWFsLXR3aXR0ZXIlMjIlM0UlM0NhJTIwY2xhc3MlM0QlMjJ0cmFuc2l0aW9uMDMlMjIlMjB0aXRsZSUzRCUyMlR3aXR0ZXIlMjIlMjBocmVmJTNEJTIyJTIzJTIyJTNFJTNDaSUyMGNsYXNzJTNEJTIyZmFiJTIwZmEtdHdpdHRlciUyMiUzRSUzQyUyRmklM0VUd2l0dGVyJTNDJTJGYSUzRSUzQyUyRmxpJTNFJTBBJTIwJTIwJTIwJTIwJTNDbGklMjBjbGFzcyUzRCUyMnNvY2lhbC1waW50ZXJlc3QlMjIlM0UlM0NhJTIwY2xhc3MlM0QlMjJ0cmFuc2l0aW9uMDMlMjIlMjB0aXRsZSUzRCUyMlBpbnRlcmVzdCUyMiUyMGhyZWYlM0QlMjIlMjMlMjIlM0UlM0NpJTIwY2xhc3MlM0QlMjJmYWIlMjBmYS1waW50ZXJlc3QlMjIlM0UlM0MlMkZpJTNFUGludGVyZXN0JTNDJTJGYSUzRSUzQyUyRmxpJTNFJTBBJTIwJTIwJTIwJTIwJTNDbGklMjBjbGFzcyUzRCUyMnNvY2lhbC1kcmliYmJsZSUyMiUzRSUzQ2ElMjBjbGFzcyUzRCUyMnRyYW5zaXRpb24wMyUyMiUyMHRpdGxlJTNEJTIyRHJpYmJibGUlMjIlMjBocmVmJTNEJTIyJTIzJTIyJTNFJTNDaSUyMGNsYXNzJTNEJTIyZmFiJTIwZmEtZHJpYmJibGUlMjIlM0UlM0MlMkZpJTNFRHJpYmJibGUlM0MlMkZhJTNFJTNDJTJGbGklM0UlMEElM0MlMkZ1bCUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][/vc_row_inner][/vc_column][vc_column][gsf_space desktop="123" tablet="100" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Ads Block';
        $template['image_path'] = 'ads-block';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row color_skin="skin-dark" parallax="content-moving" parallax_image="462" bg_overlay_mode="color" bg_overlay_color="rgba(51,51,51,0.4)"][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="156" tablet="125" tablet_portrait="100" mobile_landscape="80" mobile="70"][gsf_heading layout_style="style-3" title_color="#ffffff" title_font_size="48||40|34|30" title_line_height="1.11" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_color="heading-color" title_use_theme_fonts="" sub_title_use_theme_fonts="" el_class="heading-border-bottom,border-single" sub_title="WHAT'S HOT IN AUGUST"][vc_column_text el_class="text-center"]</p>
<h2 class="mg-bottom-10 fs-48 sm-fs-34" style="margin-top: 30px;"><span style="border-bottom: 1px solid #fff; color: #fff;">Get <span class="fw-bold">-30%</span> purchase on</span></h2>
<h2 class="mg-bottom-0 mg-top-0 fs-48 sm-fs-34"><span style="border-bottom: 1px solid #fff; color: #fff;">order over $299.00</span></h2>
<p>[/vc_column_text][gsf_space desktop="70" tablet="60" tablet_portrait="55" mobile_landscape="50" mobile="50"][gsf_button title="EXPLORE NOW" color="accent" align="center" icon_font="fal fa-angle-double-right" icon_align="right" link="url:%23|||"][gsf_space desktop="155" tablet="125" tablet_portrait="100" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Peoples Choice';
        $template['image_path'] = 'peoples-choice';
        $template['custom_class'] = 'products';
        $template['content'] = <<<CONTENT
[vc_row][vc_column][gsf_space desktop="115" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][gsf_heading layout_style="style-3" text_align="text-left justify-content-start" sub_title_font_size="18" sub_title_use_theme_fonts="" el_class="mg-bottom-20" sub_title="PEOPLE'S CHOICE"][vc_row_inner el_class="row"][vc_column_inner el_class="order-lg-2"][gsf_product_tabs products_per_page="8" columns="4" columns_md="3" columns_sm="2" columns_xs="2" columns_mb="1" el_class="custom-tabs-underline" product_tabs="%5B%7B%22tab_title%22%3A%22Bestseller%20Books%22%2C%22show%22%3A%22best-selling%22%2C%22category%22%3A%5B%22biography%22%2C%22drama%22%5D%2C%22orderby%22%3A%22date%22%2C%22order%22%3A%22DESC%22%7D%2C%7B%22tab_title%22%3A%22Sale%22%2C%22show%22%3A%22sale%22%2C%22orderby%22%3A%22date%22%2C%22order%22%3A%22DESC%22%7D%2C%7B%22tab_title%22%3A%22Featured%20Books%22%2C%22show%22%3A%22featured%22%2C%22orderby%22%3A%22date%22%2C%22order%22%3A%22DESC%22%7D%5D"][gsf_space desktop="0" tablet="0" tablet_portrait="40" mobile_landscape="40" mobile="30"][/vc_column_inner][vc_column_inner el_class="order-lg-1"][gsf_button title="VIEW MORE" style="link" color="accent" align="right" icon_font="fal fa-chevron-double-right" icon_align="right" el_class="md-custom-button-position,md-text-center" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop%2F|title:Shop|target:%20_blank|"][/vc_column_inner][/vc_row_inner][gsf_space desktop="80" tablet="60" tablet_portrait="70" mobile_landscape="60" mobile="60"][/vc_column][/vc_row]
CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Banners';
        $template['image_path'] = 'banners';
        $template['custom_class'] = 'banners';
        $template['content'] = <<<CONTENT
<p>[vc_row content_width="full-desktop" equal_height="yes" el_class="lg-pd-left-right-0,row" css=".vc_custom_1542697869976{padding-right: 70px !important;padding-left: 70px !important;}"][vc_column el_class="responsive-banner-01" offset="vc_col-lg-6" css=".vc_custom_1542698051967{margin-bottom: 30px !important;}"][vc_row_inner content_placement="middle" css=".vc_custom_1542696653419{margin-right: 0px !important;margin-left: 0px !important;padding-right: 40px !important;padding-left: 35px !important;background-color: #f5ede6 !important;}"][vc_column_inner][gsf_space desktop="0" tablet="70" tablet_portrait="60" mobile_landscape="50" mobile="40"][/vc_column_inner][vc_column_inner width="1/3" offset="vc_col-lg-5"][vc_single_image image="433" img_size="260x202" alignment="center" css=".vc_custom_1542681316405{margin-bottom: 15px !important;}"][vc_single_image image="183" img_size="200x51" alignment="center"][/vc_column_inner][vc_column_inner width="2/3" offset="vc_col-lg-7"][gsf_heading text_align="text-left justify-content-start" title="RmluZCUyMEJvb2tzJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIydGV4dC1pdGFsaWMlMjBmdy1ub3JtYWwlMjIlM0VGb3IlMjBBbGwlMjBBZ2VzJTNDJTJGc3BhbiUzRQ==" title_color="#333333" title_font_size="40||34|30|28" title_line_height="1.4" sub_title_font_size="18" title_use_theme_fonts="" title_typography="Libre Baskerville|700|700|normal" css=".vc_custom_1542681176908{margin-bottom: 27px !important;}"][vc_column_text]</p>
<p class="fs-15" style="color: #7e7e7e; line-height: 1.87;">Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim Lorem ipsum dolor sit amet, consectetur cing elit scipit sagittis leo sit met condi.</p>
<p class="accent-color" style="letter-spacing: 1px;"><a class="btn btn-link btn-accent btn-md" href="https://auteur.g5plus.net/shop">PURCHASE <i class="fal fa-chevron-double-right"></i></a></p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner][gsf_space desktop="0" tablet="50" tablet_portrait="45" mobile_landscape="40" mobile="40"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-lg-3" css=".vc_custom_1542698059175{margin-bottom: 30px !important;}"][gsf_banner layout_style="style-02" image="440"]</p>
<p><span class="banner-title-01">Summer sale</span></p>
<p class="banner-purchase-01" style="letter-spacing: 1px;"><a class="btn btn-white btn-link btn-md" href="https://auteur.g5plus.net/shop">PURCHASE <i class="fal fa-chevron-double-right"></i></a></p>
<p>[/gsf_banner][/vc_column][vc_column width="1/2" offset="vc_col-lg-3" css=".vc_custom_1542698067775{margin-bottom: 30px !important;}"][gsf_banner layout_style="style-02" image="441"]</p>
<div style="position: absolute; bottom: 40px; left: 30px;">
<h3 class="mg-top-0 fw-bold" style="margin-bottom: 12px; line-height: 40px;">Cook book<br />
<span class="text-italic fs-24 fw-normal">of the month</span></h3>
<p class="accent-color" style="letter-spacing: 1px;"><a class="btn btn-accent btn-link btn-md" href="https://auteur.g5plus.net/shop">PURCHASE <i class="fal fa-chevron-double-right"></i></a></p>
</div>
<p>[/gsf_banner][/vc_column][vc_column el_class="order-xl-4" offset="vc_col-lg-6"][gsf_banner layout_style="style-02" image="443"]</p>
<div style="position: absolute; bottom: 40px; left: 52px;">
<h2 class="mg-top-0 fw-bold" style="margin-bottom: 12px; line-height: 1.4;">Henry<br />
<span class="text-italic fw-normal">&amp; the good dog</span></h2>
<p style="letter-spacing: 1px;"><a class="btn btn-accent btn-link btn-md" href="https://auteur.g5plus.net/shop">PURCHASE <i class="fal fa-chevron-double-right"></i></a></p>
</div>
<p>[/gsf_banner][gsf_space desktop="0" tablet="30" tablet_portrait="30" mobile_landscape="30" mobile="30"][/vc_column][vc_column el_class="sm-mg-bottom-30,order-xl-3" width="1/2" offset="vc_col-lg-3"][gsf_banner layout_style="style-02" image="442"]</p>
<div style="position: absolute; top: 50px; left: 50px;">
<h3 class="mg-top-0 fw-bold" style="margin-bottom: 12px; line-height: 40px;">Feature book<br />
<span class="text-italic fs-24 fw-normal">of the month</span></h3>
<p style="letter-spacing: 1px;"><a class="btn btn-accent btn-link btn-md" href="https://auteur.g5plus.net/shop">PURCHASE <i class="fal fa-chevron-double-right"></i></a></p>
</div>
<p>[/gsf_banner][/vc_column][vc_column el_class="order-xl-5" width="1/2" offset="vc_col-lg-3"][gsf_banner layout_style="style-02" image="444"]</p>
<div style="position: absolute; bottom: 40px; left: 30px;">
<h3 class="mg-top-0 fw-bold" style="margin-bottom: 12px; line-height: 40px;">Best seller<br />
Books</h3>
<p class="accent-color" style="letter-spacing: 1px;"><a class="btn btn-accent btn-link btn-md" href="https://auteur.g5plus.net/shop">PURCHASE <i class="fal fa-chevron-double-right"></i></a></p>
</div>
<p>[/gsf_banner][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Great Price Plan for you';
        $template['image_path'] = 'great-price-plan-for-you';
        $template['custom_class'] = 'pricings';
        $template['content'] = <<<CONTENT
<p>[vc_row color_skin="skin-light" css=".vc_custom_1542617317610{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-15.jpg?id=421) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][gsf_space desktop="120" tablet="100" tablet_portrait="90" mobile_landscape="80" mobile="70"][gsf_heading layout_style="style-3" title="R3JlYXQlMjBQcmljZSUyMFBsYW4lMjBmb3IlMjB5b3U=" title_color="#ffffff" title_font_size="48||40|34|30" title_line_height="1.4" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="MY PRICES"][gsf_space desktop="48" tablet="45" tablet_portrait="40" mobile_landscape="35" mobile="35"][gsf_slider_container columns="3" columns_md="2" columns_sm="2" columns_xs="1" columns_mb="1"][gsf_pricing_tables min_height="474" values="%5B%7B%22features%22%3A%2215Gb%20space%22%7D%2C%7B%22features%22%3A%22Power%20And%20Predictive%20Dialing%22%7D%2C%7B%22features%22%3A%22Quality%20%26%20Customer%20Experience%22%7D%5D" name="BASIC PLAN" price="19" currency_code="$" text_time="month" button_text="GET STATED" link="url:%23|title:Get%20Stated||"][gsf_pricing_tables min_height="474" values="%5B%7B%22features%22%3A%2215Gb%20space%22%7D%2C%7B%22features%22%3A%22Power%20And%20Predictive%20Dialing%22%7D%2C%7B%22features%22%3A%22Quality%20%26%20Customer%20Experience%22%7D%2C%7B%22features%22%3A%2224%2F7%20phone%20and%20email%20support%22%7D%5D" is_featured="true" name="PROFESSIONAL PLAN" price="57" currency_code="$" text_time="month" featured_text="POPULAR CHOICE" button_text="GET STATED" link="url:%23|title:Get%20Stated||"][gsf_pricing_tables min_height="474" values="%5B%7B%22features%22%3A%2215Gb%20space%22%7D%2C%7B%22features%22%3A%22Power%20And%20Predictive%20Dialing%22%7D%2C%7B%22features%22%3A%22Quality%20%26%20Customer%20Experience%22%7D%2C%7B%22features%22%3A%2224%2F7%20phone%20and%20email%20support%22%7D%5D" name="ADVANCE PLAN" price="39" currency_code="$" text_time="month" button_text="GET STATED" link="url:%23|title:GET%20STATED||"][/gsf_slider_container][gsf_space desktop="131" tablet="110" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Testimonials 03';
        $template['image_path'] = 'testimonials-03';
        $template['custom_class'] = 'testimonials';
        $template['content'] = <<<CONTENT
<p>[vc_row color_skin="skin-dark" css=".vc_custom_1542616192164{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-14.jpg?id=419) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][gsf_space desktop="144" tablet="120" tablet_portrait="100" mobile_landscape="80" mobile="70"][gsf_testimonials layout_style="style-02" quote_image="263" content_line_height="2|em" space_between="75|60|50|40|30" testimonial_use_theme_font="" values="%5B%7B%22author_name%22%3A%22Savanna%20Walker%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%20%22%7D%2C%7B%22author_name%22%3A%22Vladimir%20Nabokov%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22It%20was%20a%20dark%20night%2C%20with%20only%20occasional%20scattered%20lights%2C%20glittering%20like%20stars%20on%20the%20plain.%20It%20flashed%20upon%20me%20suddenly%3A%20they%20were%20going%20to%20shoot%20me!%22%7D%5D" nav="on" nav_position="nav-center" nav_hover_style="nav-hover-bg" nav_hover_scheme="hover-light" autoplay="on" content_typography="Libre Baskerville|italic|400|italic"][gsf_space desktop="155" tablet="120" tablet_portrait="100" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Read My Books';
        $template['image_path'] = 'read-my-books-2';
        $template['custom_class'] = 'events';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_heading layout_style="style-3" title="VXBjb21pbmclMjBFdmVudHM=" title_color="#333333" title_font_size="48||40|34|30" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="IN AUGUST" css=".vc_custom_1545720548876{margin-top: 60px !important;margin-bottom: 60px !important;padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-12.png?id=417) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column][gsf_events event_layout="style-02" items_per_page="3" event_columns_gutter="50" event_animation="" columns="3" columns_md="2" columns_sm="2" columns_xs="1" columns_mb="1" el_class="event-line-between"][gsf_space desktop="73" tablet="65" tablet_portrait="60" mobile_landscape="55" mobile="50"][gsf_button title="VIEW ALL" style="outline" color="gray" align="center" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fevents|title:Events|target:%20_blank|"][gsf_space desktop="130" tablet="110" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Read My Books';
        $template['image_path'] = 'read-my-books';
        $template['custom_class'] = 'products';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542614572733{background-color: #f4f3ec !important;}"][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="65" tablet="60" tablet_portrait="55" mobile_landscape="50" mobile="50"][gsf_heading layout_style="style-3" title="UmVhZCUyME15JTIwQm9va3M=" title_color="#333333" title_font_size="48||40|34|30" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="BOOK STORE" css=".vc_custom_1542614599519{padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-04.png?id=268) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row][vc_row content_width="full-desktop" el_class="lg-pd-left-right-0" css=".vc_custom_1542614577694{padding-right: 85px !important;padding-left: 85px !important;background-color: #f4f3ec !important;}"][vc_column][gsf_space desktop="55" tablet="50" tablet_portrait="45" mobile_landscape="40" mobile="40"][gsf_products products_per_page="8" is_slider="on" columns="6" columns_md="4" columns_sm="3" columns_xs="2" columns_mb="1"][gsf_button title="VIEW MORE" style="outline" color="gray" align="center" el_class="mg-top-55,md-mg-top-40" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|"][gsf_space desktop="100" tablet="80" tablet_portrait="70" mobile_landscape="60" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Author Main Info';
        $template['image_path'] = 'author-main-info';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row color_skin="skin-dark" css=".vc_custom_1542610781434{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-02.png?id=395) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][gsf_space desktop="640" tablet="500" tablet_portrait="400" mobile_landscape="320" mobile="250"][gsf_heading title="Um9iZXJ0JTIwRnJhemllcg==" title_color="#ffffff" title_font_size="100|80|60|48|40" sub_title_font_size="18" el_class="heading-border-bottom,mg-bottom-25"][vc_column_text el_class="mg-bottom-50"]</p>
<ul class="author-jobs">
<li>Author</li>
<li>Journalist</li>
<li>Biographer</li>
<li>Editor</li>
</ul>
<p>[/vc_column_text][/vc_column][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_partners items="4" is_slider="on" opacity="100" items_md="4" items_sm="4" items_xs="3" items_mb="2" partners="%5B%7B%22image%22%3A%22234%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22235%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22236%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%2C%7B%22image%22%3A%22294%22%2C%22link%22%3A%22url%3A%2523%7C%7C%7C%22%7D%5D"][gsf_space desktop="104" tablet="80" tablet_portrait="70" mobile_landscape="60" mobile="60"][/vc_column][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][vc_column_text]</p>
<p><span class="gsf-dropcap-default primary-font dropcap-white fs-15">Auteur is a monthly book review publication distributed to 400,000 avid readers through subscribing bookstores and public libraries. Founded in 1988 and located in Nashville, ennessee, BookPage serves as a broad-based selection guide to the best new books published every month. Lorem ipsum dolor sit amet, consectetueradipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis Lorem ipsum dolor sit amet, consectetuer adipiscing elit. . Cum sociisnatoque penatibus et magnis</span></p>
<p>[/vc_column_text][gsf_space desktop="123" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][vc_column el_class="md-mg-bottom-40" offset="vc_col-md-4"][gsf_heading layout_style="style-3" text_align="text-left justify-content-start" title="VGhlJTIwZ3JlYXRlc3QlMjBvZiUyMHdyaXRlcg==" title_color="#ffffff" title_font_size="48||40|34|30" title_line_height="1.33|em" sub_title_font_size="18" sub_title_use_theme_fonts="" el_class="mg-top-40" sub_title="ABOUT ME" css=".vc_custom_1544148985089{margin-bottom: 21px !important;}"][vc_column_text css=".vc_custom_1542614167613{margin-bottom: 38px !important;}"]</p>
<p class="fs-15" style="max-width: 330px;">Lorem ipsum dolor sit amet, consectetu eradipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis Lorem ipsum dolor sit amet, consectetuer adipiscing elit. . Cum sociisnatoque penatibus et magnis</p>
<p>[/vc_column_text][gsf_button title="DOWNLOAD MY PROFILE" color="accent" icon_font="fal fa-cloud-download-alt" el_class="btn-hover-to-white" link="url:%23|title:Download%20My%20Profile||"][/vc_column][vc_column el_class="sm-mg-bottom-40" width="1/2" offset="vc_col-md-4"][vc_single_image image="407" img_size="370x570"][/vc_column][vc_column el_class="mg-top-55,md-mg-top-0" width="1/2" offset="vc_col-md-4"][vc_column_text]</p>
<div class="author-quote" style="border: 2px solid rgba(255,255,255,0.3); padding: 55px 15px 18px 15px;">
<p class="fs-24 text-italic text-center primary-font primary-color" style="line-height: 2;">" Auteur is a monthly book review publication distributed to 400,000 avid readers through subscribing bookstores &amp; public libraries."</p>
<p><img class="aligncenter wp-image-408" src="https://auteur.g5plus.net/wp-content/uploads/2018/11/single-image-12-300x203.png" alt="" width="106" height="72" /></div>
<p>[/vc_column_text][/vc_column][vc_column][gsf_space desktop="132" tablet="110" tablet_portrait="90" mobile_landscape="80" mobile="70"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Add to Cart';
        $template['image_path'] = 'add-to-cart';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column el_class="text-center"][gsf_space desktop="130" tablet="110" tablet_portrait="90" mobile_landscape="80" mobile="70"][gsf_heading layout_style="style-4" title="JTNDc3BhbiUyMGNsYXNzJTNEJTIyZnctYm9sZCUyMiUzRUhlbnJ5JTNDJTJGc3BhbiUzRSUyMCUyNiUyMCUzQ3NwYW4lMjBjbGFzcyUzRCUyMnRleHQtaXRhbGljJTIyJTNFVGhlJTIwR29vZCUyMERvZyUzQyUyRnNwYW4lM0U=" title_color="#333333" title_font_size="64|56|48|40|34" title_line_height="1.13|em" sub_title_font_size="18" sub_title_letter_spacing="0|px" sub_title_color="text-color" title_use_theme_fonts="" sub_title_use_theme_fonts="" title_font_size_lg="56" title_font_size_md="48" title_font_size_sm="40" title_font_size_mb="34" sub_title="By SAVANNA WALKER" title_typography="Libre Baskerville|regular|400|normal" sub_title_typography="Libre Baskerville|regular|400|normal" css=".vc_custom_1544059107787{margin-bottom: 50px !important;}"][gsf_button title="ADD TO CART" color="accent" icon_font="fal fa-shopping-cart" el_class="dib,sm-mg-bottom-20" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop%2F|title:Add%20to%20Cart|target:%20_blank|" css=".vc_custom_1545895133341{margin-right: 7.5px !important;margin-left: 7.5px !important;}"][gsf_button title="VIEW BOOK" style="outline" color="gray" icon_font="fas fa-eye" el_class="dib,sm-mg-bottom-20" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop%2F|title:Shop|target:%20_blank|" css=".vc_custom_1545895140489{margin-right: 7.5px !important;margin-left: 7.5px !important;}"][gsf_space desktop="95" tablet="80" tablet_portrait="70" mobile_landscape="40" mobile="40"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Like This Series Books?';
        $template['image_path'] = 'like-this-series-books';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row content_placement="middle" css=".vc_custom_1544058718094{padding-top: 20px !important;padding-bottom: 20px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-07.png?id=370) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column el_class="md-pd-top-50,md-pd-bottom-50" width="1/2" offset="vc_col-md-8"][vc_row_inner content_placement="middle"][vc_column_inner el_class="md-mg-bottom-50" offset="vc_col-lg-4 vc_col-md-6"][gsf_heading layout_style="style-3" text_align="text-left justify-content-start" title="TGlrZSUyMFRoaXMlMjBTZXJpZXMlMjBCb29rcyUzRg==" title_color="#ffffff" title_font_size="34||30||28" title_line_height="1.65|em" sub_title_font_size="18"][/vc_column_inner][vc_column_inner offset="vc_col-lg-offset-1 vc_col-md-6"][gsf_social_networks social_networks="social-twitter,social-facebook,social-instagram,social-pinterest,social-youTube" social_shape="circle-outline" el_class="text-center,hover-light,icon-color-white,md-text-left" css=".vc_custom_1545874370598{margin-bottom: 34px !important;}"][vc_raw_html]JTNDcCUyMGNsYXNzJTNEJTIyYWNjZW50LWNvbG9yJTIwdGV4dC11cHBlcmNhc2UlMjB0ZXh0LWNlbnRlciUyMG1kLXRleHQtbGVmdCUyMGZzLTEzJTIyJTIwc3R5bGUlM0QlMjJsZXR0ZXItc3BhY2luZyUzQSUyMDFweCUzQiUyMiUzRVNoYXJlJTIwbm93JTIwJTNDaSUyMGNsYXNzJTNEJTIyZmFzJTIwZmEtc2hhcmUtYWx0JTIyJTNFJTNDJTJGaSUzRSUzQyUyRnAlM0U=[/vc_raw_html][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-md-4"][vc_single_image image="368" img_size="full" alignment="center"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'You Might Like';
        $template['image_path'] = 'you-might-like';
        $template['custom_class'] = 'products';
        $template['content'] = <<<CONTENT
<p>[vc_row content_width="full-desktop" el_class="lg-pd-left-right-0" css=".vc_custom_1542355119317{padding-right: 85px !important;padding-left: 85px !important;background-color: #f4f3ec !important;}"][vc_column width="5/6" offset="vc_col-lg-offset-4 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="60" tablet="55" tablet_portrait="50" mobile_landscape="45" mobile="40"][gsf_heading layout_style="style-3" title="WW91JTIwTWlnaHQlMjBMaWtl" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.4" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="BOOK STORE" css=".vc_custom_1544058277885{padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-04.png?id=268) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][gsf_space desktop="55" tablet="50" tablet_portrait="45" mobile_landscape="40" mobile="40"][/vc_column][vc_column][gsf_products products_per_page="8" is_slider="on" columns="6" columns_md="4" columns_sm="3" columns_xs="2" columns_mb="1"][gsf_space desktop="50" tablet="45" tablet_portrait="45" mobile_landscape="40" mobile="40"][gsf_button title="VIEW MORE" style="outline" color="gray" align="center" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|"][gsf_space desktop="100" tablet="80" tablet_portrait="70" mobile_landscape="60" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Mailchimp 02';
        $template['image_path'] = 'mailchimp-02';
        $template['custom_class'] = 'mailchimp';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="110" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][gsf_heading layout_style="style-4" space_between="10|px" title="R2V0JTIwTm90aWZpZWQlMjBBYm91dCUyMFRoZSUyMFNlcmllcyUyMQ==" title_color="#333333" title_font_size="34||30||28" title_line_height="1.41|em" sub_title_font_size="14" sub_title_letter_spacing="0|px" sub_title_color="disable-color" sub_title_use_theme_fonts="" sub_title="Newsletter to get in touch" sub_title_typography="Nunito Sans|600|600|normal"][gsf_space desktop="55" tablet="50" tablet_portrait="45" mobile_landscape="45" mobile="40"][gsf_mail_chimp layout_style="style-03" el_class="md-pd-left-right-0" css=".vc_custom_1544058209297{margin-right: 50px !important;margin-left: 50px !important;}"][gsf_space desktop="120" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Video Intro';
        $template['image_path'] = 'video-intro';
        $template['custom_class'] = 'videos';
        $template['content'] = <<<CONTENT
<p>[vc_row][vc_column el_class="intro-column" width="5/6" offset="vc_col-sm-offset-1" css=".vc_custom_1542336800323{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-11.jpg?id=362) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][gsf_space desktop="220" tablet="200" tablet_portrait="180" mobile_landscape="160" mobile="140"][gsf_video video_style="fill" video_size="medium" link="https://www.youtube.com/watch?v=yXyJ4J8yY-A" icon_bg_color="#ffffff" icon_color="#333333" icon_bg_hover_color="#333333" icon_hover_color="#ffffff"][gsf_space desktop="220" tablet="200" tablet_portrait="180" mobile_landscape="160" mobile="140"][vc_column_text]</p>
<p class="primary-font heading-color"><span class="intro-title intro-title-left">watch a review</span><br />
<span class="intro-title intro-title-right">by John Little</span></p>
<p>[/vc_column_text][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Read Reviews by My Readers';
        $template['image_path'] = 'read-reviews-by-my-readers';
        $template['custom_class'] = 'testimonials';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542332535105{background-color: #f4f3ec !important;}"][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_space desktop="60" tablet="55" tablet_portrait="55" mobile_landscape="50" mobile="50"][gsf_heading layout_style="style-3" title="UmVhZCUyMFJldmlld3MlMjBieSUyME15JTIwUmVhZGVycw==" title_color="#333333" title_font_size="48||40|34|30" title_line_height="1.4" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" sub_title="TESTIMONIALS" css=".vc_custom_1542332731886{margin-bottom: 38px !important;padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-10.png?id=353) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column][gsf_testimonials layout_style="style-03" columns_gutter="70" content_line_height="2|em" space_between="35||||" testimonial_use_theme_font="" values="%5B%7B%22author_name%22%3A%22Vladimir%20Nabokov%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22%5C%22%20Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%5C%22%20%22%2C%22author_avatar%22%3A%22354%22%7D%2C%7B%22author_name%22%3A%22Savanna%20Walker%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22%5C%22%20It%20was%20a%20dark%20night%2C%20with%20only%20occasional%20scattered%20lights%2C%20glittering%20like%20stars%20on%20the%20plain.%20It%20flashed%20upon%20me%20suddenly%3A%20they%20were%20going%20to%20shoot%20me!%5C%22%20%22%2C%22author_avatar%22%3A%22355%22%7D%2C%7B%22author_name%22%3A%22Savanna%20Walker%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22%5C%22%20Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%5C%22%20%22%2C%22author_avatar%22%3A%22354%22%7D%5D" nav="on" nav_position="nav-center" nav_hover_style="nav-hover-bg" nav_hover_scheme="hover-light" columns="2" columns_md="2" columns_sm="1" columns_xs="1" columns_mb="1" content_typography="Libre Baskerville|italic|400|italic"][gsf_space desktop="385" tablet="350" tablet_portrait="320" mobile_landscape="300" mobile="300"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Experience First Pages';
        $template['image_path'] = 'experience-first-pages';
        $template['custom_class'] = 'accordions';
        $template['content'] = <<<CONTENT
<p>[vc_row el_class="md-clear-bg,bg-position-top-center" css=".vc_custom_1546570311874{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/12/background_09.jpg?id=655) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="5/6" offset="vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="75" tablet="60" tablet_portrait="40" mobile_landscape="30" mobile="30"][gsf_heading layout_style="style-3" title="RXhwZXJpZW5jZSUyMEZpcnN0JTIwUGFnZXMlM0NiciUyRiUzRSUyMCUzQ3NwYW4lMjBjbGFzcyUzRCUyMmFjY2VudC1jb2xvciUyMHRleHQtaXRhbGljJTIyJTNFRk9SJTIwRlJFRSUzQyUyRnNwYW4lM0U=" title_color="#333333" title_font_size="48|40|34|30|28" title_line_height="1.33|em" sub_title_font_size="18"][gsf_space desktop="95" tablet="80" tablet_portrait="70" mobile_landscape="60" mobile="50"][/vc_column][vc_column width="5/6" offset="vc_col-md-offset-5 vc_col-md-7 vc_col-sm-offset-1"][vc_tta_accordion style="underline" shape="square" color="grey" spacing="5" gap="35" c_position="right" active_section="1" no_fill="true" css=".vc_custom_1543915858724{margin-bottom: 60px !important;}"][vc_tta_section title="CHAPTER 01" tab_id="chapter-011546850638552"][vc_column_text el_class="fs-15"]Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qused do um dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...[/vc_column_text][/vc_tta_section][vc_tta_section title="CHAPTER 02" tab_id="chapter-021546850638552"][vc_column_text el_class="fs-15"]Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qused do um dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...[/vc_column_text][/vc_tta_section][vc_tta_section title="CHAPTER 03" tab_id="chapter-031546850638552"][vc_column_text el_class="fs-15"]Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qused do um dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...[/vc_column_text][/vc_tta_section][/vc_tta_accordion][gsf_button title="GET FREE STORY" color="accent" icon_font="fal fa-cloud-download-alt" el_class="dib,sm-mg-bottom-20" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|" css=".vc_custom_1545958471133{margin-right: 16px !important;}"][gsf_button title="VIEW BOOK" style="outline" color="gray" icon_font="fas fa-eye" el_class="dib,sm-mg-bottom-20" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|"][gsf_space desktop="120" tablet="100" tablet_portrait="90" mobile_landscape="60" mobile="50"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Product Singular 02';
        $template['image_path'] = 'product-singular-02';
        $template['custom_class'] = 'product-singular';
        $template['content'] = <<<CONTENT
<p>[vc_row el_class="md-clear-bg" css=".vc_custom_1545728464724{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/12/background-21.jpg?id=644) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column offset="vc_col-lg-5 vc_col-md-6"][gsf_space desktop="140" tablet="120" tablet_portrait="100" mobile_landscape="90" mobile="80"][gsf_product_singular featured_title="INTRODUCING" product_id="645"][gsf_space desktop="150" tablet="120" tablet_portrait="90" mobile_landscape="60" mobile="30"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'About the Author';
        $template['image_path'] = 'about-the-author';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row content_placement="middle" css=".vc_custom_1542271138542{background-color: #f4f3ec !important;}"][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_space desktop="85" tablet="75" tablet_portrait="65" mobile_landscape="60" mobile="55"][vc_single_image image="309" img_size="198x198" alignment="center" css=".vc_custom_1543907212075{margin-bottom: 46px !important;}"][vc_column_text]</p>
<p class="fs-24 primary-font text-italic heading-color text-center" style="line-height: 2;">"Henry &amp; The Good Dog" - A series of little books, intimate and grand, funny, searing and visionary.</p>
<p>[/vc_column_text][gsf_space desktop="94" tablet="75" tablet_portrait="65" mobile_landscape="55" mobile="50"][/vc_column][vc_column el_class="sm-mg-bottom-40" width="1/2" css=".vc_custom_1545894959742{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background_06.png?id=320) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_col-md-5"][vc_single_image image="311" img_size="370x470" alignment="right" css=".vc_custom_1542270934297{padding-bottom: 30px !important;}"][/vc_column][vc_column width="1/2" offset="vc_col-md-offset-1"][vc_column_text el_class="fs-15,mg-bottom-45"]</p>
<p style="color: #7e7e7e; margin-bottom: 29px;">Auteur is a monthly book review publication distributed to 400,000 avid readers through subscribing bookstores and public libraries. Founded in 1988 and located in Nashville, Tennessee, BookPage serves as a broad-based selection guide to the best new books published every month.</p>
<p style="color: #7e7e7e;">Founded in 1988 and located in Nashville, Tennessee, BookPage serves as a broad-based selection guide to the best new books published every month.</p>
<p>[/vc_column_text][vc_single_image image="318" img_size="133x90" css=".vc_custom_1542271125194{margin-bottom: 10px !important;}"][vc_column_text]</p>
<h5 class="mg-top-0 text-uppercase fw-bold" style="margin-bottom: 13px;">Savanna Walker</h5>
<p class="fs-15">/ Author</p>
<p>[/vc_column_text][/vc_column][vc_column][gsf_space desktop="120" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Introducing Book';
        $template['image_path'] = 'introducing-book';
        $template['custom_class'] = 'other';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1544058105337{background-color: #f4f3ec !important;}"][vc_column][gsf_space desktop="185" tablet="150" tablet_portrait="120" mobile_landscape="100" mobile="80"][gsf_heading layout_style="style-3" title="JTNDc3BhbiUyMGNsYXNzJTNEJTIyZnctYm9sZCUyMiUzRUhlbnJ5JTNDJTJGc3BhbiUzRSUyMCUyNiUyMCUzQ3NwYW4lMjBjbGFzcyUzRCUyMnRleHQtaXRhbGljJTIyJTNFVGhlJTIwR29vZCUyMERvZyUzQyUyRnNwYW4lM0U=" title_color="#333333" title_font_size="64|56|48|40|34" title_line_height="1.11" sub_title_font_size="18" sub_title_letter_spacing="2px" title_use_theme_fonts="" sub_title_use_theme_fonts="" title_font_size_lg="56" title_font_size_md="48" title_font_size_sm="40" title_font_size_mb="34" sub_title="THE SERIES FOR CHILDREN" title_typography="Libre Baskerville|regular|400|normal" sub_title_typography="Libre Baskerville|700|700|normal" css=".vc_custom_1542255412915{margin-bottom: 25px !important;}"][vc_column_text el_class="text-center" css=".vc_custom_1543907114979{margin-bottom: 40px !important;}"]</p>
<p class="primary-font fs-18">By SAVANNA WALKER</p>
<p>[/vc_column_text][/vc_column][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_partners items="4" is_slider="on" opacity="100" items_md="4" items_sm="4" items_xs="3" items_mb="2" partners="%5B%7B%22image%22%3A%22234%22%7D%2C%7B%22image%22%3A%22235%22%7D%2C%7B%22image%22%3A%22236%22%7D%2C%7B%22image%22%3A%22294%22%7D%5D" css=".vc_custom_1545894315392{padding-bottom: 16px !important;}"][gsf_button title="EXPLORE THE LIST" color="accent" align="center" icon_font="fal fa-book" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|"][gsf_space desktop="70" tablet="60" tablet_portrait="50" mobile_landscape="50" mobile="40"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Join the community';
        $template['image_path'] = 'join-the-community';
        $template['custom_class'] = 'mailchimp';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542182334972{background-color: #ffffff !important;}"][vc_column][vc_row_inner equal_height="yes" content_placement="middle" el_class="container" css=".vc_custom_1542182568365{border-top-width: 5px !important;border-right-width: 5px !important;border-bottom-width: 5px !important;border-left-width: 5px !important;border-left-color: #f8f8f8 !important;border-left-style: solid !important;border-right-color: #f8f8f8 !important;border-right-style: solid !important;border-top-color: #f8f8f8 !important;border-top-style: solid !important;border-bottom-color: #f8f8f8 !important;border-bottom-style: solid !important;}"][vc_column_inner][gsf_space desktop="45" tablet="40" tablet_portrait="40" mobile_landscape="40" mobile="40"][/vc_column_inner][vc_column_inner el_class="mg-bottom-50" width="2/3" offset="vc_col-lg-offset-1 vc_col-lg-5 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-2"][gsf_heading layout_style="style-4" space_between="16|px" title="Sm9pbiUyMHRoZSUyMGNvbW11bml0eQ==" title_color="#333333" title_font_size="34||30||28" title_line_height="1.11" sub_title_font_size="14" sub_title_letter_spacing="0|px" sub_title_color="disable-color" sub_title_use_theme_fonts="" title_font_size_md="40" title_font_size_sm="34" title_font_size_mb="28" sub_title="Newsletter to get in touch" sub_title_typography="Nunito Sans|600|600|normal"][gsf_space desktop="55" tablet="50" tablet_portrait="45" mobile_landscape="45" mobile="40"][gsf_mail_chimp layout_style="style-03"][/vc_column_inner][vc_column_inner el_class="mg-bottom-50" width="1/3" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-md-2 vc_col-sm-offset-2"][vc_single_image image="275" img_size="102x102" el_class="md-text-center"][/vc_column_inner][vc_column_inner el_class="mg-bottom-50" width="1/3" offset="vc_col-md-3"][vc_single_image image="276" img_size="full" el_class="md-text-center"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes"][vc_column_inner css=".vc_custom_1542182792556{padding-top: 0px !important;}"][gsf_space desktop="80" tablet="70" tablet_portrait="60" mobile_landscape="50" mobile="50"][/vc_column_inner][vc_column_inner el_class="col-mb-12,md-mg-bottom-50" width="1/2" offset="vc_col-md-3 vc_col-xs-6" css=".vc_custom_1542182799492{padding-top: 0px !important;}"][gsf_counter counter_size="counter-size-lg" title_color="#ababab" end="80" suffix="k" main_color="#696969" icon_color="#333333" title="ACTIVE READERS"][/vc_column_inner][vc_column_inner el_class="col-mb-12,md-mg-bottom-50" width="1/2" offset="vc_col-md-3 vc_col-xs-6" css=".vc_custom_1542182804404{padding-top: 0px !important;}"][gsf_counter counter_size="counter-size-lg" title_color="#ababab" end="3" prefix="+" suffix="k" main_color="#696969" icon_color="#333333" title="TOTAL PAGES"][/vc_column_inner][vc_column_inner el_class="col-mb-12,sm-mg-bottom-50" width="1/2" offset="vc_col-md-3 vc_col-xs-6" css=".vc_custom_1542182809124{padding-top: 0px !important;}"][gsf_counter counter_size="counter-size-lg" title_color="#ababab" end="283" main_color="#696969" icon_color="#333333" title="CUP OF COFFEE"][/vc_column_inner][vc_column_inner el_class="col-mb-12" width="1/2" offset="vc_col-md-3 vc_col-xs-6" css=".vc_custom_1542182813020{padding-top: 0px !important;}"][gsf_counter counter_size="counter-size-lg" title_color="#ababab" end="14" suffix="k" main_color="#696969" icon_color="#333333" title="FACEBOOK FANS"][/vc_column_inner][vc_column_inner css=".vc_custom_1542182818588{padding-top: 0px !important;}"][gsf_space desktop="78" tablet="70" tablet_portrait="60" mobile_landscape="20" mobile="50"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'From our blog';
        $template['image_path'] = 'from-our-blog';
        $template['custom_class'] = 'posts';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542182059415{background-color: #ffffff !important;}"][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_space desktop="80" tablet="70" tablet_portrait="60" mobile_landscape="50" mobile="50"][gsf_heading layout_style="style-3" space_between="20|px" title="RnJvbSUyMG91ciUyMGJsb2c=" title_color="#333333" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" title_font_size_lg="48" title_font_size_md="40" title_font_size_sm="34" title_font_size_mb="28" sub_title="BLOG UPDATE" css=".vc_custom_1543906451971{margin-bottom: 25px !important;padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-04.png?id=268) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column][gsf_posts posts_per_page="5" post_columns_gutter="70" is_slider="on" post_animation="" columns="3" columns_md="2" columns_sm="2" columns_xs="2" columns_mb="1" ids=""][gsf_space desktop="58" tablet="50" tablet_portrait="45" mobile_landscape="40" mobile="35"][gsf_button title="VIEW ALL POSTS" style="outline" color="gray" align="center" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fblogs%2F|title:Blogs|target:%20_blank|"][gsf_space desktop="78" tablet="70" tablet_portrait="60" mobile_landscape="50" mobile="50"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Testimonials 01';
        $template['image_path'] = 'testimonials-01';
        $template['custom_class'] = 'testimonials';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542178714879{background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-05.jpg?id=260) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][gsf_space desktop="138" tablet="120" tablet_portrait="100" mobile_landscape="80" mobile="70"][gsf_testimonials layout_style="style-02" quote_image="263" content_line_height="2|em" space_between="73|50|40|30|30" testimonial_use_theme_font="" values="%5B%7B%22author_name%22%3A%22Savanna%20Walker%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%20%22%7D%2C%7B%22author_name%22%3A%22Vladimir%20Nabokov%22%2C%22author_job%22%3A%22Reporter%22%2C%22author_bio%22%3A%22Auteur%20is%20a%20monthly%20book%20review%20publication%20distributed%20to%20400%2C000%20avid%20readers%20through%20subscribing%20bookstores%20%26%20public%20libraries.%20%22%7D%5D" nav="on" nav_position="nav-center" nav_hover_style="nav-hover-bg" nav_hover_scheme="hover-light" autoplay="on" content_typography="Libre Baskerville|italic|400|italic"][gsf_space desktop="172" tablet="140" tablet_portrait="120" mobile_landscape="100" mobile="80"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Lastest reviews';
        $template['image_path'] = 'lastest-reviews';
        $template['custom_class'] = 'product-reviews';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1543808714860{background-color: #ffffff !important;}"][vc_column width="5/6" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"][gsf_heading layout_style="style-3" space_between="20|px" title="TGFzdGVzdCUyMHJldmlld3M=" title_color="#333333" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" title_font_size_lg="48" title_font_size_md="40" title_font_size_sm="34" title_font_size_mb="28" sub_title="BOOK REVIEW" css=".vc_custom_1543906445707{margin-top: 50px !important;margin-bottom: 50px !important;padding-top: 55px !important;padding-bottom: 55px !important;background-image: url(https://auteur.g5plus.net/wp-content/uploads/2018/11/background-04.png?id=268) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column][gsf_product_reviews items_per_page="4" columns="2" columns_md="2" columns_sm="1" columns_xs="1" columns_mb="1"][gsf_space desktop="50" tablet="40" tablet_portrait="30" mobile_landscape="20" mobile="10"][gsf_button title="ALL REVIEWS" style="outline" color="gray" align="center" link="url:https%3A%2F%2Fauteur.g5plus.net%2Fshop|title:Shop|target:%20_blank|"][gsf_space desktop="110" tablet="90" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Product Singular 01';
        $template['image_path'] = 'product-singular-01';
        $template['custom_class'] = 'product-singular';
        $template['content'] = <<<CONTENT
<p>[vc_row el_class="md-clear-bg" css=".vc_custom_1545728279547{background: #f4f3ec url(https://auteur.g5plus.net/wp-content/uploads/2018/12/background-20.jpg?id=624) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column offset="vc_col-lg-5 vc_col-md-6"][gsf_space desktop="140" tablet="120" tablet_portrait="100" mobile_landscape="80" mobile="70"][gsf_product_singular featured_title="FEATURED BOOK" product_id="125"][gsf_space desktop="148" tablet="120" tablet_portrait="100" mobile_landscape="90" mobile="80"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;

        $template = array();
        $template['name'] = 'Welcome to Auteur';
        $template['image_path'] = 'welcome-to-auteur';
        $template['custom_class'] = 'info-box';
        $template['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1542182021570{background-color: #ffffff !important;}"][vc_column offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10"][gsf_space desktop="100" tablet="80" tablet_portrait="70" mobile_landscape="60" mobile="60"][vc_single_image image="248" img_size="full" alignment="center" css=".vc_custom_1542164050620{margin-bottom: 35px !important;}"][gsf_heading layout_style="style-4" title="V2VsY29tZSUyMHRvJTIwQXV0ZXVy" title_color="#333333" title_line_height="1.4" sub_title_font_size="18" sub_title_letter_spacing="5px" sub_title_use_theme_fonts="" title_font_size_lg="48" title_font_size_md="40" title_font_size_sm="34" title_font_size_mb="28" sub_title="A MONTHLY BOOK REVIEW PUBLICATION" css=".vc_custom_1543216085131{margin-bottom: 22px !important;}"][vc_column_text]</p>
<p class="fs-15" style="text-align: center; color: #7e7e7e;">Auteur is a monthly book review publication distributed to 400,000 avid readers through subscribing bookstores and public libraries. Founded in 1988 and located in Nashville, Tennessee, BookPage serves as a broad-based selection guide to the best new books published every month.</p>
<p>[/vc_column_text][gsf_space desktop="90" tablet="70" tablet_portrait="60" mobile_landscape="50" mobile="40"][/vc_column][vc_column][vc_row_inner el_class="row-line-between"][vc_column_inner el_class="md-mg-bottom-40" width="1/2" offset="vc_col-md-4"][gsf_info_box layout_style="ib-left-inline" title="Book review" title_font_size="34|28|24|20|18" sub_title="TRENDING" sub_title_font_size="15" ib_bg_color="#ffffff" icon_type="image" image="250" hover_bg_color="#ffffff" hover_text_color="#333333"]</p>
<p class="fs-15">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qused do eiusmod</p>
<p>[/gsf_info_box][gsf_space desktop="42" tablet="35" tablet_portrait="30" mobile_landscape="25" mobile="20"][gsf_button title="VIEW MORE" style="link" color="accent" icon_font="fal fa-chevron-double-right" icon_align="right" link="url:%23|title:View%20more||"][/vc_column_inner][vc_column_inner el_class="md-mg-bottom-40" width="1/2" offset="vc_col-md-4"][gsf_info_box layout_style="ib-left-inline" title="Top picks" title_font_size="34|28|24|20|18" sub_title="FEATURED" sub_title_font_size="15" ib_bg_color="#ffffff" icon_type="image" image="249" hover_bg_color="#ffffff" hover_text_color="#333333"]</p>
<p class="fs-15">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qused do eiusmod</p>
<p>[/gsf_info_box][gsf_space desktop="42" tablet="35" tablet_portrait="30" mobile_landscape="25" mobile="20"][gsf_button title="VIEW MORE" style="link" color="accent" icon_font="fal fa-chevron-double-right" icon_align="right" link="url:%23|title:View%20more||"][/vc_column_inner][vc_column_inner offset="vc_col-md-4"][gsf_info_box layout_style="ib-left-inline" title="This month" title_font_size="34|28|24|20|18" sub_title="BOOKS" sub_title_font_size="15" ib_bg_color="#ffffff" icon_type="image" image="251" hover_bg_color="#ffffff" hover_text_color="#333333"]</p>
<p class="fs-15">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qused do eiusmod</p>
<p>[/gsf_info_box][gsf_space desktop="42" tablet="35" tablet_portrait="30" mobile_landscape="25" mobile="20"][gsf_button title="VIEW MORE" style="link" color="accent" icon_font="fal fa-chevron-double-right" icon_align="right" link="url:%23|title:View%20more||"][/vc_column_inner][/vc_row_inner][gsf_space desktop="125" tablet="100" tablet_portrait="80" mobile_landscape="70" mobile="60"][/vc_column][/vc_row]</p>

CONTENT;
        $templates[] = $template;
        return $templates;
    }
}

if (!function_exists('gsf_vc_template_categories')) {
    function gsf_vc_template_categories() {
        $categories = array(
            'all' => esc_html__('All','auteur-framework'),
            'accordions' => esc_html__('Accordions','auteur-framework'),
            'banners' => esc_html__('Banners','auteur-framework'),
            'contact-form' => esc_html__('Contact Form','auteur-framework'),
            'events' => esc_html__('Events','auteur-framework'),
            'footer' => esc_html__('Footer','auteur-framework'),
            'info-box' => esc_html__('Info Box','auteur-framework'),
            'mailchimp' => esc_html__('Mailchimp','auteur-framework'),
            'other' => esc_html__('Other','auteur-framework'),
            'page-title' => esc_html__('Page Title','auteur-framework'),
            'partners' => esc_html__('Partners','auteur-framework'),
            'posts' => esc_html__('Posts','auteur-framework'),
            'pricings' => esc_html__('Pricings','auteur-framework'),
            'product-reviews' => esc_html__('Product Reviews','auteur-framework'),
            'product-singular' => esc_html__('Product Singular','auteur-framework'),
            'products' => esc_html__('Products','auteur-framework'),
            'testimonials' => esc_html__('Testimonials','auteur-framework'),
            'videos' => esc_html__('Videos','auteur-framework'),
        );
        return $categories;
    }
}