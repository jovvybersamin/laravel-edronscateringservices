
var Helper = {


}


var notification = {

    lis:'',

    show:function(type,prependOn){

        var build = '<div id="notification" class="alert alert-' + type + '">'
            build += "<ul>";
            build += this.lis;
            build += "</ul></div>"

        this.lis = '';
        this.hide(prependOn);
        prependOn.prepend(build);
    },

    hide:function(on){
        on.find('#notification').remove();
    },

    add:function(text){
        this.lis += '<li>' + text + '</li>';
    }

}

