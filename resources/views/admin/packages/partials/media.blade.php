<form action="{{ route('admin.packages.media') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="_method" value="POST"/>
    <input type="hidden" name="package_id" value="{{ $package->id }}"/>

    <div class="col-lg-10">
        <div class="row">
            <span class="btn btn-default btn-file">
                Browse <input type="file" name="file" size="40"/>
            </span>
        </div>

        <div class="row">
            <div class="media-preview">
                 <div class="media-img">

                   @if($photo = $package->getPhoto())
                     <img src="{{ $photo }}"/>
                   @endif

                 </div>
            </div>

        </div>
    </div>
</form>


