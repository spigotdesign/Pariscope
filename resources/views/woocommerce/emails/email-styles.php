<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load colors.
$bg        = get_option( 'woocommerce_email_background_color' );
$body      = get_option( 'woocommerce_email_body_background_color' );
$base      = get_option( 'woocommerce_email_base_color' );
$base_text = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text      = get_option( 'woocommerce_email_text_color' );

// Pick a contrasting color for links.
$link_color = wc_hex_is_light( $base ) ? $base : $base_text;

if ( wc_hex_is_light( $body ) ) {
	$link_color = wc_hex_is_light( $base ) ? $base_text : $base;
}

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );
$text_lighter_40 = wc_hex_lighter( $text, 40 );

$system_font_stack = '"acherusgrotesque-regular", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"';
$header_font_stack = '"acherusgrotesque-bold", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"';



// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
// body{padding: 0;} ensures proper scale/positioning of the email in the iOS native email app.
?>

@font-face {
			    font-family: 'acherusgrotesque-regular';
			    src: url('https://cinchws.com/wp-content/themes/cinch/dist/fonts/acherusgrotesque/acherusgrotesque-regular-webfont.woff2') format('woff2'),
			         url('https://cinchws.com/wp-content/themes/cinch/dist/fonts/acherusgrotesque/acherusgrotesque-regular-webfont.woff') format('woff');
			    font-weight: normal;
			    font-style: normal;

			}

			@font-face {
			    font-family: 'acherusgrotesque-bold';
			    src: url('https://cinchws.com/wp-content/themes/cinch/dist/fonts/acherusgrotesque/acherusgrotesque-bold-webfont.woff2') format('woff2'),
			         url('https://cinchws.com/wp-content/themes/cinch/dist/fonts/acherusgrotesque/acherusgrotesque-bold-webfont.woff') format('woff');
			    font-weight: normal;
			    font-style: normal;

			}


body {
	padding: 0;
}

#wrapper {
	background-color: <?php echo esc_attr( $bg ); ?>;
	margin: 0;
	padding: 35px 0;
	-webkit-text-size-adjust: none !important;
	width: 100%;
}

#template_container {
	/* box-shadow: 0 1px 3px rgba(53,69,88,.2) !important; */
	background-color: <?php echo esc_attr( $body ); ?>;
	border: 1px solid #e7eaeb;
	border-radius: 5px !important;
}

#template_header {
	background-color: <?php echo esc_attr( $base ); ?>;
	background-size: cover;
	border-radius: 3px 3px 0 0 !important;
	color: <?php echo esc_attr( $base_text ); ?>;
	border-bottom: 0;
	font-weight: bold;
	line-height: 100%;
	vertical-align: middle;
	font-family: font-family: <?php echo $header_font_stack ; ?>;
	height: 160px;
	display: flex;
    flex-direction: column;
    justify-content: center;
}

#template_header h1,
#template_header h1 a {
	color: <?php echo esc_attr( $base_text ); ?>;
}

#template_header_image img {
	margin-left: 0;
	margin-right: 0;
	width: 120px;
	height: 37px;
}

#template_footer td {
	padding: 0;
	border-radius: 6px;
}

#template_footer #credit {
	border: 0;
	color: <?php echo esc_attr( $text_lighter_40 ); ?>;
	font-family: <?php echo $system_font_stack; ?>;
	font-size: 12px;
	line-height: 150%;
	text-align: center;
	padding: 24px 0;
}

#template_footer #credit p {
	margin: 0 0 16px;
}

#body_content {
	background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
	padding: 48px 48px 32px;
}

#body_content table.td {
	font-family: <?php echo $header_font_stack; ?> !important;
}

#body_content table td td {
	padding: 8px;
	font-size: 14px;
}

#body_content table td th {
	padding: 8px;
	font-family: <?php echo $system_font_stack; ?>;
	font-size: 14px;
}

#body_content .order_item .td {
	font-family: <?php echo $header_font_stack; ?> !important;
}

#body_content td ul.wc-item-meta {
	font-size: small;
	margin: .5em 0 0;
	padding: 0;
	list-style: none;
}



#body_content td ul.wc-item-meta li {
	margin: 0.5em 0 0;
	padding: 0;
}

#body_content td ul.wc-item-meta li p {
	margin: 0;
}

#body_content p {
	margin: 0 0 16px;
}

#body_content_inner {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	font-family: <?php echo $system_font_stack; ?>;
	font-size: 14px;
	line-height: 150%;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

#body_content_inner > div {
	margin-bottom: 20px !important;
}

#body_content_inner a {
	text-decoration: none;
}

.td {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid #e7eaeb;
	vertical-align: middle;
}

.address {
	padding: 12px;
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid #e7eaeb;
	font-size: 13px;
	font-style: normal;
	font-family: <?php echo $system_font_stack; ?> !important;
}

#addresses {
	margin-bottom: 20px !important;
}

.text {
	color: <?php echo esc_attr( $text ); ?>;
	font-family: font-family: <?php echo $system_font_stack; ?>;
}

.link {
	color: <?php echo esc_attr( $link_color ); ?>;
}

#header_wrapper {
	padding: 36px 48px;
	display: block;
}

h1 {
	color: #314351;
	font-family: <?php echo $header_font_stack ; ?>;
	font-size: 21px;
	font-weight: 300;
	line-height: 150%;
	margin: 0;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
	text-shadow: 0 1px 0 <?php echo esc_attr( $base_lighter_20 ); ?>;
}

h2 {
	color: #314351;
	display: block;
	font-family: <?php echo $header_font_stack ; ?>;
	font-size: 16px;
	font-weight: normal;
	line-height: 130%;
	margin: 0 0 12px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
	color: #314351;
	display: block;
	font-family: <?php echo $header_font_stack ; ?>;
	font-size: 14px;
	font-weight: normal;
	line-height: 130%;
	margin: 12px 0 4px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
	color: <?php echo esc_attr( $link_color ); ?>;
	font-weight: normal;
	text-decoration: underline;
}

p {
	font-family: <?php echo $system_font_stack; ?>;
}

img {
	border: none;
	display: inline-block;
	font-size: 14px;
	font-weight: bold;
	height: auto;
	outline: none;
	text-decoration: none;
	text-transform: capitalize;
	vertical-align: middle;
	margin-<?php echo is_rtl() ? 'left' : 'right'; ?>: 10px;
	max-width: 100%;
	height: auto;
}
<?php
