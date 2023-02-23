@extends('layouts.app')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <title>Homepage</title>


        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/templatemo-medic-care.css') }}" rel="stylesheet">

        <style>
            .imgmama {
                width: 100px;
                height: 200px;
                object-fit: fill;
            }
        </style>
        <!--

                        TemplateMo 566 Medic Care

                        https://templatemo.com/tm-566-medic-care

                        -->
    </head>

    <body id="top">

        <main>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg') }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    Better
                                    <div class="animated-info">
                                        <span class="animated-item">health</span>
                                        <span class="animated-item">days</span>
                                        <span class="animated-item">lives</span>
                                    </div>
                                </h1>

                                <p class="mb-4">Medic Care is a leading healthcare provider committed to delivering
                                    quality medical care to patients in a compassionate and personalized manner</p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="Learn More">Learn More</a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> 01632103754</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Meet Dr. Carson</h2>

                            <p>Protect yourself and others by wearing masks and washing hands frequently. Outdoor is
                                safer than indoor for gatherings or holding events. People who get sick with Coronavirus
                                disease (COVID-19) will experience mild to moderate symptoms and recover without special
                                treatments.</p>

                            <p>So, let us all strive to cultivate kindness and empathy in our daily lives, towards
                                ourselves and others. Let us create a world where compassion and understanding are the
                                norm, and where we can all thrive together.</p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div
                                class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">12</span> Years<br> of
                                    Experiences</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="{{ asset('assets/images/gallery/medium-shot-man-getting-vaccine.jpg') }}"
                                class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src="{{ asset('assets/images/gallery/female-doctor-with-presenting-hand-gesture.jpg') }}"
                                class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Our Timeline</h2>

                        <div class="timeline">
                            <div
                                class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div
                                    class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Get the vaccine</h3>

                                    <p>Getting the vaccine is one of the most effective ways to protect yourself and
                                        those around you from serious illness and death caused by COVID-19.
                                        Vaccines have undergone rigorous testing and have been proven to be safe and
                                        effective in preventing the spread of COVID-19.
                                        By getting vaccinated, you are not only protecting yourself but also doing your
                                        part to help end the pandemic and return to a sense of normalcy.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-07-31 Saturday</time>
                                </div>
                            </div>

                            <div
                                class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div
                                    class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Consulting your health</h3>

                                    <p>Consulting your health with a medical professional is essential for maintaining
                                        your overall well-being and preventing potential health issues.
                                        Regular health check-ups and consultations can help identify and address any
                                        underlying health concerns before they develop into more serious conditions.
                                        It is important to have an open and honest dialogue with your healthcare
                                        provider to ensure that you receive the best possible care and make informed
                                        decisions about your health.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-book timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-07-15 Thursday</time>
                                </div>
                            </div>

                            <div
                                class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div
                                    class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Certified Nurses</h3>

                                    <p>Certified nurses play a critical role in the healthcare industry, providing
                                        high-quality and compassionate care to patients in a variety of settings.
                                        Certification ensures that nurses have the knowledge and skills required to
                                        provide safe and effective care, and allows them to specialize in areas such as
                                        pediatrics, critical care, or gerontology.
                                        By choosing a certified nurse, patients can feel confident in the care they
                                        receive and trust that their health is in capable hands.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-06-28 Monday</time>
                                </div>
                            </div>

                            <div
                                class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div
                                    class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Covid-19 Hospitals</h3>

                                    <p>COVID-19 hospitals are specially designated healthcare
                                        facilities equipped to handle patients infected with the virus and provide the
                                        necessary medical care.
                                        These hospitals have strict protocols in place to prevent the spread of the
                                        virus and ensure the safety of patients and healthcare workers.
                                        COVID-19 hospitals are staffed with highly trained medical professionals who are
                                        working tirelessly to care for those affected by the virus and help bring an end
                                        to the pandemic.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-05-30 Sunday</time>
                                </div>
                            </div>

                            <div
                                class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div
                                    class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Freelance Nursing</h3>

                                    <p>Freelance nursing is a growing field that offers healthcare professionals the
                                        flexibility to work independently and set their own schedules.
                                        Freelance nurses may work on short-term assignments in various healthcare
                                        settings, such as hospitals, clinics, or long-term care facilities.
                                        This type of work allows nurses to gain a range of experiences and skills, while
                                        also enjoying the benefits of a more flexible and autonomous work environment.
                                    </p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-person timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>2021-05-18 Tuesday</time>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="doctors">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Our Doctors</h2>

                            <div class="owl-carousel reviews-carousel">



                                @foreach ($doctors as $index => $doctor)
                                    @php
                                        $fullName = $doctor->firstname . ' ' . $doctor->lastname;
                                    @endphp

                                    <div class="reviews-thumb d-flex flex-wrap align-items-center rounded">


                                        <h3 class=" text-primary primary d-block mt-2 mb-0 w-100"><strong>Dr.
                                                {{ $fullName }}</strong></h3>
                                        <h5 class="text-primary w-100">Specialization: <span
                                                class="text-dark">{{ $doctor['specialization'] }} </span></h5> <br>
                                        <h5 class="text-primary w-100">Qualification: <span
                                                class="text-dark">{{ $doctor['qualification'] }} </span></h5> <br>

                                        <p class="text-dark w-100">Hi! I am Dr. {{ $fullName }}. I am a
                                            Specialized {{ $doctor['specialization'] }}.Hope you'll have a great
                                            experience with me. </p>


                                        <img src="{{ asset('uploaded_images/' . $doctor->picture) }}" class="imgmama"
                                            alt="">





                                    </div>
                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="contactus">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">

                                <h2 class="text-center mb-lg-3 mb-2">Get In Touch</h2>

                                <form role="form" action="{{ route('contact.us') }}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="int" name="phone" id="phone" class="form-control"
                                                placeholder="Phone: 123-456-7890" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="date" id="date" value=""
                                                class="form-control" required>

                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"
                                                required></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Contact
                                                With Us</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <h5 class="mb-lg-4 mb-3">Opening Hours</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                Sunday : Closed
                            </li>

                            <li class="list-group-item d-flex">
                                Monday, Tuesday - Firday
                                <span>8:00 AM - 3:30 PM</span>
                            </li>

                            <li class="list-group-item d-flex">
                                Saturday
                                <span>10:30 AM - 5:30 PM</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3">Our Clinic</h5>

                        <p><a href="mailto:muhtadinmushfiq@gmail.com">muhtadinmushfiq@gmail.com</a>
                        <p>

                        <p>123 Digital Art Street, San Diego, CA 92123</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-2">Socials</h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>

                        <div>
                            <p class="copyright-text">Copyright © Medic Care 2021
                                <br><br>Design by: <a href="https://github.com/MushfiqMuhtadin"
                                    target="_parent">Mushfiq</a>
                            </p>

                        </div>
                    </div>



                </div>
                </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <!--

                        TemplateMo 566 Medic Care

                        https://templatemo.com/tm-566-medic-care

                        -->
    </body>

    </html>
@endsection
