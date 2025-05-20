$('#form_repeater').repeater({
    initEmpty: false,
    isFirstItemUndeletable: true,
    show: function () {
        $(this).slideDown();
        $(this).find('input').prop('readonly',false);
     },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
