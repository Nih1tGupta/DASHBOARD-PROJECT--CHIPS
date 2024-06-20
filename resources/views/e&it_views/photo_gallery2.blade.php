@extends('e&it_views.layout')

@section('title','Home')


 
@section('content')
<section class="department-page">
            <div class="container">
<div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">Our Gallery</span>
                    <h2 class="section-title__title">Explore</h2>
                </div>

<div class="row">
<div class="contact-one__bg" style="background-image: url(https://artgallery.yale.edu/sites/default/files/styles/hero_small/public/2023-01/ag-doc-2281-0036-pub.jpg?h=147a4df9&itok=uclO7OrF); ">
</div>
    <div class="col-xxl-10 col-md-10 ms-auto me-auto" data-select2-id="select2-data-6-ktob">
        <div class="card stretch-full" data-select2-id="select2-data-5-p6zd">
           
        </div>
    </div>
</div>
<div class=" wow fadeInUp animated animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">

                            <div class="footer-widget__column footer-widget__gallery  ">
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                @if($all)
                                @foreach($all as $photo)
                                    <li>
                                        <div class="footer-widget__gallery-img"   style= "width:18rem;">
                                            <img src="{{ asset($photo->photo_url); }}   "style=" height: 21rem ;object-fit:cover;" alt="">
                                            <a href="{{ asset($photo->photo_url); }}" class="img-popup"></a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                  
                                </ul>

                            </div>
                        </div>
</div>
</div>
</div>

@endsection




