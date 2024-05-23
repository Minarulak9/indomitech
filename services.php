<?php
$page = 'services';
$page1 = '';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>Indomitech</title>
<style>
    .link-btn{
        font-family: var(--sofia-pro-semi-bold);
    color: var(--black);
    padding: 10px 15px;
    background: var(--primary-color);
    border-radius:18px;
    font-size:.9rem;
    }
</style>
</head>

<body>
    <?php include './components/loader.php' ?>

    <?php include './components/fixed_item.php' ?>
    <!-- nav -->
    <?php include './components/nav.php' ?>


    <section id="services" class="service-page hero">
        <div class="service-container">
            <div class="section_heading">Our Services</div>
            <div class="services">
                <div class="service service-header">
                    <div class="primary_heading">Welcome to <span class="text-light">Kolkata's best Software Services
                        </span> leading with <span class="text-light">innovation.</span></div>
                    <div class="texts">
                        <p class="para main text-light text-sm">We're a dedicated team driving innovation and
                            excellence, offering top-notch website, app, and software development, along with digital
                            marketing and UI/UX design services. Our vision? To transform the digital realm with
                            powerful solutions for businesses to thrive.</p>
                    </div>
                </div>


                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./mobile-app-development"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/app.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Mobile App Development</span></div>
                        <p class="para text-light">Elevate your business with our custom <span class="seo">app
                                development</span> for both <span class="seo">iOS</span> and <span
                                class="seo">Android</span> platforms. We craft sleek, user-friendly apps to engage users
                            and drive growth.
                        </p>
                    </div>
                </div>
                <div class="service service-option" data-aos="fade-out" data-aos-delay="300" data-aos-duration="1500">
                    <a class="open_service" href="./web-development"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/web.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Website Development</span></div>
                        <p class="para text-light">Stand out online with our dynamic <span class="seo">website
                                development</span> services. We create captivating websites optimized for performance
                            and user experience.</p>
                    </div>
                </div>
                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./desktop-development"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/software.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Desktop Development</span></div>
                        <p class="para text-light">Empower your business with our desktop development solutions. We
                            specialize in creating robust and scalable desktop applications tailored to meet your
                            specific requirements.</p>
                    </div>
                </div>

                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./ios-development"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/ios.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">iOS Development</span></div>
                        <p class="para text-light">Take your business to the next level with our iOS development
                            services. We create innovative and engaging iOS applications that captivate users and drive
                            results.</p>
                    </div>
                </div>

                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./ui-ux-designing"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/ui.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">UI/UX Designing</span></div>
                        <p class="para text-light">Transform your digital presence with our UI/UX designing services. We
                            focus on creating intuitive and visually stunning user interfaces that enhance user
                            experience and engagement.</p>
                    </div>
                </div>

                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./graphics-designing"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/graphic.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Graphics Designing</span></div>
                        <p class="para text-light">Stand out from the crowd with our graphics designing services. We
                            create visually appealing graphics that effectively convey your brand message and captivate
                            your audience.</p>
                    </div>
                </div>
                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./digital-marketing"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/digital.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Digital Marketing</span></div>
                        <p class="para text-light">Boost your online presence with our comprehensive <span
                                class="seo">digital marketing</span> strategies. We drive targeted traffic and maximize
                            your ROI.</p>
                    </div>
                </div>

                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./app-maintenance"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/maintanance.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">App Maintenance</span></div>
                        <p class="para text-light">Ensure the smooth operation of your applications with our app
                            maintenance services. We provide regular updates, bug fixes, and performance optimizations
                            to keep your apps running seamlessly.</p>
                    </div>
                </div>


                <div class="service service-option" data-aos="fade-out" data-aos-duration="1500">
                    <a class="open_service" href="./ecommerce-service"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/ecomarce.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">E-Commerce Service</span></div>
                        <p class="para text-light">Unlock new opportunities for your business with our e-commerce
                            services. From website development to digital marketing, we provide end-to-end solutions to
                            help you succeed in the competitive e-commerce landscape.</p>
                    </div>
                </div>

                

                <!-- <div class="service service-option" data-aos="fade-out" data-aos-delay="300" data-aos-duration="1500">
                    <a class="open_service" href="#!"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/software.webp" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Software Development</span></div>
                        <p class="para text-light">Streamline your operations with our tailored <span
                                class="seo">software development</span> solutions. We build efficient systems to meet
                            your business needs.</p>
                    </div>
                </div> -->

            </div>
        </div>
    </section>


    <section id="projects">
        <div class="content">
            <div class="section_heading">Client Feedback</div>
            <div class="primary_heading">Hear What<span class="text-light"> Our Clients</span><span class=""> Have to
                    Say.</span></div>
            <a class="link-btn " target="_blank" href="https://www.google.com/search?q=indomitechgroup&rlz=1C1YTUH_en-GBIN1071IN1071&oq=indomitechgroup&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg8MgYIAhBFGDwyBggDEEUYPDIGCAQQIxgnMgYIBRBFGDsyBggGEEUYPDIGCAcQRRg80gEINTA2MmowajeoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x39f89fcab082ea05:0x5e1d561ed227e8ad,1">View All Reviews</a>

            <div class="project-slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row">
                                <div class="client">
                                    <img src="./img/reviews/taha.png" alt="">
                                    <div class="details">
                                        <div class="name">Taha Ahmed</div>
                                        <div class="date">6 months ago</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <!-- <i class="fa-regular fa-star"></i> -->
                                            <!-- <i class="fa-solid fa-star-half"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <a href="https://g.co/kgs/7pqGgC3" target="_blank" class="source">
                                    <img src="./img/reviews/google.png" alt="">
                                </a>
                            </div>
                            <p class="para">Sumit and his team have truly exceeded our expectations with their
                                outstanding work on our website. From start to finish, their performance has been
                                nothing short of impressive. They demonstrated remarkable speed, precision, and accuracy
                                in delivering our project, and we couldn't be more thrilled with the results they've
                                achieved...
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="client">
                                    <img src="./img/reviews/manpower.png" alt="">
                                    <div class="details">
                                        <div class="name">Manpower India</div>
                                        <div class="date">5 days ago</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <!-- <i class="fa-regular fa-star"></i> -->
                                            <!-- <i class="fa-solid fa-star-half"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <a href="https://g.co/kgs/T8BnFaF" target="_blank" class="source">
                                    <img src="./img/reviews/google.png" alt="">
                                </a>
                            </div>
                            <p class="para">Hi, myself Prabir on behalf of Manpower India would like to share that my
                                company got good services for the lonching new website.so, I give so many thanks to
                                Indomitech group.Thank you...
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="client">
                                    <img src="./img/reviews/hopedowell.png" alt="">
                                    <div class="details">
                                        <div class="name">Hopedwell</div>
                                        <div class="date">6 months ago</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <!-- <i class="fa-regular fa-star"></i> -->
                                            <!-- <i class="fa-solid fa-star-half"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <a href="https://g.co/kgs/nPaECsm" target="_blank" class="source">
                                    <img src="./img/reviews/google.png" alt="">
                                </a>
                            </div>
                            <p class="para">Excellent Service! Most important is that they understand the need of the
                                ustomer and act accordingly. Best of luck for future...
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="client">
                                    <img src="./img/reviews/subham.png" alt="">
                                    <div class="details">
                                        <div class="name">Subham Saha</div>
                                        <div class="date">2 years ago</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <!-- <i class="fa-regular fa-star"></i> -->
                                            <!-- <i class="fa-solid fa-star-half"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <a href="https://g.co/kgs/YSGcfaJ" target="_blank" class="source">
                                    <img src="./img/reviews/google.png" alt="">
                                </a>
                            </div>
                            <p class="para">Really nice experience to work with this company specially they are solving my problems and the delivery time and response time is too good. And recommend it to everyone...
                            </p>
                        </div>


                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>


    <?php include './components/contact_us.php' ?>


    <?php include './components/footer.php' ?>
    <script src="./src/swiper.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./src/multi-animated-counter.js"></script>
    <?php include './components/scripts.php' ?>
    <script>

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
</body>

</html>