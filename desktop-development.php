<?php
$page = 'services';
$page1 = 'desktop_development';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>Desktop App Development - Indomitech</title>
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
        <h1 class="service-hero-heading" data-aos="fade-up" data-aos-duration="1500">Desktop App <span
                class="text-light">Development</span></h1>
    </div>

    <section class="row-2">
        <div class="left img">
            <img src="./img/services/desktop-img1.svg" alt="">
        </div>
        <div class="right">
            <div class="content">
                <h3 class="heading">Custom Desktop Application Development for Enhanced Business Productivity</h3>
                <p>At <a href="https://indomitechgroup.com/" class="seo">Indomitech Group</a>, we specialize in creating robust and scalable <a href="#!" class="seo">desktop applications</a> tailored to meet your business needs. Our team of <a href="#!" class="seo">experienced developers</a> uses the <a href="#!" class="seo">latest technologies</a> to deliver <a href="#!" class="seo">high-performance</a> desktop solutions that enhance productivity and user experience. Whether you need a simple utility app or a complex enterprise solution, we have the expertise to bring your vision to life.</p>

                <div class="key_features">
                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/custom-solutions.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Custom Solutions</h4>
                            <p>We develop desktop applications tailored to your specific business requirements, ensuring a perfect fit for your operational needs.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="600" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/secure.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Secure and Reliable</h4>
                            <p>Our desktop applications are built with security and reliability in mind, incorporating the latest security protocols and best practices.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="900" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/scalable.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Scalable Architecture</h4>
                            <p>Designed to grow with your business, our applications feature scalable architectures that can handle increasing workloads and data volumes.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="1200" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/integration.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Seamless Integration</h4>
                            <p>We ensure our desktop solutions integrate seamlessly with your existing systems, enhancing overall functionality and efficiency.</p>
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
                    <p>We start by understanding your business goals, target audience, and specific requirements to tailor our approach accordingly.</p>
                </div>
            </div>

            <div class="process p-2" data-aos="fade-out" data-aos-delay="500" data-aos-duration="1500">
                <div class="icon">
                    2
                </div>
                <div class="content-feature">
                    <h4 class="heading">Design & Prototyping</h4>
                    <p>Our design team creates mockups and prototypes based on the gathered requirements, allowing for visualization and feedback before development begins.</p>
                </div>
            </div>

            <div class="process p-3" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="1500">
                <div class="icon">
                    3
                </div>
                <div class="content-feature">
                    <h4 class="heading">Development & Testing</h4>
                    <p>Our development team brings the designs to life, coding the desktop application while adhering to industry best practices. Rigorous testing is conducted to ensure functionality, performance, and security.</p>
                </div>
            </div>

            <div class="process p-4" data-aos="fade-out" data-aos-delay="1500" data-aos-duration="1500">
                <div class="icon">
                    4
                </div>
                <div class="content-feature">
                    <h4 class="heading">Deployment & Launch</h4>
                    <p>Once the development and testing phases are complete, we deploy the desktop application to the necessary environment and ensure a smooth launch.</p>
                </div>
            </div>

            <div class="process p-5" data-aos="fade-out" data-aos-delay="2000" data-aos-duration="1500">
                <div class="icon">
                    5
                </div>
                <div class="content-feature">
                    <h4 class="heading">Ongoing Support & Maintenance</h4>
                    <p>We provide ongoing support and maintenance services to keep your desktop application running smoothly, with regular updates and optimizations as needed.</p>
                </div>
            </div>


        </div>


    </section>

    <!-- <section id="works">
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

    </section> -->


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