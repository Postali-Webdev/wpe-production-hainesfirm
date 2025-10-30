jQuery(function ($) {
    "use strict";

    $(document).ready(function () {
        $(document).on('click', '.faq-item p.faq_question', function() {
            $(this).parent().toggleClass('active');
        });
    });

    $(document).ready(function () {
        if ($('.data-lity-btn').length > 0) { 
            $('.data-lity-btn a').attr('data-lity', '');
        }
    })

});