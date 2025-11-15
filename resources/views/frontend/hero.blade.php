@extends('template.template')
@section('title', 'Niti Academy – Best IT Training Institute in Nepal')
@section('meta_description', 'Niti Academy offers professional IT courses including SEO, Digital Marketing, Graphic Design, MERN Stack, Laravel, and Video Editing.')
@section('meta_keywords', 'IT training Nepal, SEO course Nepal, Digital Marketing course, Web Development Nepal, Niti Academy')
@section('og_title', 'Niti Academy – Professional IT Courses in Nepal')
@section('og_description', 'Learn SEO, Marketing, Designing, and Programming from expert instructors at Niti Academy.')
@section('og_image', asset('frontend/logo/image.png'))


@section('pagecontent')

<style>
    .owl-carousel-item {
    min-height: 100vh;
    position: relative;
}
.owl-carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

</style>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
           
          <div class="owl-carousel-item position-relative" style="min-height: 100vh;">
            <img class="img-fluid w-100 " style="height: 100vh" src="{{asset('frontend/niti/image.png')}}" alt="" style="object-fit: cover;">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                                Professional IT Courses for Everyone
                            </h5>
                            <h1 class="display-3 text-white animated slideInDown">
                                Learn High-Demand Skills With Expert Instructors
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                From web development to advanced programming, Niti Academy provides hands-on training to help you build a successful tech career.
                            </p>
                            <a href="/courses" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Courses</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
    <!-- Carousel End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    
                    <!-- Skilled Instructors -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-chalkboard-teacher text-primary mb-4"></i>
                                <h5 class="mb-3">Expert Instructors</h5>
                                <p>Learn from experienced and certified instructors dedicated to helping you grow academically and professionally.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Online + Offline Classes -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-laptop text-primary mb-4"></i>
                                <h5 class="mb-3">Online & Offline Classes</h5>
                                <p>Flexible learning options with high-quality online sessions and well-structured in-person classes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Practical Projects -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-project-diagram text-primary mb-4"></i>
                                <h5 class="mb-3">Practical Projects</h5>
                                <p>Hands-on project-based learning to build real-world skills and strengthen your portfolio.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Resource Library -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book text-primary mb-4"></i>
                                <h5 class="mb-3">Resource Library</h5>
                                <p>Access a wide collection of books, notes, and learning materials to support your academic journey.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('frontend/niti/image copy 3.png')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                   <h1 class="mb-4">Welcome to Niti Academy</h1>
                    <p class="mb-4">
                        At Niti Academy, we are committed to providing top-quality education and skill development programs that empower students to excel academically and professionally. Our courses are designed to make learning engaging, practical, and accessible to everyone.
                    </p>
                    <p class="mb-4">
                        We combine expert instruction, hands-on projects, and innovative teaching methods to help learners gain real-world skills. Whether you prefer online or in-person classes, Niti Academy ensures a flexible and supportive learning experience for every student.
                    </p>

                   <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online & Offline Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Hands-on Projects</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Resource Library</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Career Guidance & Mentorship</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Intership Opportunities</p>
                    </div>
                </div>

                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Different Courses</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="/courses">
                                <img class="img-fluid" src="{{asset('frontend/img/cat-1.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    {{-- <small class="text-primary">49 Courses</small> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="/courses">
                                <img class="img-fluid" src="{{asset('frontend/img/cat-2.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    {{-- <small class="text-primary">49 Courses</small> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="/courses">
                                <img class="img-fluid" src="{{asset('frontend/img/cat-3.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    {{-- <small class="text-primary">49 Courses</small> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="/courses">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('frontend/img/cat-4.jpg')}}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">SEO and Digital Marketing</h5>
                            {{-- <small class="text-primary">49 Courses</small> --}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


        <!-- Courses Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                    <h1 class="mb-5">Popular Courses</h1>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Course Item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/courses/image copy 2.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="text-center p-4 pb-4">
                                <h5 class="mb-4">Web Design & Development Course For Beginners</h5>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="#" class="btn btn-sm btn-primary px-4 py-2" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                                    <a href="#" class="btn btn-sm btn-success px-4 py-2" style="border-radius: 30px; font-size: 1rem;">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/courses/image copy 3.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="text-center p-4 pb-4">
                                <h5 class="mb-4">Digital Marketing Course From Beginners and Intermediate</h5>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="#" class="btn btn-sm btn-primary px-4 py-2" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                                    <a href="#" class="btn btn-sm btn-success px-4 py-2" style="border-radius: 30px; font-size: 1rem;">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/courses/image copy 4.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="text-center p-4 pb-4">
                                <h5 class="mb-4">Graphics Designing Course From Beginner To Advanced</h5>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="#" class="btn btn-sm btn-primary px-4 py-2" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                                    <a href="#" class="btn btn-sm btn-success px-4 py-2" style="border-radius: 30px; font-size: 1rem;">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CENTERED BUTTON -->
                <div class="text-center mt-5">
                    <a href="/courses" class="btn btn-primary px-5 py-3" style="border-radius: 40px; font-size: 1.2rem;">
                        View All Courses
                    </a>
                </div>

            </div>
        </div>
        <!-- Courses End -->


    {{-- <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('frontend/img/team-1.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('frontend/img/team-2.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('frontend/img/team-3.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('frontend/img/team-4.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> --}}


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
                <h1 class="mb-5">What Our Students Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <!-- Testimonial Item 1 -->
                <div class="testimonial-item text-center px-3">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/testimonial-1.jpg')}}" 
                        style="width: 90px; height: 90px; object-fit: cover;">
                    <h5 class="mb-1 fw-bold">Khusi Sharma</h5>
                    <p class="text-muted mb-3">Web Development Student</p>
                    <div class="testimonial-text bg-light text-center p-4 rounded shadow-sm">
                        <p class="mb-0 fst-italic">“Niti Academy helped me gain practical skills in web development. The instructors are very supportive and the projects are industry-relevant.”</p>
                    </div>
                </div>

                <!-- Testimonial Item 2 -->
                <div class="testimonial-item text-center px-3">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/testimonial-2.jpg')}}" 
                        style="width: 90px; height: 90px; object-fit: cover;">
                    <h5 class="mb-1 fw-bold">Sagar Koirala</h5>
                    <p class="text-muted mb-3">Digital Marketing Student</p>
                    <div class="testimonial-text bg-light text-center p-4 rounded shadow-sm">
                        <p class="mb-0 fst-italic">“The digital marketing course was comprehensive and practical. I feel confident applying my skills in real projects now.”</p>
                    </div>
                </div>

                <!-- Testimonial Item 3 -->
                <div class="testimonial-item text-center px-3">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/testimonial-3.jpg')}}" 
                        style="width: 90px; height: 90px; object-fit: cover;">
                    <h5 class="mb-1 fw-bold">Rajan Thapa</h5>
                    <p class="text-muted mb-3">Graphic Design Student</p>
                    <div class="testimonial-text bg-light text-center p-4 rounded shadow-sm">
                        <p class="mb-0 fst-italic">“I loved the hands-on approach at Niti Academy. The graphic design assignments challenged me and improved my portfolio.”</p>
                    </div>
                </div>

                <!-- Testimonial Item 4 -->
                <div class="testimonial-item text-center px-3">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('frontend/img/testimonial-4.jpg')}}" 
                        style="width: 90px; height: 90px; object-fit: cover;">
                    <h5 class="mb-1 fw-bold">Maya Gurung</h5>
                    <p class="text-muted mb-3">Python Programming Student</p>
                    <div class="testimonial-text bg-light text-center p-4 rounded shadow-sm">
                        <p class="mb-0 fst-italic">“The Python course at Niti Academy was structured perfectly. I was able to build real applications by the end of the course.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

            



@endsection