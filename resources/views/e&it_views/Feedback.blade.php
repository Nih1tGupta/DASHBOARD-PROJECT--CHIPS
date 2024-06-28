@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Feedback </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Feedback</li>
            </ul>
        </div>
    </div>
</section>



<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-tasks"></span>
                        </div>
                        <h3 class="department-details__title center">Feedback</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Feedback
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">

                                        <div class="content">
                                            <div
                                                class="field field-name-field-body field-type-text-long field-label-hidden">
                                                <div class="field-items">
                                                    <div class="field-item even">
                                                        <p>We welcome your feedback and suggestion about the
                                                            portal to help us further to serve you better.
                                                            Please fill up the form below to write to us with
                                                            your input and suggestion.</p>

                                                        <p><strong>Visually challenged users can opt to send the
                                                                feedback to
                                                                <u>kiran.divya[at]chips[dot]gov[dot]in</u> if
                                                                they have difficulty in using captcha.</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="webform-client-form webform-client-form-958"
                                                action="/en/feedback" method="post" id="webform-client-form-958"
                                                accept-charset="UTF-8">
                                                <div class=g d-flex>
                                                    <div
                                                        class="form-item webform-component webform-component-textfield webform-component--name">
                                                        <label for="edit-submitted-name">Name <span
                                                                class="form-required"
                                                                title="This field is required.">*</span></label>
                                                    </div>
                                                    <div
                                                        class="form-item webform-component webform-component-textfield webform-component--name">
                                                        <input required="required"
                                                            class="feedback-name form-text required" type="text"
                                                            id="edit-submitted-name" name="submitted[name]" value=""
                                                            size="100" maxlength="128" />
                                                    </div>
                                                </div>
                                                <div class="g" d-flex>
                                                <div
                                                    class="form-item webform-component webform-component-email webform-component--email-">
                                                    <label for="edit-submitted-email-">Email : <span
                                                            class="form-required"
                                                            title="This field is required.">*</span></label>
                                                            <div class="form-item webform-component webform-component-email webform-component--email-">
                                                    <input required="required"
                                                        class="email feedback-email form-text form-email required"
                                                        type="email" id="edit-submitted-email-" name="submitted[email_]"
                                                        size="100" />
                                                </div>
                                                </div>
                                                <div
                                                    class="form-item webform-component webform-component-textarea webform-component--feedback-">
                                                    <label for="edit-submitted-feedback-">Feedback : <span
                                                            class="form-required"
                                                            title="This field is required.">*</span></label>
                                                    <div class="form-textarea-wrapper resizable"><textarea
                                                            required="required"
                                                            class="feedback-feedback form-textarea required"
                                                            id="edit-submitted-feedback-" name="submitted[feedback_]"
                                                            cols="90" rows="5"></textarea></div>

                                                </div>
                                                <input type="hidden" name="details[sid]" />
                                                <input type="hidden" name="details[page_num]" value="1" />
                                                <input type="hidden" name="details[page_count]" value="1" />
                                                <input type="hidden" name="details[finished]" value="0" />
                                                <input type="hidden" name="form_build_id"
                                                    value="form-MmJkmOThywuLXnPbomxVM5ZxVHXdzZVi-e7dZFTGxvk" />
                                                <input type="hidden" name="form_id" value="webform_client_form_958" />
                                                <fieldset class="captcha form-wrapper">
                                                    <legend><span class="fieldset-legend">CAPTCHA</span></legend>
                                                    <div class="fieldset-wrapper">
                                                        <div class="fieldset-description">This question is for
                                                            testing whether or not you are a human visitor and to
                                                            prevent automated spam submissions.</div><input
                                                            type="hidden" name="captcha_sid" value="160375" />
                                                        <input type="hidden" name="captcha_token"
                                                            value="43e433a3af612e61c5f85a889b50c95d" />
                                                        <div class="captcha-wrapper"><img
                                                                style="float: left; padding-right: 5px"
                                                                id="captcha_image"
                                                                src="/en/securimage?sid=160375&amp;amp;ts=1718956123&amp;c9bfea4c54a50acb6f4528b9c8dc6b39"
                                                                alt="CAPTCHA Image" />
                                                            <div id="captcha_image_audio_div">
                                                                <audio id="captcha_image_audio" preload="none"
                                                                    style="display: none">
                                                                    <source id="captcha_image_source_wav"
                                                                        src="/en/securimage-audio?sid=160375&amp;ts=1718956123&id=6675305c69112"
                                                                        type="audio/wav">
                                                                    <object type="application/x-shockwave-flash"
                                                                        data="/sites/all/libraries/securimage/securimage_play.swf?bgcol=%23ffffff&amp;icon_file=%2Fsites%2Fall%2Flibraries%2Fsecurimage%2Fimages%2Faudio_icon.png&amp;audio_file=%2Fen%2Fsecurimage-audio%3Fsid%3D160375%26ts%3D1718956123%26"
                                                                        height="32" width="32">
                                                                        <param name="movie"
                                                                            value="/sites/all/libraries/securimage/securimage_play.swf?bgcol=%23ffffff&amp;icon_file=%2Fsites%2Fall%2Flibraries%2Fsecurimage%2Fimages%2Faudio_icon.png&amp;audio_file=%2Fen%2Fsecurimage-audio%3Fsid%3D160375%26ts%3D1718956123%26" />
                                                                        this is captcha sound file
                                                                    </object><br />
                                                                </audio>
                                                            </div>
                                                            <div id="captcha_image_audio_controls">
                                                                <a tabindex="0" class="captcha_play_button"
                                                                    href="/en/securimage-audio?sid=160375&amp;ts=1718956123&id=6675305c69121"
                                                                    onclick="return false">
                                                                    <span class="visually_hidden">Play validation
                                                                        audio</span><img id="captcha_play_image"
                                                                        class="captcha_play_image" height="32"
                                                                        width="32"
                                                                        src="/sites/all/libraries/securimage/images/audio_icon.png"
                                                                        alt="Play CAPTCHA Audio" style="border: 0px">
                                                                    <img class="captcha_loading_image rotating"
                                                                        height="32" width="32"
                                                                        src="/sites/all/libraries/securimage/images/loading.png"
                                                                        alt="Loading audio" style="display: none">
                                                                </a>
                                                                <noscript>Enable Javascript for audio
                                                                    controls</noscript>
                                                            </div>
                                                            <script type="text/javascript"
                                                                src="/sites/all/libraries/securimage/securimage.js">
                                                            </script>
                                                            <script type="text/javascript">
                                                            captcha_image_audioObj = new SecurimageAudio({
                                                                audioElement: 'captcha_image_audio',
                                                                controlsElement: 'captcha_image_audio_controls'
                                                            });
                                                            </script>
                                                            <a tabindex="0" style="border: 0" href="#"
                                                                title="Refresh Image"
                                                                onclick="if (typeof window.captcha_image_audioObj !== 'undefined') captcha_image_audioObj.refresh(); jQuery(this).closest('form').find('.captcha-wrapper img:first')[0].src = '/en/securimage?sid=160375&amp;ts=1718956123&new&' + Math.random(); return false"><span
                                                                    class="visually_hidden">Refresh validation
                                                                    image</span><img id="captcha_reload_image"
                                                                    height="32" width="32"
                                                                    src="/sites/all/libraries/securimage/images/refresh.png"
                                                                    alt="Refresh Image"
                                                                    style="border: 0px; vertical-align: bottom" /></a><br />
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div
                                                            class="form-item form-type-textfield form-item-captcha-response">
                                                            <label for="edit-captcha-response">What text is in the
                                                                image? <span class="form-required"
                                                                    title="This field is required.">*</span></label>
                                                            <input type="text" id="edit-captcha-response"
                                                                name="captcha_response" value="" size="15"
                                                                maxlength="128" class="form-text required" />
                                                            <div class="description">Enter the characters shown in
                                                                the image or use the speaker icon to get an audio
                                                                version.</div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="form-actions"><input
                                                        class="webform-submit button-primary form-submit" type="submit"
                                                        name="op" value="Submit" /></div>
                                        </div>
                                        </form>
                                    </div>

                                </div><!-- /.inner -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--Feature Four Single End-->
        <!--Feature Four Single Start-->
        @include('e&it_views.include.footer_sidebar')


    </div>
</section>

@endsection