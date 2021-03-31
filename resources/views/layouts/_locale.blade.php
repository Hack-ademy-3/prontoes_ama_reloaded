        
    <li class="nav-item">
        <form action="{{route('locale',['locale'=>$lang ?? 'es'])}}" method="POST">
        @csrf
            <button type="submit" class="nav-link" style="border:none;background-color:transparent">
            <span class="flag-icon flag-icon-{{$nation ?? 'es'}}"></span>
            </button>
        </form>
    </li>
       