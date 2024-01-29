CREATE TABLE tx_gdprextensionscomyoutube_domain_model_gdprmanager (
	heading text NOT NULL DEFAULT '',
	content text NOT NULL DEFAULT '',
	button_text text NOT NULL DEFAULT '',
	enable_background_image int(11) NOT NULL DEFAULT '0',
	background_image text NOT NULL DEFAULT '',
	background_image_color varchar(255) NOT NULL DEFAULT '',
	button_color varchar(255) NOT NULL DEFAULT '',
	button_text_color varchar(255) NOT NULL DEFAULT '',
	text_color varchar(255) NOT NULL DEFAULT '',
	button_shape varchar(255) NOT NULL DEFAULT '',
	extension_title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_gdprextensionscomyoutube_domain_model_cookiewidget (
	cookie_widget_image text NOT NULL DEFAULT '',
	cookie_widget_position varchar(255) NOT NULL DEFAULT '',
);

CREATE TABLE tt_content (
    gdpr_yt_url varchar(255) NOT NULL DEFAULT '',
    gdpr_yt_preview_image int(11) unsigned NOT NULL DEFAULT '0',
    gdpr_yt_options int(11) DEFAULT '0' NOT NULL,
    gdpr_yt_start_time time DEFAULT NULL,
    gdpr_yt_end_time varchar(255) NOT NULL DEFAULT '',
		gdpr_yt_autoplay int(11) NOT NULL DEFAULT '0',
		gdpr_yt_show_captions int(11) NOT NULL DEFAULT '0',
		gdpr_yt_disable_annotations int(11) NOT NULL DEFAULT '1',
		gdpr_yt_disable_keyboard int(11) NOT NULL DEFAULT '0',
		gdpr_yt_display_fs int(11) NOT NULL DEFAULT '1',

);
