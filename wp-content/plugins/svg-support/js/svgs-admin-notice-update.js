jQuery(document).on( 'click', '.svgs-upgrade-notice .notice-dismiss', function() {

    jQuery.ajax({
        url: ajaxurl,
        data: {
            action: 'dismiss_svgs_admin_notice'
        }
    });

});