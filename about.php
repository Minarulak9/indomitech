<?php $page = 'about';
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

    <section id="fewWords" class="about-hero hero">
        <div class="section-container">
            <div class="about-header">
            <div class="row1">
                    <div class="brand">Indomi<span class="highlight">tech</span></div>
                    <p class="para main">Welcome to <a href="./" class="seo">Indomitech Group</a>, your trusted partner
                        for top-notch digital solutions. With a passion for innovation and excellence, we have
                        established ourselves as a leading provider of website development, digital marketing, app
                        development, software development, and UI/UX design services. Our journey began with a simple
                        yet powerful vision - to revolutionize the digital landscape by creating cutting-edge solutions
                        that empower businesses to thrive in the modern age.</p>
                </div>
                <div class="row2">About <span class="text-light"> Us</span></div>
            </div>
            <div class="contents">
                <!-- <div class="section_heading">A Few Words</div> -->
                <!-- <div class="primary_heading"><span class="text-light">About Our</span> Company</div> -->
                <!-- <div class="texts">
                   
                </div> -->
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

    <section id="vision-mission">
        <div class="content">
            <!-- <div class="section-header">
                <div class="section_heading">Our Vision and Mission</div>
                <div class="primary_heading">Guiding Principles for <span class="text-light">Success</span></div>
            </div> -->

            <div class="vision_mission">
                <div class="left">
                    <h2 class="heading ">Our Vision</h2>
                    <p class="mb-2">Our vision is to lead the digital revolution by providing cutting-edge solutions that empower businesses of all sizes to thrive in the modern age. We envision a future where innovative digital technologies are accessible to every organization, driving growth, efficiency, and success.</p>
                    <ul>
                        <li>Lead the digital revolution</li>
                        <li>Make innovative digital technologies accessible to every organization</li>
                        <li>Drive growth, efficiency, and success in the modern age</li>
                    </ul>
                </div>
                <div class="right">
                    <h2 class="heading ">Our Mission</h2>
                    <p class="mb-2">Our mission is to deliver exceptional digital solutions that exceed client expectations. We commit to understanding our clients' needs, providing personalized services, and fostering long-term partnerships. Through creativity and collaboration, we strive for excellence.</p>
                    <ul>
                        <li>Deliver exceptional digital solutions that exceed client expectations</li>
                        <li>Understand the unique needs of each client and provide personalized services</li>
                        <li>Foster long-term partnerships built on trust and collaboration</li>
                        <li>Continuous innovation, creativity, and dedication to excellence</li>
                        <li>Be the catalyst for our clients' success in the digital world</li>
                    </ul>
                </div>
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