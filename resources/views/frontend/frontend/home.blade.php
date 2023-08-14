@extends('layouts.frontend')
@section('body')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>Dipendra Thakuri</h1>
        <p>I'm <span class="typed" data-typed-items="AI Enthusiast, Researcher at Jeonbuk National University, Mechanical Engineer"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>Greetings! I am a Mechanical Engineering pass out and currently pursuing research on AI in Jeonbuk National Univerisity, passionate about unraveling the mysteries of artificial intelligence. With a blend of curiosity and perseverance, I embark on a journey to push the boundaries of AI, exploring its profound potential to transform our world. Guided by innovation, I thrive in collaborative environments, continuously seeking novel solutions to intricate challenges. Join me as we delve into the captivating realm of AI, where innovation knows no bounds.</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="frontend/assets/img/pp.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Mechanical Engineer &amp; Researcher at Jeonbuk National University.</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <a href="https://www.thakuridipendra.com.np" target="_blank">www.thakuridipendra.com.np</a></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Jeonju-si, Jeollabuk-do, South Korea</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Pursuing Master's</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a href="mailto:thakuridipendra@jbnu.ac.kr">thakuridipendra@jbnu.ac.kr</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6" data-aos="fade-up">

                    <div class="progress">
                        <span class="skill">Python <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Machine Learning <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="progress">
                        <span class="skill">Automobile Engineer <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>


                    <div class="progress">
                        <span class="skill">Deep Learning <i class="val">40%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>
    </section><!-- End Skills Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>
            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('submit.form') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection