<?php 
$page = 'services';
$page1 = 'app_development';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>Mobile App Development - Indomitech</title>
</head>

<body>
    <?php include './components/loader.php' ?>

    <?php include './components/fixed_item.php' ?>
    <!-- nav -->
    <?php include './components/nav.php' ?>


    <div id="mobile-app-development" class="service-hero hero">
        <h1 class="service-hero-heading" data-aos="fade-up" data-aos-duration="1500">Mobile App <span class="text-light">Development</span></h1>
    </div>

    <section class="row-2">
        <div class="left img">
            <img src="./img/services/app-img1.svg" alt="">
        </div>
        <div class="right">
            <div class="content">
                <h3 class="heading">Elevate Your Business with Custom Solutions</h3>
                <p>Welcome to our <span class="seo">Mobile App Development</span> service at <a href="./" class="seo">Indomitech Group</a>. We specialize in creating bespoke apps for both <a href="#!" class="seo">iOS</a> and <a href="#!" class="seo">Android</a> platforms, tailored to meet the unique needs of your business. With a focus on crafting sleek and <a href="#!" class="seo">user-friendly applications</a>, we strive to engage users <a href="#!" class="seo">effectively</a> and drive growth for your business.</p>

                <div class="key_features">

                <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/intuitive.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Intuitive UI/UX Design</h4>
                            <p>Our team specializes in creating intuitive user interfaces and seamless user experiences, ensuring high engagement and retention rates.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-left" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/cross-platform.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Cross-Platform Compatibility</h4>
                            <p>We develop apps that are compatible with both iOS and Android devices, maximizing your reach and user base.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-up-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/performance.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Performance Optimization</h4>
                            <p>Our apps are optimized for performance, providing smooth functionality and fast loading times to enhance user satisfaction.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-up-left" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/integration.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Integration Capabilities</h4>
                            <p>We seamlessly integrate your app with backend systems, APIs, and third-party services to enhance functionality and provide a seamless user experience.</p>
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
                    <p>We start by understanding your business objectives, target audience, and specific requirements to ensure the app aligns with your goals.</p>
                </div>
            </div>

            <div class="process p-2" data-aos="fade-out" data-aos-delay="500" data-aos-duration="1500">
                <div class="icon">
                    2
                </div>
                <div class="content-feature">
                    <h4 class="heading">Design & Development</h4>
                    <p>Our team creates custom design mockups and prototypes, followed by iterative development cycles to bring your app to life.</p>
                </div>
            </div>

            <div class="process p-3" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="1500">
                <div class="icon">
                    3
                </div>
                <div class="content-feature" >
                    <h4 class="heading">Testing & Quality Assurance</h4>
                    <p>We conduct rigorous testing across various devices and platforms to identify and address any bugs or issues, ensuring a flawless user experience.</p>
                </div>
            </div>

            <div class="process p-4" data-aos="fade-out" data-aos-delay="1500" data-aos-duration="1500">
                <div class="icon">
                    4
                </div>
                <div class="content-feature">
                    <h4 class="heading">Deployment & Support</h4>
                    <p>Once the app is ready, we assist with deployment to the App Store and Google Play Store, providing ongoing support and maintenance to keep your app running smoothly.</p>
                </div>
            </div>

        </div>

    
    </section>

    <!--<section id="works">-->
    <!--    <div class="section_heading">Our Works</div>-->
    <!--    <div class="primary_heading"><span class="text-light">Explore Our</span> Works</div>-->

    <!--    <div class="work-slider">-->
    <!--        <div class="swiper work-swiper">-->
    <!--            <div class="swiper-wrapper">-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/01.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/02.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/06.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/01.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/02.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/06.png" alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--</section>-->

    
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