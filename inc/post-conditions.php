<?php
/*
* This code is for showing Post Type icon
* Don't Modify it. If, You haven't create new Post Type.
*/
$roohani_post_type_icon = get_post_format();

    switch ($roohani_post_type_icon) {
        case "status":
            $roohani_post_type_icon = get_template_directory_uri() . '/assets/images/status-icon.png';
            $roohani_post_type_title = __('Status','roohani');
            break;
        case "quote":
            $roohani_post_type_icon = "quote-left";
            $roohani_post_type_title = __('Quote','roohani');
            break;
        case "gallery":
            $roohani_post_type_icon = "images";
            $roohani_post_type_title = __('Gallery','roohani');
            break;
        case "image":
            $roohani_post_type_icon = "file-image";
            $roohani_post_type_title = __('Image','roohani');
            break;
        case "video":
            $roohani_post_type_icon = "video";
            $roohani_post_type_title = __('Video','roohani');
            break;
        case "audio":
            $roohani_post_type_icon = "volume-up";
            $roohani_post_type_title = __('Audio','roohani');
            break;
        case "link":
            $roohani_post_type_icon = "link";
            $roohani_post_type_title = __('Link','roohani');
            break;
        case "aside":
            $roohani_post_type_icon = "sticky-note";
            $roohani_post_type_title = __('Aside','roohani');
            break;
        case "chat":
            $roohani_post_type_icon = "chat";
            $roohani_post_type_title = __('Chat','roohani');
            break;
        default :
          $roohani_post_type_icon = "thumbtack";
          $roohani_post_type_title = __('Standard','roohani');
    }

 if ( $roohani_post_type_icon !== get_template_directory_uri() . '/assets/images/status-icon.png') {
    $roohani_echoPostIcon = '<i title="' . esc_attr__('Post Type is ','roohani') . esc_attr( $roohani_post_type_title ) .'" class="fa fa-'
      . esc_attr( $roohani_post_type_icon ) .  ' fa-4x fa-border"></i>';

    $roohani_mobilePostIcon = '<i title="' . esc_attr__('Post Type is ','roohani') . esc_attr( $roohani_post_type_title ) .'" class="mobilePostIcon fa fa-'
      . esc_attr( $roohani_post_type_icon ) .  ' fa-border single-post-type-icon"></i>';

    $roohani_titlePostIcon = '<i title="' . esc_attr__('Post Type is ','roohani') . esc_attr( $roohani_post_type_title ) .'" class="titlePostIcon fa fa-'
      . esc_attr( $roohani_post_type_icon ) .  ' fa-border single-post-type-icon"></i>';
 } else {
    $roohani_echoPostIcon =   '<img src=" ' . esc_url( $roohani_post_type_icon ) . ' " class="fa fa-5x fa-border">' ;
    $roohani_mobilePostIcon = '<img src=" ' . esc_url( $roohani_post_type_icon ) . ' " class="fa fa-border single-post-type-icon mobilePostIcon">' ;
    $roohani_titlePostIcon =  '<img src=" ' . esc_url( $roohani_post_type_icon ) . ' " class="fa fa-border single-post-type-icon"> ' ;
 }

/*
*
* This code is for showing Category, Date, tags etc icon
*/

$roohani_archive_icons_type = '';

if ( is_date() ) {
  $roohani_archive_icons_type = 'calendar-alt';
} elseif ( is_tag() ) {
  $roohani_archive_icons_type = 'tags';
} elseif ( is_time() ) {
  $roohani_archive_icons_type = 'clock';
} elseif ( is_category() ) {
  $roohani_archive_icons_type = 'th';
} elseif ( is_search() ) {
  $roohani_archive_icons_type = 'search';
}

$roohani_archive_icons = '<i class="fa fa-'. esc_attr( $roohani_archive_icons_type ) . ' fa-4x fa-border single-post-type-icon"></i>';



?>
