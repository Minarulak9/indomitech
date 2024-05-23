<div id="top-nav">
    
</div>

<nav id="navbar">
    <a href="./" class="logo">
        <!-- <img src="./img/logo.png" alt="logo"> -->
        <div class="brand">Indomitech <span>Group</span></div>
    </a>
    <ul class="links">
        <li>
            <a href="./" class="link <?php if($page=='home') echo 'active'?>">Home</a>
        </li>
        <li>
            <a href="./about" class="link <?php if($page=='about') echo 'active'?>">About Us</a>
        </li>
        <li class="dropdown">
            <a href="./services" class="link <?php if($page=='services') echo 'active'?>">Services</a>
            <ul class="dropdown-menu">
               <li class="<?php if($page1=='app_development') echo 'active'?>">
                   <a href="./mobile-app-development" class="link">App Development</a>
               </li>

               <li class="<?php if($page1=='web_development') echo 'active'?>">
                   <a href="./web-development" class="link ">Web Development</a>
               </li>

               <li class="<?php if($page1=='desktop_development') echo 'active'?>">
                   <a href="./desktop-development" class="link ">Desktop Development</a>
               </li>

               <li class="<?php if($page1=='ios_development') echo 'active'?>">
                   <a href="./ios-development" class="link ">iOS Development</a>
               </li>

               <li class="<?php if($page1=='ui_ux_designing') echo 'active'?>">
                   <a href="./ui-ux-designing" class="link ">UI/UX Designing</a>
               </li>

               <li class="<?php if($page1=='graphics_designing') echo 'active'?>">
                   <a href="./graphics-designing" class="link ">Graphics Designing</a>
               </li>

               <li class="<?php if($page1=='app_maintenance') echo 'active'?>">
                   <a href="./app-maintenance" class="link ">App Maintenance</a>
               </li>

               <li class="<?php if($page1=='digital_marketing') echo 'active'?>">
                   <a href="./digital-marketing" class="link">Digital Marketing</a>
               </li>

               <li class="<?php if($page1=='e_commerce_service') echo 'active'?>">
                   <a href="./ecommerce-service" class="link">E-Commerce Service</a>
               </li>

            </ul>
        </li>
        <li>
            <a href="https://blogs.indomitechgroup.com/" class="link <?php if($page=='') echo 'active'?>">Blogs</a>
        </li>
        <li>
            <a href="./#contact" class="link-btn <?php if($page=='') echo 'active'?>">Contact Us</a>
        </li>
    </ul>
    <button class="menu nav-toggler" aria-label="Main Menu">
      <svg width="70" height="55" viewBox="0 0 100 100">
        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
        <path class="line line2" d="M 20,50 H 80" />
        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      </svg>
    </button>
</nav>