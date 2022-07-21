jQuery(document).ready(function () {
    jQuery("#create-order-btn").click(function () {
        jQuery.ajax({
            type: "POST",
            url: "/wp-admin/admin-ajax.php",
            data: {
                action: 'create_order',
                order: jQuery('.form-block :input').serializeArray()
            },
            success: function (output) {
                console.log(output);
            }
        });
    });
});