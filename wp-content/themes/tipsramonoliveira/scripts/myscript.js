jQuery(function ($) {
    $(window).on("load", function () {

        function handleRadioButton(type) {
            if (type === 'all') {
                return $('#checkbox-all').change(function () {
                    if (this.checked) {
                        $('.iten').removeClass('hidden').addClass('show-grid')
                    } else {
                        $('.iten').addClass('hidden').removeClass('show-grid')
                    }
                });
            }

            return $('#checkbox-' + type).change(function () {
                if (this.checked) {
                    $('.iten').not('.' + type).addClass('hidden')
                    $('.' + type).removeClass('hidden')
                }
            });
        }
        
        $('.selectlang').click(function () {
            handleRadioButton($(this).val())
        })

    });
});