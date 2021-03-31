 <!-- ======= Why Us Section ======= -->
 <section id="why-us" class="why-us section-bg">
    <div class="container">

      <div class="row my-3">
        @foreach($categories as $category)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="card">
            <img src="/img/categories/{{ucfirst($category->name)}}.jpg" class="card-img-top" alt="...">
            <div class="card-icon">
              <i class="bx bx-book-reader"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="{{route('category.announcements', ['name'=>$category->name, 'id'=>$category->id])}}">{{$category->name}}</a></h5>
             
              
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </section><!-- End Why Us Section -->