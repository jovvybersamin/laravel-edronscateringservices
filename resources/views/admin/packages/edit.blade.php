@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => $package->name,'showAction' => false])
    {!! Form::model($package, ['method' => 'PUT','route' => array('admin.packages.update',$package->id),'class' => 'form-horizontal']) !!}
        {!! Form::hidden('id',null) !!}
        @include('admin.packages._forms')
    {!! Form::close() !!}


    @include('admin.packages._tabs',[
        'package_courses'   =>  $package_courses,
        'package_rules'     =>  $package_rules,
        'menus'             =>  $menus,
    ]);

@endsection


@section('footer')
    <script type="text/javascript" src="/js/modal.js"></script>
    <script type="text/javascript" src="/js/form-modal.js"></script>
    <script type="text/javascript">
        var jModal;
        var packageCourseModal = $('#package-courses-modal .modal-body');
        var target = '#package-courses-modal';


        $('.add').on('click',function(e){
            $(this).formModal();
            return false;
        });

        var PackageCourse = {
            edit : function(elem){
                $(elem).formModal({
                    onAjax:true,
                    form:'#package-course-edit-form',
                    onUpdate:function(form){
                        reloadTablePackageCourse(form.serialize());
                        return false;
                    },
                    onSave:function(){

                    }
                });
            }
        }


        var PackageRule = {
           edit : function(elem){
                $(elem).formModal({
                    onAjax:true,
                    form:'#package-rule-edit-form',
                    onUpdate:function(form){
                        console.log(form);
                        return false;
                    },
                    onStore:function(form){
                        console.log(form);
                        return false;
                    }
                })
           },
           create : function(elem){
                $(elem).formModal({
                    form:'#package-rule-form',
                    onStore:function(form){
                        console.log(form)
                        return false;
                    }
                });
           }
        }


        /**
         *
         *
         */
        var PackageMenuItem = {
            edit : function(elem){
                $(elem).formModal({
                    onAjax:true,
                    loadTo:'.modal-body',
                    form:'#package-menuitem-form',
                    onUpdate:function(form,that){
                        console.log(form);
                        var table = $('#modal-table-package-menuitems');

                            table.find('tr').each(function(){
                                var checkbox = $(this).find(':checkbox');
                                if($(checkbox).is(':checked')){
                                    $(this).remove();
                                }
                            });

                        reloadTablePackageMenuItem(form.serialize());
                        return false;
                    }
                });
            }
        }

        function reloadTablePackageCourse(form)
        {
            $.ajax({
                type:'GET',
                url:'/admin/package-course/getTable',
                data:form,
                success:function( response ){
                    $('#table-package-courses tbody').html(response);
                },
                error:function(response){
                    console.log(response);
                }
            });
        }


        function reloadTablePackageMenuItem(form)
        {
               $.ajax({
                    type:'GET',
                    url:'/admin/package-menuitem/getTable',
                    data:form,
                    success:function( response ){
                        $('#table-package-menuitems tbody').html(response);
                    },
                    error:function(response){
                        console.log(response);
                    }
                });
        }



        $('#package-course-form').on('submit',function( event ){
            event.preventDefault();
            var form = $(this);

            $.ajax({
                type:'POST',
                url: form.attr('action'),
                data:form.serialize(),
                dataType:'json',
                success: function( response ){

                    notification.add(response.message);
                    notification.show('success',packageCourseModal);
                    reloadTablePackageCourse(form.serialize());
                    // Clear all the inputs in the form.
                    form.trigger('reset');


                },
                error: function( response ){
                    var errors = $.parseJSON(response.responseText);

                    $.each(errors, function(key,value){
                        for(var i = 0; i < value.length;i++){
                            notification.add(value[i]);
                        }
                    });

                    notification.show('danger',packageCourseModal);

                }
            });


        });



     function formAjax(that,modal){

            var form = $(that),
                modal = $(modal + ' .modal-body');

            $.ajax({
                type:'POST',
                url: form.attr('action'),
                data:form.serialize(),
                dataType:'json',
                success: function( response ){

                    notification.add(response.message);
                    notification.show('success',modal);
                    reloadTablePackageCourse(form.serialize());
                    // Clear all the inputs in the form.
                    return false;
                },
                error: function( response ){
                    var errors = $.parseJSON(response.responseText);

                    $.each(errors, function(key,value){
                        for(var i = 0; i < value.length;i++){
                            notification.add(value[i]);
                        }
                    });

                    notification.show('danger',modal);
                }
            });
       }


      var onlyOnce = true;
       $(document).on('change','.btn-file :file', function(e){
            var input = $(this),
                file = input.get(0).files;
             // get the form of the file input.
            var form = input.closest('form');
                form = $(form);

            sendPhoto(form,file);
       });

       function sendPhoto(form,file)
       {
            var action = form.attr('action');
            var id = form.find('input[name=package_id]').val();
            var fd = new FormData(form[0]);

            fd.append('file',file);
            fd.append('_method','POST');
            fd.append('package_id',id);

            var token = readCookie('XSRF-TOKEN');
            $.ajaxSetup({
                headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(token)
                }
            });

            $.ajax({
              type:'POST',
              url:action,
              data:fd,
              cache:false,
              contentType: false,
              processData: false
            })
            .done(function(r){
               onlyOnce = true;
               console.log(r.file_path);
               var image = new Image();
               image.src = r.file_path;
               form.find('div.media-img').html(image);
            })
            .fail(function(){

            });
       }


        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

    </script>

@endsection