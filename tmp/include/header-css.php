<?php if (is_home() || is_front_page() || is_singular('club' )):?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<?php endif;?>

<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css<?php echo '?'.date("ymdHis") ?>" type="text/css" media="all">
