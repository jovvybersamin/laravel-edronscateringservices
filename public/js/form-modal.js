(function( $ ){

    var pluginName = 'formModal',
        defaults = {
            onAjax:false,
            form:'#form',
            saveBtn:'#save',
            onUpdate:function(){}
        };
    // FormModal PLUGIN DEFINITION
    // ==========================

    function Plugin(element, options) {

        this.$element = $(element);


        this.$options   = $.extend( {}, defaults,options);
        this._defaults  = defaults;
        this._name      = pluginName;

        this.init();

        return this;
    }

    Plugin.prototype.init = function(){
        this.$modal = $(this.$element).data('target');
        this.$modal = $(this.$modal);

        // show the modal.
        if (!this.$options.onAjax){
            this.show();
            this.events();
        } else {
            this.load();
        }

        //load event triggers.

        return this;
    };

    Plugin.prototype.show = function(){
        this.$modal.modal('show');
    };

    
    Plugin.prototype.load = function(){
        var href = this.$element.attr('href');
        var that = this;

        setTimeout(function(){
            that.$modal.find('.modal-dialog').load(href,'',function(){
                that.show();
                that.events();
            });
        },500)

    };

    Plugin.prototype.update = function(){

    };

    Plugin.prototype.ajax = function(url){

    };

    Plugin.prototype.events = function(){
        var that = this;
        console.log(this.$options.form);

        $(this.$options.form).on('submit', function(e){
             e.preventDefault();
             var form = this;
             that.submit(form,function(res){
                 if(res){
                     that.$options.onUpdate($(form));
                 }
             });
             // call a call back after submitting and successfull
        });
    };

    Plugin.prototype.submit = function(form,callback){
            var form = $(form),
                modal = this.$modal.find('.modal-body');

            $.ajax({
                type:'POST',
                url: form.attr('action'),
                data:form.serialize(),
                dataType:'json',
                success: function( response ){
                    notification.add(response.message);
                    notification.show('success',modal);
                    // call a callback.
                    callback(true);
                },
                error: function( response ){
                    var errors = $.parseJSON(response.responseText);

                    $.each(errors, function(key,value){
                        for(var i = 0; i < value.length;i++){
                            notification.add(value[i]);
                        }
                    });

                    notification.show('danger',modal);
                    callback(false);
                }
            });

    }

    $.fn[pluginName] = function( options ){
        return this.each(function(){
            new Plugin(this, options);
        });
    }

})(window.jQuery);