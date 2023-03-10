@extends('layouts.fonend_master')
@section('content')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Doctor Profile</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container">

        <!-- Doctor Widget -->
        <div class="card">
            <div class="card-body">
                <div class="doctor-widget">
                    <div class="doc-info-left">
                        <div class="doctor-img">
                            <img src="{{ asset('uploads/doctor_themble_photo') }}/{{ $doctor->doctor_themble_photo }}"
                                class="img-fluid" alt="User Image">
                        </div>
                        <div class="doc-info-cont">
                            <h4 class="doc-name">{{ $doctor->fname }} {{ $doctor->lname}}</h4>
                            <p class="doc-speciality">{{ $doctor->degree }}</p>
                            <p class="doc-department"><img
                                    src="{{ asset('uploads/special_photp/') }}/{{ $doctor->relationwithspeclist->category_photo }}"
                                    class="img-fluid" alt="Speciality">{{ $doctor->relationwithspeclist->special }}</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(35)</span>
                            </div>
                            <div class="clinic-details">
                                <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{ $doctor->city }} - <a
                                        href="javascript:void(0);">Get Directions</a></p>
                                <ul class="clinic-gallery">
                                    @foreach ($fecture_photo as $fecture_photos)
                                    <li>
                                        <a href="#" data-fancybox="gallery">
                                            <img
                                                src="{{ asset('uploads/doctors_features_photos') }}/{{ $fecture_photos->featured_photos_name }}">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="clinic-services">
                                <span>{{ $doctor->hospital_name }}</span>

                            </div>
                        </div>
                    </div>
                    <div class="doc-info-right">
                        <div class="clini-infos">
                            <ul>
                                <li><i class="far fa-thumbs-up"></i> 99%</li>
                                <li><i class="far fa-comment"></i> 35 Feedback</li>
                                <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                <li><i class="far fa-money-bill-alt"></i> $100 per hour </li>
                            </ul>
                        </div>
                        <div class="doctor-action">
                            <a href="javascript:void(0)" class="btn btn-white fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                            <a href="chat.html" class="btn btn-white msg-btn">
                                <i class="far fa-comment-alt"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal"
                                data-target="#voice_call">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal"
                                data-target="#video_call">
                                <i class="fas fa-video"></i>
                            </a>
                        </div>
                        <div class="clinic-booking">
                            <a class="apt-btn" href="{{route('doctor.book.now',$doctor->id)}}">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Doctor Widget -->

        <!-- Doctor Details Tab -->
        <div class="card">
            <div class="card-body pt-0">

                <!-- Tab Menu -->
                <nav class="user-tabs mb-4">
                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#doc_business_hours" data-toggle="tab">Business Hours</a>
                        </li>
                    </ul>
                </nav>
                <!-- /Tab Menu -->

                <!-- Tab Content -->
                <div class="tab-content pt-0">

                    <!-- Overview Content -->
                    <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-12 col-lg-9">

                                <!-- About Details -->
                                <div class="widget about-widget">
                                    <h4 class="widget-title">About Me</h4>
                                    <p>{{ $doctor->about }}</p>
                                </div>
                                <!-- /About Details -->

                                <!-- Education Details -->
                                <div class="widget education-widget">
                                    <h4 class="widget-title">Education</h4>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">{{ $doctor->college}}</a>
                                                        <div>{{$doctor->degree}}</div>
                                                        <span class="time">{{$doctor-> year_of_completion}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">{{ $doctor->college}}</a>
                                                        <div>{{$doctor->degree}}</div>
                                                        <span class="time">{{$doctor-> year_of_completion}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Education Details -->

                                <!-- Experience Details -->
                                {{-- <div class="widget experience-widget">
                                    <h4 class="widget-title">Work & Experience</h4>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">Glowing Smiles Family Dental
                                                            Clinic</a>
                                                        <span class="time">2010 - Present (5 years)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">Comfort Care Dental
                                                            Clinic</a>
                                                        <span class="time">2007 - 2010 (3 years)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">Dream Smile Dental
                                                            Practice</a>
                                                        <span class="time">2005 - 2007 (2 years)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <!-- /Experience Details -->

                                <!-- Awards Details -->
                                <div class="widget awards-widget">
                                    <h4 class="widget-title">Awards</h4>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <p class="exp-year">{{$doctor->year}}</p>
                                                        <h4 class="exp-title">{{$doctor->dwards}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <p class="exp-year">March 2011</p>
                                                        <h4 class="exp-title">Certificate for International Volunteer
                                                            Service</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Proin a ipsum tellus. Interdum et malesuada fames ac ante
                                                            ipsum primis in faucibus.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <p class="exp-year">May 2008</p>
                                                        <h4 class="exp-title">The Dental Professional of The Year Award
                                                        </h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Proin a ipsum tellus. Interdum et malesuada fames ac ante
                                                            ipsum primis in faucibus.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- /Overview Content -->

                    <!-- Locations Content -->
                    <div role="tabpanel" id="doc_locations" class="tab-pane fade">

                        <!-- Location List -->
                        <div class="location-list">
                            <div class="row">

                                <!-- Clinic Content -->
                                <div class="col-md-6">
                                    <div class="clinic-content">
                                        <h4 class="clinic-name"><a href="#"> {{$doctor->hospital_name }}</a>
                                        </h4>
                                        <p class="doc-speciality">{{$doctor->relationwithspeclist->special}}</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(4)</span>
                                        </div>
                                        <div class="clinic-details mb-0">
                                            <h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> {{
                                                $doctor->hospital_address }}
                                                <br><a href="javascript:void(0);">Get Directions</a>
                                            </h5>
                                            <ul>
                                                @foreach ($fecture_photo as $fecture_photos)
                                                <li>
                                                    <a href="#" data-fancybox="gallery">
                                                        <img
                                                            src="{{ asset('uploads/doctors_features_photos') }}/{{ $fecture_photos->featured_photos_name }}">
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Clinic Content -->

                                <!-- Clinic Timing -->

                            </div>
                        </div>
                        <!-- /Location List -->

                        <!-- Location List -->

                        <!-- /Location List -->

                    </div>
                    <!-- /Locations Content -->

                    <!-- Reviews Content -->
                    <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                        <!-- Review Listing -->
                        <div class="widget review-listing">
                            <ul class="comments-list">

                                <!-- Comment List -->
                                <li>
                                    <div class="comment">
                                        <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Richard Wilson</span>
                                                <span class="comment-date">Reviewed 2 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the
                                                doctor</p>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="#" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="#" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Comment Reply -->
                                    <ul class="comments-reply">
                                        <li>
                                            <div class="comment">
                                                <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                    src="assets/img/patients/patient1.jpg">
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author">Charlene Reed</span>
                                                        <span class="comment-date">Reviewed 3 Days ago</span>
                                                        <div class="review-count rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                        Ut enim ad minim veniam.
                                                        Curabitur non nulla sit amet nisl tempus
                                                    </p>
                                                    <div class="comment-reply">
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                        <p class="recommend-btn">
                                                            <span>Recommend?</span>
                                                            <a href="#" class="like-btn">
                                                                <i class="far fa-thumbs-up"></i> Yes
                                                            </a>
                                                            <a href="#" class="dislike-btn">
                                                                <i class="far fa-thumbs-down"></i> No
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- /Comment Reply -->

                                </li>
                                <!-- /Comment List -->

                                <!-- Comment List -->
                                <li>
                                    <div class="comment">
                                        <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                            src="assets/img/patients/patient2.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Travis Trimble</span>
                                                <span class="comment-date">Reviewed 4 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="#" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="#" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- /Comment List -->

                            </ul>

                            <!-- Show All -->
                            <div class="all-feedback text-center">
                                <a href="#" class="btn btn-primary btn-sm">
                                    Show all feedback <strong>(167)</strong>
                                </a>
                            </div>
                            <!-- /Show All -->

                        </div>
                        <!-- /Review Listing -->

                        <!-- Write Review -->
                        <div class="write-review">
                            <h4>Write a review for <strong>Dr. Darren Elder</strong></h4>

                            <!-- Write Review Form -->
                            <form>
                                <div class="form-group">
                                    <label>Review</label>
                                    <div class="star-rating">
                                        <input id="star-5" type="radio" name="rating" value="star-5">
                                        <label for="star-5" title="5 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-4" type="radio" name="rating" value="star-4">
                                        <label for="star-4" title="4 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-3" type="radio" name="rating" value="star-3">
                                        <label for="star-3" title="3 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-2" type="radio" name="rating" value="star-2">
                                        <label for="star-2" title="2 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-1" type="radio" name="rating" value="star-1">
                                        <label for="star-1" title="1 star">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Title of your review</label>
                                    <input class="form-control" type="text"
                                        placeholder="If you could say it in one sentence, what would you say?">
                                </div>
                                <div class="form-group">
                                    <label>Your review</label>
                                    <textarea id="review_desc" maxlength="100" class="form-control"></textarea>

                                    <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span
                                                id="chars">100</span> characters remaining</small></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="terms-accept">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="terms_accept">
                                            <label for="terms_accept">I have read and accept <a href="#">Terms
                                                    &amp; Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Add Review</button>
                                </div>
                            </form>
                            <!-- /Write Review Form -->

                        </div>
                        <!-- /Write Review -->

                    </div>
                    <!-- /Reviews Content -->

                    <!-- Business Hours Content -->
                    <div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">

                                <!-- Business Hours Widget -->
                                <div class="widget business-widget">
                                    <div class="widget-content">
                                        <div class="listing-hours">
                                            <div class="listing-day current">
                                                <div class="day">Today <span>5 Nov 2022</span></div>
                                                <div class="time-items">
                                                    <span class="open-status"><span class="badge bg-success-light">Open
                                                            Now</span></span>
                                                    <span class="time">07:00 AM - 09:00 PM</span>
                                                </div>
                                            </div>
                                            {{-- @foreach ($relationTimeShedul as $relationTimeSheduls)
 --}}

                                            <div class="listing-day">
                                                <div class="day">{{$doctor->relationDoctor}}</div>
                                                <div class="time-items">
                                                    <span class="time"></span>
                                                </div>
                                            </div>
                                            {{-- @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- /Business Hours Widget -->

                            </div>
                        </div>
                    </div>
                    <!-- /Business Hours Content -->

                </div>
            </div>
        </div>
        <!-- /Doctor Details Tab -->





    </div>



</div>
<!-- /Page Content -->
<section class="section section-specialities">
    <div class="container-fluid">
        <div class="row">
            <div class="section-header text-center">

                <h2>Related Doctor ({{$related_doctor->count()}})</h2>

            </div>

            <div class="col-lg-8">

                <div class="doctor-slider slider">

                    @foreach ($related_doctor as $related_doctors)
                    <div class="profile-widget">

                        <div class="doc-img">
                            <a href="{{route('doctor.profile',$related_doctors->id)}}">
                                <img class="img-fluid" alt="User Image"
                                    src="{{asset('uploads/doctor_themble_photo')}}/{{$related_doctors->doctor_themble_photo}}">

                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>



                        <div class="pro-content">

                            <h3 class="title">
                                <a href="{{route('doctor.profile',$related_doctors->id)}}">{{$related_doctors->fname}}
                                    {{$related_doctors->lname}}</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">{{$related_doctors->relationwithspeclist->special}}</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-rating">(17)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>{{$related_doctors->city}}
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i>{{$related_doctors->price}}
                                    <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{route('doctor.profile',$related_doctors->id)}}" class="btn view-btn">View
                                        Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                    <!-- /Doctor Widget -->



                    <!-- /Slider -->

                </div>
            </div>
            {{--
        </div>

    </div> --}}
</section>





<!-- Doctor Widget -->

@endsection
