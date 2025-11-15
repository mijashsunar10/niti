    <!-- Courses Start -->
@extends('template.template')

@section('title', 'Courses at Niti Academy – Learn SEO, Marketing, Design, and Coding')
@section('meta_description', 'Browse all professional courses including SEO, Digital Marketing, Video Editing, MERN Stack, Laravel Development, and Graphic Design.')
@section('meta_keywords', 'SEO course Nepal, MERN Stack Nepal, Laravel training, Graphic Design course Nepal')
@section('og_title', 'Niti Academy Courses')
@section('og_description', 'Choose from top IT and digital courses designed for real-world skills.')
@section('og_image', asset('frontend/logo/image.png'))

@section('pagecontent')


<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">All available Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">

            <!-- SEO Course -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 5.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">SEO Mastery Course</h5>
                        <p class="mb-3">Learn search engine optimization techniques to improve website rankings and boost traffic efficiently.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden ">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">Digital Marketing Course</h5>
                        <p class="mb-3">Gain practical knowledge in social media, SEO, email marketing, and PPC campaigns for real-world impact.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graphic Designing -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 4.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">Graphic Designing Course</h5>
                        <p class="mb-3">Master tools like Photoshop, Illustrator, and Figma to create stunning designs for web and print.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Editing -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 6.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">Video Editing Course</h5>
                        <p class="mb-3">Learn video production and editing skills using Premiere Pro and After Effects for professional content.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MERN Stack Development -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 7.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">MERN Stack Development</h5>
                        <p class="mb-3">Build full-stack web applications using MongoDB, Express, React, and Node.js with hands-on projects.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laravel Development -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 8.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">Laravel Development</h5>
                        <p class="mb-3">Learn Laravel framework for building secure, scalable, and high-performance web applications.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Frontend Development -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 9.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">Frontend Development</h5>
                        <p class="mb-3">Master HTML, CSS, JavaScript, and modern frameworks like React and Vue to build interactive websites.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WordPress Designing & Development -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="course-item bg-light border border-gray-300">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('frontend/courses/image copy 10.png')}}" alt="" style="height: 250px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="text-center p-4 pb-4">
                        <h5 class="mb-3">WordPress Designing & Development</h5>
                        <p class="mb-3">Learn to build responsive, SEO-friendly WordPress websites with themes, plugins, and customizations.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-primary px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Read More</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" class="btn btn-sm btn-success px-4 py-2 border border-gray-200" style="border-radius: 30px; font-size: 1rem;">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Courses End -->


@endsection

    <!-- Courses End -->