(function($){

    $.jModal = function(options) {

        var jModal = {

            $modal : {},

            options : $.extend({
                modal:'#modal',
                attributes:{},
                onSave:function(){},
                onEdit:function(){}
            },options),

            init : function(){
                this.$modal = $(options.modal);
            },

            openModal : function(){
                this.$modal.modal('show');
            },

            closeModal : function(){
                this.$modal.modal('hide');
            },

            onSave: function(func){
                if (typeof func === 'function'){
                    return func();
                }
                console.log('{func} must be type of a function ' + typeof(func) + ' given.');
            },

            onFind: function(elementId){
                return this.$modal.find(elementId);
            },

            Edit: function(){
                (options.onEdit === 'function' ? options.onEdit(this.$modal) : 'onEdit is not a function.');
            }
        };
        return {
            init: jModal.init,
            open: jModal.openModal,
            close: jModal.closeModal,
            save: jModal.onSave,
            find: jModal.onFind,
            edit: jModal.Edit
        };
    };
})(jQuery);