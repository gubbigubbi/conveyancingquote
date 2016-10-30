jQuery(function($) {
/*--------------------------------------------------------------
7.0 Instant Quote
--------------------------------------------------------------*/ 
    (function(){
        $('.tab-toggle').click(function() {
            $('#quote-form').fadeIn('slow');
            var type = $('.nav-pills .active a').text();
            var conveyance = $(this).children('.panel-title').text();
            var data = type + conveyance;
            var conveyanceTypeInput = $('.conveyance-type input');
            conveyanceTypeInput.val(data);
            
            var conveyanceSlug = $(this).data('property-type');

            var confirmationRouterVal = 'generic';
            var confirmationRouterInput = $('.confirmation-router input');
            // confirmation router
            if (type == 'Buying') {

                switch (conveyanceSlug) {
                    case 'off-the-plan':
                        var confirmationRouterVal = 'off-the-plan';
                    break;
                    case 'standard-residential-vacant-land-unit-house-':
                        var confirmationRouterVal = 'standard-residential';
                    break;
                }
            }
            
            confirmationRouterInput.val(confirmationRouterVal);
            
        });

    })();
});