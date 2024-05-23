<?php
$page = 'services';
$page1 = 'e_commerce_service';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>E-Commerce Service - Indomitech</title>
<style>
    .work-swiper .swiper-slide {
        width: 600px;
    }

    @media only screen and (max-width:650px) {
        .work-swiper .swiper-slide {
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
        <h1 class="service-hero-heading" data-aos="fade-up" data-aos-duration="1500">E-Commerce <span
                class="text-light">Service</span></h1>
    </div>

    <section class="row-2">
        <div class="left img">
            <img src="./img/services/web-img1.jpg" alt="">
        </div>
        <div class="right">
            <div class="content">
                <h3 class="heading">Empowering Businesses with Comprehensive E-Commerce Solutions for Digital Success
                </h3>
                <p><a href="https://indomitechgroup.com/" class="seo">Indomitech Group</a> offers comprehensive <a
                        href="#!" class="seo">e-commerce solutions </a> designed to help businesses thrive in the <a
                        href="#!" class="seo">digital marketplace</a>. Whether you're launching a new online store or
                    looking to optimize an existing <a href="#!" class="seo">e-commerce platform</a>, our services cover
                    every aspect of your online retail needs. From <a href="#!" class="seo">website development</a> and
                    <a href="#!" class="seo">payment gateway</a> integration to inventory management and marketing
                    automation, we provide end-to-end solutions that drive sales, enhance <a href="#!"
                        class="seo">customer experiences</a>, and foster long-term growth.</p>

                <div class="key_features">

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/design.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Custom Website Development</h4>
                            <p>We develop bespoke e-commerce websites tailored to your brand identity and business
                                requirements, ensuring a seamless and engaging online shopping experience for your
                                customers.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="600" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/payment.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Payment Gateway Integration</h4>
                            <p>We integrate secure payment gateways that support multiple payment methods, enabling
                                smooth and hassle-free transactions for your customers.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="900" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/management.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Inventory Management</h4>
                            <p>Our e-commerce solutions include robust inventory management systems that streamline
                                product tracking, stock replenishment, and order fulfillment processes.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="1200" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/service.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Marketing Automation</h4>
                            <p>We implement marketing automation tools to personalize customer interactions, drive
                                repeat purchases, and optimize your e-commerce marketing campaigns.</p>
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
                    <h4 class="heading">Requirement Analysis</h4>
                    <p>We conduct a thorough analysis of your business requirements and objectives to determine the most
                        suitable e-commerce solutions for your needs.</p>
                </div>
            </div>

            <div class="process p-2" data-aos="fade-out" data-aos-delay="500" data-aos-duration="1500">
                <div class="icon">
                    2
                </div>
                <div class="content-feature">
                    <h4 class="heading">Platform Selection</h4>
                    <p>We help you select the right e-commerce platform based on your budget, scalability needs, and
                        desired features, whether it's WooCommerce, Shopify, Magento, or custom development.</p>
                </div>
            </div>

            <div class="process p-3" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="1500">
                <div class="icon">
                    3
                </div>
                <div class="content-feature">
                    <h4 class="heading">Design & Development</h4>
                    <p>Our team designs and develops your e-commerce website with a focus on user experience, mobile
                        responsiveness, and conversion optimization.</p>
                </div>
            </div>

            <div class="process p-4" data-aos="fade-out" data-aos-delay="1500" data-aos-duration="1500">
                <div class="icon">
                    4
                </div>
                <div class="content-feature">
                    <h4 class="heading">Testing & Launch</h4>
                    <p>We conduct rigorous testing to ensure your e-commerce platform is fully functional and bug-free
                        before launching it to the public.</p>
                </div>
            </div>

            <div class="process p-5" data-aos="fade-out" data-aos-delay="2000" data-aos-duration="1500">
                <div class="icon">
                    5
                </div>
                <div class="content-feature">
                    <h4 class="heading">Training & Support</h4>
                    <p>We provide training to your team on managing and maintaining your e-commerce platform, along with
                        ongoing support to address any technical issues or updates.</p>
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
                        <div class="project-img ">
                            <img src="./img/projects/shopsera.png" alt="">
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