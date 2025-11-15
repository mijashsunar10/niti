   <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{asset('frontend/logo/image.png')}}" alt="Niti Academy" style="height: 60px; " >
        <!-- Or keep the text if you want -->
        <!-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Niti Academy</h2> -->
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/courses" class="nav-item nav-link">Courses</a>
            <a href="/team" class="nav-item nav-link">Team</a>
            {{-- <a href="/testmonial" class="nav-item nav-link">Testimonial</a> --}}
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxyObwLgFyZyRSY6j3V6sjWr4KVPhlMYKQS2LikPSN6GIpJQ/viewform?usp=sharing&ouid=105775179158701032258" target="_blank" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Register Now
            <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
<!-- Navbar End -->

<!-- Add spacing to prevent content from being hidden under fixed navbar -->
<div style="height: 80px;"></div>
