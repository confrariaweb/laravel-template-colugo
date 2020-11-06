<section id="contact" class="contact-area ptb-100">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-delay=".3s">
            <h2>Contact Us</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="contact-form">
                    <form id="contactForm" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                           data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors">teste</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                           data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                           data-error="Please enter your number" class="form-control"
                                           placeholder="Your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                           required data-error="Please enter your subject"
                                           placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                                  required data-error="Write your message"
                                                  placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h3>Contact with us by Your Phone Number or Email Address</h3>
                        <h2>
                            <a href="tel:+1-485-456-0102">+1-485-456-0102</a>
                            <span>Or</span>
                            <a href="mailto:hello@spacle.com">hello@colugo.com</a>
                        </h2>

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/1.png') }}" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/2.png') }}" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/3.svg') }}" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/4.svg') }}" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/5.png') }}" alt="image">
        </div>
    </div>
</section>