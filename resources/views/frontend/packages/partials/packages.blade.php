 <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Packages</h2>
                    <hr>
                </div>

                @foreach($packages->chunk(1) as $items)
                <div class="col-lg-12 text-center">
                @foreach($items as $item )
                    <img class="img-responsive img-border img-full" src="css/img/simple2.jpg" alt="">
                    <h2>{{ $item->name }}
                        <br>
                        <small>{{ $item->description }}</small>
                    </h2>
                    <p>For confirmation, a payment of 50% should be given two weeks before the function or event.The 50% balance shall be paid a day before the function. Minimum number of reservation is 100 guests. the deposit is forfeited if the reservation is cancelled by the client. Plus 10% Service charge. 
                    </p>
                    <a href="{{ route('frontend.packages.show',$item->id) }}"class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                @endforeach
               @endforeach 
              

                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>