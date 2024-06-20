<section class="event-three"style=" background-image:url('eit_assets/images/backgrounds/department-one-bg.png');">
            <div class="container" >
            <div class="row ">
                   
                   <div class="col-xl-4 col-lg-5">
                        <div class="department-details__right " style="border-left:6px solid #0b66c2;">
                            <h3 class="department-details__download-title">TENDER</h3>
                            <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                            @foreach ($total_tenders as $notice_tender)
                                <li>
                                    <a href="{{ url('/view_notice/'.$notice_tender->id) }}">{{ $notice_tender->title }}<i class="fa fa-arrow-right"></i></a>
                                </li>                           
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ route('eit_view_tenders') }}">
                        <p style="text-decoration: underline;">Read more...</p>
                    </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="department-details__right" style="border-left:6px solid #0b66c2;">
                            <h3 class="department-details__download-title">NEWS</h3>
                            <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                        @foreach ($total_news as $notice_new)
                                <li>
                                    <a href="{{ url('/view_notice/'.$notice_new->id) }}">{{ $notice_new->title }}<i class="fa fa-arrow-right"></i></a>
                                </li>                              
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ route('eit_view_news') }}">
                        <p style="text-decoration: underline;">Read more...</p>
                    </a>
                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="department-details__right"style="border-left:6px solid #0b66c2;">
                            <h3 class="department-details__download-title">CIRCULARS</h3>
                            <div class="department-details__services-box">
                        <ul class="department-details__services-list list-unstyled">
                        @foreach ($total_circulars as $notice_circular)
                                <li>
                                    <a href="{{ url('/view_notice/'.$notice_circular->id) }}">{{ $notice_circular->title }}<i class="fa fa-arrow-right"></i></a>
                                </li>                             
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ route('eit_view_circulars') }}">
                        <p style="text-decoration: underline;">Read more...</p>
                    </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>