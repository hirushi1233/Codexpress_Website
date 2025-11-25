@extends('layouts.app')

@section('title', 'CodeXpress - Home')

@section('content')
    <!-- main banner part -->
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="owl-carousel owl-banner">
                                <div class="item header-text">
                                    <h6>Welcome To</h6>
                                    <h2>CodeXpress <em>IT </em> <span>Solutions  </span></h2>
                                    <p>At codeXpress, we offer Quality Digital Services You Really Need – including web development, mobile apps, POS systems, and IT consulting. Fast. Affordable. Reliable.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#contact">Message Us Now</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i> 0777674308</a>
                                        </div>
                                    </div>

                                    <!-- Running Text Component -->
                                    <div class="running-text-container">
                                        <div class="running-text-wrapper">
                                            <div class="running-text">
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="running-text">
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item header-text">
                                    <h6>King Of IT Solutions</h6>
                                    <h2> An  <em> Innovative </em>     IT Solutions  <span> Agency</span></h2>
                                    <p>At our Innovative IT Solutions Agency, we specialize in delivering cutting-edge technology services tailored to meet your business goals. From custom web development and mobile applications to cloud integration and IT consulting, we help you stay ahead in a rapidly evolving digital world. Our expert team ensures quality, efficiency, and long-term support — turning your ideas into reality.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#video">Find Out More</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i> 0777674308</a>
                                        </div>
                                    </div>

                                    <!-- Running Text Component -->
                                    <div class="running-text-container">
                                        <div class="running-text-wrapper">
                                            <div class="running-text">
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="running-text">
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item header-text">
                                    <h6>Online Marketing</h6>
                                    <h2>Quality<em>Degital Services</em> you really <span>NEED </span>!</h2>
                                    <p>You are NOT allowed to redistribute this template ZIP file on any Free CSS collection websites. Contact us for more info. Thank you.</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#services">Our Services</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="#"><i class="fa fa-phone"></i> 0777674308</a>
                                        </div>
                                    </div>

                                    <!-- Running Text Component -->
                                    <div class="running-text-container">
                                        <div class="running-text-wrapper">
                                            <div class="running-text">
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="running-text">
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                                <span>★ King of IT Solutions</span>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="services" class="our-services section">
        <div class="services-right-dec">
            <img src="{{ asset('assets/images/services-right-dec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="services-left-dec">
                <img src="assets/images/services-left-dec.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>We <em>Provide</em> The Best Service With <span>Our Tools</span></h2>
                        <span>Our Services</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-services">
                        <div class="item">
                            <h4>Web Design</h4>
                            <div class="icon"><img src="assets/images/service-icon-01.png" alt=""></div>
                            <p>Modern, responsive layouts that capture your brand’s personality and engage customers on any device.</p>
                        </div>
                        <div class="item">
                            <h4>Web Development</h4>
                            <div class="icon"><img src="assets/images/service-icon-02.png" alt=""></div>
                            <p>Full-stack Laravel, React & API solutions built for speed, security and effortless scalability.</p>
                        </div>
                        <div class="item">
                            <h4>UI / UX Design and Development</h4>
                            <div class="icon"><img src="assets/images/service-icon-03.png" alt=""></div>
                            <p>Human-centred interface design that boosts usability, conversions and customer satisfaction.</p>
                        </div>
                        <div class="item">
                            <h4>Web Security</h4>
                            <div class="icon"><img src="assets/images/service-icon-04.png" alt=""></div>
                            <p>Security audits, hardening and 24 / 7 monitoring to keep your website and customer data safe.</p>
                        </div>
                        <div class="item">
                            <h4>Digital Marketing</h4>
                            <div class="icon"><img src="assets/images/service-icon-01.png" alt=""></div>
                            <p>SEO, social media and targeted ad campaigns that grow traffic and turn visitors into loyal customers</p>
                        </div>
                        <div class="item">
                            <h4>Web Development Course</h4>
                            <div class="icon"><img src="assets/images/service-icon-02.png" alt=""></div>
                            <p>Hands-on Sinhala-medium course covering HTML, CSS, JavaScript & Laravel — only Rs 2,000 per month.</p>
                        </div>
                        <div class="item">
                            <h4>Best Content Ideas for your pages</h4>
                            <div class="icon"><img src="assets/images/service-icon-03.png" alt=""></div>
                            <p>Feel free to use this template for your business</p>
                        </div>
                        <div class="item">
                            <h4>Optimizing Speed for your web pages</h4>
                            <div class="icon"><img src="assets/images/service-icon-04.png" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Accessibility for mobile viewing</h4>
                            <div class="icon"><img src="assets/images/service-icon-01.png" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Content Ideas for your next project</h4>
                            <div class="icon"><img src="assets/images/service-icon-02.png" alt=""></div>
                            <p>Feel free to use this template for your business</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.png" alt="Two Girls working together">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2><span>About </span></h2><br><br>
                        <h2><em>CodeXpress</em>   IT Solutions </h2>
                        <p>Founded in 2020, codeXpress is a forward-thinking IT solutions agency based in Sri Lanka, offering a wide range of services including web development, POS systems, ERP solutions, and digital media services. Our goal is to help businesses go digital with smart, scalable, and user-friendly technology.</p>
                           <p> With over 5 years of experience and a passion for innovation, we’ve helped many clients streamline their operations and grow online. Our commitment to quality, support, and continuous learning makes us a trusted tech partner for businesses of all sizes.</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-01.png" alt="">
                                        </div>
                                        <div class="count-digit">2500</div>
                                        <div class="count-title">successful businesses</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-02.png" alt="">
                                        </div>
                                        <div class="count-digit">120</div>
                                        <div class="count-title">Total Happy Students</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-03.png" alt="">
                                        </div>
                                        <div class="count-digit">99</div>
                                        <div class="count-title">Satisfied Clients</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="portfolio" class="our-portfolio section">
        <div class="portfolio-left-dec">
            <img src="assets/images/portfolio-left-dec.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our Recent <em>Projects</em> &amp; Case Studies <span>for Clients</span></h2>
                        <span>Our Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-portfolio">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/portfolio-01.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent"><h4>First Project</h4></a>
                                        <span>Web Design</span><br>
                                        <span>Web Analysis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/portfolio-02.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#"><h4>Second Project</h4></a>
                                        <span>Cyber Security </span><br>
                                        <span>Cyber Security Core</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/portfolio-03.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent"><h4>Third Project</h4></a>
                                        <span>Mobile Info</span><br>
                                        <span>Upcomming Phone</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/portfolio-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#"><h4>Fourth Project</h4></a>
                                        <span>Web Development</span><br>
                                        <span>Web Analysis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/portfolio-05.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#"><h4>Fifth Project</h4></a>
                                        <span>Digital Marketing</span><br>
                                        <span>Digital Analysis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/portfolio-06.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#"><h4>Sixth Project</h4></a>
                                        <span>Keyword Research</span><br>
                                        <span>Keyword Analysis</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="pricing" class="pricing-tables">
        <div class="tables-left-dec">
            <img src="assets/images/tables-left-dec.png" alt="">
        </div>
        <div class="tables-right-dec">
            <img src="assets/images/tables-right-dec.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Hear From Our <em>Happy</em> <span>Clients</span></h2>
                        <span>Client Testimonials</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item first-item">
                        <h4>Kasun Perera</h4>
                        <em>CEO, TechStart Solutions</em>
                        <span style="color: #34d710; font-size: 18px;">★★★★☆</span>
                        <p>CodeXpress delivered exactly what we needed. their web design skills are top-notch and they completed our project ontime</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item second-item">
                        <h4>Thilina Jayasinghe</h4>
                        <em>Founder, Wilson Enterprises</em>
                        <span style="color: #34d710; font-size: 18px;">★★★★☆</span>
                        <p>Excellent work from CodeXpress web solutions. they understood our requirements and delivered a modern, responsive website.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item third-item">
                        <h4>Priyanka Wijesinghe</h4>
                        <em>Manager, GreenTech Labs</em>
                        <span style="color: #34d710; font-size: 18px;">★★★★☆</span>
                        <p>Very satisfied with codeXpress's web design services. they were respinsive, creative, and delivered quality work within budget.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item third-item">
                        <h4>Nimali Fernando</h4>
                        <em>Marketing Director, Bloom & Co</em>
                        <span style="color: #34d710; font-size: 18px;">★★★★☆</span>
                        <p>Professional service and great communication throughout. CodeXpress created a beautiful website that perfectly represent our brand.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="subscribe" class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2>Know Your Website SEO Score by Email</h2>
                                <form id="subscribe" action="" method="get">
                                    <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                    <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2>Feel free to <em>Contact</em> us via the <span>HTML form</span></h2>
                        <div id="map">
                            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                        <div class="info">
                            <span><i class="fa fa-phone"></i> <a href="#">0777674308</a></span>
                            <span><i class="fa fa-envelope"></i> <a href="#">codexpressinfo12@gmail.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-dec">
            <img src="assets/images/contact-dec.png" alt="">
        </div>
        <div class="contact-left-dec">
            <img src="assets/images/contact-left-dec.png" alt="">
        </div>
    </div>

    <div class="footer-dec">
        <img src="assets/images/footer-dec.png" alt="">
    </div>



@endsection
