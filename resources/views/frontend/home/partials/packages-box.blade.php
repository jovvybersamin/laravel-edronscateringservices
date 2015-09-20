   <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                <strong>Packages</strong>
            </h2>
            <hr>
        </div>

        @foreach($packages->chunk(3) as $items)
               <div class="row"> 
               @foreach($items as $item )
                     <div class="col-sm-4 text-center">
                        <img class="img-responsive" src="{{ $item->getPhoto() }}" alt="">
                        <h3>{{ $item->name }}
                        <br>
                            <small>{{ $item->description }}</small>
                        </h3>
                        <u><a href="#">See More..</a></u>
                    </div>
               @endforeach 
               </div>
        @endforeach

       
        <div class="clearfix"></div>
    </div>