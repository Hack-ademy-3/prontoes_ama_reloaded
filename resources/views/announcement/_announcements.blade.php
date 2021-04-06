<div class="row">
   
    @foreach($announcements as $announcement)
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($announcement->images as $image)
                    
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">{{$announcement->title}}</h5>
                <p class="card-text">{{$announcement->body}}</p>
                <h5>
                    <strong>Categoria: <a
                            href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a></strong>
                    <i>{{$announcement->created_at->format('d/m/Y')}} -{{ $announcement->user->name  }}</i>
                </h5>
                <a href="#" class="btn btn-danger">¡Quiero ver más!</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
