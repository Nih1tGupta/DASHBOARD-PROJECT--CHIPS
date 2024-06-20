<div class="col-xl-4 col-lg-5">
    <div class="department-details__right">
        <h3 class="department-details__download-title">NOTICE BOARD</h3>
        <div class="department-details__services-box">
            <ul class="department-details__services-list list-unstyled">
                @foreach ($notices as $notice_one)
                <li>
                    <a href="{{ url('/view_notice/'.$notice_one->id) }}">{{ $notice_one->title }}<span
                            class="fa fa-arrow-right"></span></a>
                </li>
                @endforeach
            </ul>
        </div>
        
        <a href="{{ route('eit_view_notice_board') }}">
        <p style="text-decoration: underline;">Read more...</p>
        </a>
        
    </div>
</div>