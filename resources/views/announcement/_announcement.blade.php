<div class="row my-3">
    <div class="col-lg-12 col-md-6">
        <div class="card mx-3">
            <div class="card-header">
                {{$announcement->title}}
            </div>
            <div class="car-body ">
                <div><img class='img-fluid' src="https://picsum.photos/300" alt=""></div>
                <p>
                    {{$announcement->body}}
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <strong>Categoria: <a
                        href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a></strong>
                <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
            </div>

            <div class="mb-5">
                <a href="{{route("announcement.details", ['id'=>$announcement->id])}}">Leer más</a>
            </div>
        </div>
    </div>
</div>