<x-frontend-layout title="About page">
    <x-frontend.breadcrumb title="Blog Details" subtitle="blog detail" link="/blog-detail" linkText="blog detail" />

    <section class="fp__blog_details mt_120 xs_mt_90 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="fp__blog_det_area">
                        <div class="fp__blog_details_img wow fadeInUp" data-wow-duration="1s">
                            <img src="{{ asset('frontend/images/blog_details.jpg') }}" alt="blog details"
                                class="imf-fluid w-100">
                        </div>
                        <div class="fp__blog_details_text wow fadeInUp" data-wow-duration="1s">
                            <ul class="details_bloger d-flex flex-wrap">
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-comment-alt-lines"></i> 12 Comments</li>
                                <li><i class="far fa-calendar-alt"></i> 18 July 2022</li>
                            </ul>
                            <h2>Different Spice For A Different Cheese Bruschetta</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                ered alteration in some form, by injected humour, or randomised word which don't look
                                even slightly believable. If you are going to use a passage of Lorem Ipsulm you need to
                                sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>Erators on the Internet tend to repeat predefined chunks as necessiary, making this the
                                true generator on the Internet. It uses a dictionary of over 200 Latin words, combinedss
                                handful of model sentence structures</p>
                            <div class="fp__blog_quot_text">
                                <span class="left_icon">
                                    <img src="{{ asset('frontend/images/quot.png') }}" alt="quot"
                                        class="img-fluid w-100">
                                </span>
                                <p>Erators on the Internet tend to repeat predefined chunks as necessiary, making this
                                    the
                                    true generator on the Internet. It uses a dictionary of over 200 Latin words,
                                    combinedss
                                    handful of model sentence structures
                                    <span><img src="{{ asset('frontend/images/quot.png') }}" alt="quot"
                                            class="img-fluid w-100"></span>
                                </p>
                                <h4>Deniella Rhodes <span>CEO of On Demand</span></h4>
                            </div>

                            <div class="fp__blog_det_slider">
                                <div class="row blog_det_slider">
                                    <div class="col-xl-6">
                                        <div class="fp__blog_det_slider_item">
                                            <img src="{{ asset('frontend/images/blog_details_slider_img_1.jpg') }}"
                                                alt="blog details" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="fp__blog_det_slider_item">
                                            <img src="{{ asset('frontend/images/blog_details_slider_img_2.jpg') }}"
                                                alt="blog details" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="fp__blog_det_slider_item">
                                            <img src="{{ asset('frontend/images/blog_details_slider_img_3.jpg') }}"
                                                alt="blog details" class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3>Creative approach to every project</h3>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>

                            <ul class="blog_details_list">
                                <li>It is a long established fact that a reader will be</li>
                                <li>There are many variations of passages</li>
                                <li>All the Lorem Ipsum generators</li>
                                <li>Asearch for 'lorem ipsum' will uncover many </li>
                            </ul>
                            <div class="blog_tags_share d-flex flex-wrap justify-content-between align-items-center">
                                <div class="tags d-flex flex-wrap align-items-center">
                                    <span>tags:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">AC Repair</a></li>
                                        <li><a href="#">Home Move</a></li>
                                    </ul>
                                </div>
                                <div class="share d-flex flex-wrap align-items-center">
                                    <span>share:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="blog_det_button mt_100 xs_mt_70 wow fadeInUp" data-wow-duration="1s">
                        <li>
                            <a href="#">
                                <img src="{{ asset('frontend/images/det_btn_img_1.jpg') }}" alt="button img"
                                    class="img-fluid w-100">
                                <p>Spray spray tires washing car
                                    <span> <i class="far fa-long-arrow-left"></i> Previous</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>25 Years of Expert Cleaning Services
                                    <span>next <i class="far fa-long-arrow-right"></i></span>
                                </p>
                                <img src="{{ asset('frontend/images/det_btn_img_2.jpg') }}" alt="button img"
                                    class="img-fluid w-100">
                            </a>
                        </li>
                    </ul>

                    <div class="fp__comment mt_100 xs_mt_70 wow fadeInUp" data-wow-duration="1s">
                        <h4>03 Comments</h4>
                        <div class="fp__single_comment m-0 border-0">
                            <img src="{{ asset('frontend/images/comment_img_1.png') }}" alt="review"
                                class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>Michel Holder <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="fp__single_comment">
                            <img src="{{ asset('frontend/images/chef_1.jpg') }}" alt="review" class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>salina khan <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="fp__single_comment replay">
                            <img src="{{ asset('frontend/images/comment_img_2.png') }}" alt="review"
                                class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>Mouna Sthesia <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="fp__single_comment">
                            <img src="{{ asset('frontend/images/chef_3.jpg') }}" alt="review" class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>marjan janifar <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <a href="#" class="load_more">load More</a>
                    </div>

                    <div class="comment_input mt_100 xs_mt_70 wow fadeInUp" data-wow-duration="1s">
                        <h4>Leave A Comment</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <label>name</label>
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-user-alt"></i></span>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <label>email</label>
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-user-alt"></i></span>
                                        <input type="email" placeholder="Mail">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label>comment</label>
                                    <div class="fp__contact_form_input textarea">
                                        <span><i class="fal fa-user-alt"></i></span>
                                        <textarea rows="5" placeholder="Your Comment"></textarea>
                                    </div>
                                    <button type="submit" class="common_btn mt_20">Submit comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div id="sticky_sidebar">
                        <div class="fp__blog_search blog_sidebar m-0 wow fadeInUp" data-wow-duration="1s">
                            <h3>Search</h3>
                            <form>
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="fp__related_blog blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Latest Post</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/images/blog_1.jpg') }}" alt="blog"
                                        class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Mechanic at car service tire change the car.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/images/blog_2.jpg') }}" alt="blog"
                                        class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Transportation and logistics of container cargo ship.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/images/blog_3.jpg') }}" alt="blog"
                                        class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Commercial cleaning crew ladies working.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="fp__blog_categori blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Home Cleaning <span>10</span></a></li>
                                <li><a href="#">Painting & Renovation <span>20</span></a></li>
                                <li><a href="#">Cleaning & Pest Control <span>14</span></a></li>
                                <li><a href="#">Emergency Services <span>41</span></a></li>
                                <li><a href="#">Car Care Services <span>05</span></a></li>
                                <li><a href="#">Electric & Plumbing <span>35</span></a></li>
                                <li><a href="#">Home Move <span>48</span></a></li>
                            </ul>
                        </div>
                        <div class="fp__blog_tags blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="#">Cleaning </a></li>
                                <li><a href="#">Car Repair</a></li>
                                <li><a href="#">Plumbing</a></li>
                                <li><a href="#">Painting</a></li>
                                <li><a href="#">Past Control</a></li>
                                <li><a href="#">AC Repair</a></li>
                                <li><a href="#">Home Move</a></li>
                                <li><a href="#">Disinfection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
