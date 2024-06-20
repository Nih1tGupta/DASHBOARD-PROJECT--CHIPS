@extends('e&it_views.layout')

@section('title','Home')


@section('content')

<section class="department-page">
    
            <div class="container">
            <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class=" alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
        @endif

        @if(session()->has('error'))
        <div class=" alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

    </div>
                <div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">GALLERY</span>
                    <h2 class="section-title__title">Explore More</h2>
                </div>
                <div class="row">
                @if($default)
                @foreach($default as $gallery)
                    <!--Department Two Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 w">
                        <div class="department-two__single">
                            <div class="department-two__img-box " >
                                <div class="department-two__img " style="width:18rem; height:18rem;">
                                    <img src="{{asset($gallery->thumbnail);}}" sytle="object-fit:cover ;width:18rem;" alt="">
                                </div>
                                <div class="department-two__content">
                                <h4 class="card-title">Name:{{$gallery->gallery_name}}</h4>
                               
                                </div>
                                <div class="department-two__content-two">
                                <h4 class="card-title">Name:{{$gallery->gallery_name}}</h4>
                                            <p class="card-text font-weight-bold">{{$gallery->created_at}}</p>
                                    <div class="department-two__btn-box  ms-auto me-auto">
                                    <a href="{{url('e&it_views/photo_gallery2/'.$gallery->gallery_id)}}"class ="btn btn-primary">View</a></td>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <!--Department Two Single End-->
                    <!--Department Two Single Start-->
                 
                    <!--Department Two Single End-->
                    <!--Department Two Single Start-->
                  
                    <!--Department Two Single End-->
                </div>
            </div>
        </section>




@endsection




