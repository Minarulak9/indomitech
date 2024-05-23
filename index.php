<?php 
$page = 'home';
$page1 = '';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>Indomitech</title>
</head>

<body>
    <?php include './components/loader.php' ?>

    <?php include './components/fixed_item.php' ?>
    <!-- nav -->
    <?php include './components/nav.php' ?>
    <div id="hero" class="hero">
        <div class="content">
            <div class="texts" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                <div class="demo-up">
                    <span class="server-status" type="up"></span>
                    <span>We are ready to work with you</span>
                </div>
                <div class="hero-heading"><span class="text-light">Building</span> The Future With</div>
                <div class="d-flex highlight-texts">
                    <div class="heighlight-text service-txt"></div>
                </div>
                <div class="technology">
                    <div class="tabs">
                        <div class="tab active" id="tab1">Our Commitments</div>
                        <div class="tab" id="tab2">What Our Clients Say</div>
                    </div>
                    <div class="tabs-content">
                        <div class="tab-content active" data-tab="tab1">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper commitmentSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="icon"><img src="./img/icons/service.png" alt=""></div>
                                        <h4 class="heading">Quality Assurance Commitment</h4>
                                        <p class="para">At [Company Name], we prioritize quality assurance at every
                                            stage. We guarantee robust, reliable software solutions through rigorous
                                            testing, continuous improvement, and adherence to industry best practices.
                                        </p>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="icon"><img src="./img/icons/service.png" alt=""></div>
                                        <h4 class="heading">Customer Satisfaction Guarantee</h4>
                                        <p class="para">Our commitment to customer satisfaction is unwavering. We strive
                                            to exceed expectations, provide exceptional support, and tailor solutions to
                                            meet the unique needs of every client, ensuring their success.</p>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="icon"><img src="./img/icons/service.png" alt=""></div>
                                        <h4 class="heading">Ethical Standards Pledge</h4>
                                        <p class="para">Upholding ethical standards is fundamental to our values. We
                                            promise transparency, honesty, and integrity in all our interactions. Trust
                                            [Company Name] for ethical business practices and responsible
                                            decision-making.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab="tab2">
                            <div class="swiper feedbacks">
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
                                        <p class="para">Sumit and his team have truly exceeded our expectations with their outstanding work on our website. From start to finish, their performance has been nothing short of impressive. They demonstrated remarkable speed, precision, and accuracy in delivering our project, and we couldn't be more thrilled with the results they've achieved...
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
                                        <p class="para">Hi, myself Prabir on behalf of Manpower India would like to share that my company got good services for the lonching new website.so, I give so many thanks to Indomitech group.Thank you...
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
                                        <p class="para">Excellent Service! Most important is that they understand the need of the  ustomer and act accordingly. Best of luck for future...
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img" data-aos="fade-up-left" data-aos-delay="300" data-aos-duration="1500">
            <img src="./img/hero_img.webp" alt="">
        </div>
    </div>

    <section id="fewWords">
        <div class="section-container">
            <div class="contents">
                <div class="section_heading">A Few Words</div>
                <div class="primary_heading"><span class="text-light">About Our</span> Company</div>
                <div class="texts">
                    <p class="para main">Welcome to <a href="./" class="seo">Indomitech Group</a>, your trusted partner
                        for top-notch digital solutions. With a passion for innovation and excellence, we have
                        established ourselves as a leading provider of website development, digital marketing, app
                        development, software development, and UI/UX design services. Our journey began with a simple
                        yet powerful vision - to revolutionize the digital landscape by creating cutting-edge solutions
                        that empower businesses to thrive in the modern age.</p>
                </div>
                <div class="few-word-points">
                    <div class="point" data-aos="fade-down-right" data-aos-duration="1500">
                        <div class="num"><span class="counter" data-TargetNum="20">0</span>+</div>
                        <div class="para"><span class="seo">proficient tech team members</span> lead the charge in
                            creating apps, websites, and software solutions.</div>
                    </div>
                    <div class="point" data-aos="fade-down-left" data-aos-duration="1500">
                        <div class="num"><span class="counter" data-TargetNum="65">0</span>+</div>
                        <div class="para"><span class="seo">completed projects</span>, our team demonstrates expertise
                            in delivering top-tier apps, websites, and software solutions, ensuring client satisfaction.
                        </div>
                    </div>
                    <div class="point" data-aos="fade-up-right" data-aos-duration="1500">
                        <div class="num"><span class="counter" data-TargetNum="25">0</span>+</div>
                        <div class="para"><span class="seo">satisfied clients</span>, we showcase our proficiency in
                            delivering exceptional apps, websites, and software solutions, exceeding expectations with
                            every project.</div>
                    </div>
                    <div class="point" data-aos="fade-up-left" data-aos-duration="1500">
                        <div class="num"><span class="counter" data-TargetNum="5">0</span>+</div>
                        <div class="para"><span class="seo">years of experience</span>, our team excels in crafting
                            outstanding apps, websites, and software solutions, ensuring excellence in every digital
                            endeavor.</div>
                    </div>
                </div>
            </div>
            <div class="img">
                <img src="./img/few_words.webp" alt="">
            </div>
        </div>
    </section>

    <section id="services">
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
                                development</span> for both <span class="seo">iOS</span> and <span class="seo">Android</span> platforms. We craft sleek, user-friendly apps to engage users and drive growth.
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
                <div class="service service-option" data-aos="fade-out" data-aos-delay="300" data-aos-duration="1500">
                    <a class="open_service" href="./desktop-development"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/software.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">Software Development</span></div>
                        <p class="para text-light">Streamline your operations with our tailored <span
                                class="seo">software development</span> solutions. We build efficient systems to meet
                            your business needs.</p>
                    </div>
                </div>
                <div class="service service-option" data-aos="fade-out" data-aos-delay="600" data-aos-duration="1500">
                    <a class="open_service" href="./ui-ux-designing"><i class="fa-solid fa-arrow-right"></i></a>
                    <div class="img">
                        <img src="./img/services/uiux.webp" loading="lazy" alt="">
                    </div>
                    <div class="content">
                        <div class="heading"> <span class="text-light">UI/UX Design</span></div>
                        <p class="para text-light">Enhance user satisfaction with our intuitive <span class="seo">UI/UX
                                design</span> services. We create visually stunning interfaces for optimal user
                            experience.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="why_us">
        <div class="bubble1"></div>
        <div class="bubble2"></div>
        <div class="bubble3"></div>
        <div class="bubble4"></div>
        <div class="section-container">
            <div class="contents">
                <div class="section_heading">Why Choose Us</div>
                <div class="primary_heading"><span class="text-light">Elevate</span> Your Business with Our Innovative
                    <span class="text-light">Digital Solutions</span> Designed for <span
                        class="text-light">Success.</span> </div>
                <div class="texts">
                    <p class="para main text-light text-sm">We're a dedicated team driving innovation and
                        excellence, offering top-notch website, app, and software development, along with digital
                        marketing and UI/UX design services. Our vision? To transform the digital realm with
                        powerful solutions for businesses to thrive.</p>

                    <div class="why_options">
                        <div class="option" data-aos="fade-right" data-aos-duration="1500">
                            <div class="content">
                                <div class="heading">Proven Track Record</div>
                                <p class="para text-light">With over 65 completed projects and 25+ satisfied clients,
                                    Indomitech Group demonstrates a strong track record of delivering successful digital
                                    solutions. This extensive portfolio showcases their experience and expertise in the
                                    field.</p>
                            </div>
                        </div>

                        <div class="option" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500">
                            <div class="content">
                                <div class="heading">Proficient Tech Team</div>
                                <p class="para text-light">The presence of 20+ proficient tech team members underscores
                                    the company's commitment to excellence. A skilled and experienced team is essential
                                    for developing high-quality apps, websites, and software solutions.</p>
                            </div>
                        </div>

                        <div class="option" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500">
                            <div class="content">
                                <div class="heading">Client Satisfaction</div>
                                <p class="para text-light">The high number of satisfied clients (25+) is a testament to
                                    Indomitech Group's commitment to delivering exceptional results. Client satisfaction
                                    is a key indicator of the company's reliability, professionalism, and ability to
                                    meet and exceed expectations.</p>
                            </div>
                        </div>
                        <div class="option" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1500">
                            <div class="content">
                                <div class="heading">Quality Assurance</div>
                                <p class="para text-light">With a strong emphasis on delivering top-tier solutions,
                                    Indomitech Group likely implements robust quality assurance processes to ensure that
                                    each project meets high standards of functionality, performance, and reliability.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
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
        var typing = new Typed(".service-txt", {
            strings: ["", "Web Development.", "Desktop Development.", "IOS Development.", "UI/UX Designing.", "Graphics Designing.", "Maintenance Service.", "Digital Marketing."],
            startDelay: 1000,
            typeSpeed: 60,
            backDelay: 2000,
            backSpeed: 60,
            loop: true,
        });

        var commitmentSwiper = new Swiper(".commitmentSwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            spaceBetween: 30,
            autoplay: true,
            loop: true,
        });
        var feedback = new Swiper(".feedbacks", {
            slidesPerView: "auto",
            spaceBetween: 30,
            autoplay: true,
            loop: true,
        });







    </script>
</body>

</html>