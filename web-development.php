<?php
$page = 'services';
$page1 = 'web_development';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>Web Development - Indomitech</title>
<style>
    .work-swiper .swiper-slide{
        width: 600px;
    }
    @media only screen and (max-width:650px) {
        .work-swiper .swiper-slide{
            width: 100%;
        }
    }
</style>
</head>

<body>
    <?php include './components/loader.php' ?>

    <?php include './components/fixed_item.php' ?>
    <!-- nav -->
    <?php include './components/nav.php' ?>


    <div id="mobile-app-development" class="service-hero hero">
        <h1 class="service-hero-heading" data-aos="fade-up" data-aos-duration="1500">Web  <span
                class="text-light">Development</span></h1>
    </div>

    <section class="row-2">
        <div class="left img">
            <img src="./img/services/web-img1.jpg" alt="">
        </div>
        <div class="right">
            <div class="content">
                <h3 class="heading">Elevating Your Digital Presence with Custom Web Solutions</h3>
                <p>Welcome to our <a href="#!" class="seo">Web Development</a> service at <a href="#!"
                        class="seo">Indomitech Group</a>. We specialize in crafting bespoke websites and web
                    applications tailored to meet the unique needs of your business. With a focus on innovation and
                    excellence, we strive to deliver exceptional digital solutions that elevate your online presence and
                    drive growth. Whether you're looking to launch a new <a href="#!" class="seo">website</a>, revamp an
                    existing one, or <a href="#!" class="seo">develop a custom web application</a>, our team is here to
                    turn your vision into reality.</p>

                <div class="key_features">

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/development.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Responsive Design</h4>
                            <p>Our websites are designed to be fully responsive, ensuring optimal viewing and
                                interaction across all devices and screen sizes.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/design.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">User-Centric Design</h4>
                            <p>We prioritize user experience (UX) and user interface (UI) design, crafting intuitive
                                interfaces that engage and delight users.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/scalable.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Scalability</h4>
                            <p>Our web solutions are designed to scale with your business, allowing for seamless growth
                                and expansion.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/seo.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">SEO Optimization</h4>
                            <p>We implement SEO best practices to improve your website's visibility and ranking on
                                search engines, driving organic traffic and boosting conversions.</p>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </section>

    <section class="development-process">
        <div class="section_heading">Our Development Process</div>

        <div class="process-container">
            <div class="process p-1" data-aos="fade-out" data-aos-delay="0" data-aos-duration="1500">
                <div class="icon">
                    1
                </div>
                <div class="content-feature">
                    <h4 class="heading">Requirements Gathering</h4>
                    <p>We start by understanding your business goals, target audience, and specific requirements to
                        tailor our approach accordingly.</p>
                </div>
            </div>

            <div class="process p-2" data-aos="fade-out" data-aos-delay="500" data-aos-duration="1500">
                <div class="icon">
                    2
                </div>
                <div class="content-feature">
                    <h4 class="heading">Design & Prototyping</h4>
                    <p>Our design team creates mockups and prototypes based on the gathered requirements, allowing for
                        visualization and feedback before development begins.</p>
                </div>
            </div>

            <div class="process p-3" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="1500">
                <div class="icon">
                    3
                </div>
                <div class="content-feature">
                    <h4 class="heading">Development & Testing</h4>
                    <p>Our development team brings the designs to life, coding the website or web application while
                        adhering to industry best practices. Rigorous testing is conducted to ensure functionality,
                        performance, and security.</p>
                </div>
            </div>

            <div class="process p-4" data-aos="fade-out" data-aos-delay="1500" data-aos-duration="1500">
                <div class="icon">
                    4
                </div>
                <div class="content-feature">
                    <h4 class="heading">Deployment & Launch</h4>
                    <p>Once the development and testing phases are complete, we deploy the website or web application to
                        a live server and ensure a smooth launch.</p>
                </div>
            </div>

            <div class="process p-5" data-aos="fade-out" data-aos-delay="2000" data-aos-duration="1500">
                <div class="icon">
                    5
                </div>
                <div class="content-feature">
                    <h4 class="heading">Ongoing Support & Maintenance</h4>
                    <p>We provide ongoing support and maintenance services to keep your website or web application
                        running smoothly, with regular updates and optimizations as needed.</p>
                </div>
            </div>


        </div>


    </section>

    <section id="works">
        <div class="section_heading">Our Works</div>
        <div class="primary_heading"><span class="text-light">Explore Our</span> Works</div>

        <div class="work-slider">
            <div class="swiper work-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="project-img">
                            <img src="./img/projects/cts.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-img ">
                            <img src="./img/projects/shopsera.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-img">
                            <img src="./img/projects/manpower.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <?php include './components/contact_us_service.php' ?>

    <?php include './components/footer.php' ?>
    <script src="./src/swiper.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./src/multi-animated-counter.js"></script>
    <?php include './components/scripts.php' ?>
    <script>
        const swiper = new Swiper('.swiper', {
            speed: 6000,
            spaceBetween: 20,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

    </script>
</body>

</html>