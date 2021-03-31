
    <div class="col-12 col-md-4">
        <div class="card mx-3">
            <div class="card-header">
                {{$announcement->title}}
            </div>
            <div class="car-body ">
                <div><img src="https://picsum.photos/300" alt=""></div>
                <p class="mx-2"> 
                    {{Str::limit($announcement->body, 50)}} <a href="{{route("announcement.details", ['id'=>$announcement->id])}}">Leer más</a>
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <strong>Categoria: <a
                        href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a></strong>
                <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
            </div>
         </div>
    </div>
    

