<x-frontend-layout title="About page">
    <x-frontend.breadcrumb title="about UniFood" subtitle="about us" link="/about" linkText="about us" />

    <section class="fp__about_us mt_120 xs_mt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__about_us_img">
                        <img src="{{ asset('frontend/images/about_chef.jpg') }}" alt="about us"
                            class="img-fluid w-100" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__section_heading mb_40">
                        <h4>About Company</h4>
                        <h2>Helathy Foods Provider</h2>
                        <span>
                            <img src="{{ asset('frontend/images/heading_shapes.png') }}" alt="shapes"
                                class="img-fluid w-100" />
                        </span>
                    </div>
                    <div class="fp__about_us_text">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Cupiditate aspernatur molestiae minima pariatur consequatur
                            voluptate sapiente deleniti soluta, animi ab necessitatibus
                            optio similique quasi fuga impedit corrupti obcaecati neque
                            consequatur sequi.
                        </p>
                        <ul>
                            <li>Delicious & Healthy Foods</li>
                            <li>Spacific Family & Kids Zone</li>
                            <li>Best Price & Offers</li>
                            <li>Made By Fresh Ingredients</li>
                            <li>Music & Other Facilities</li>
                            <li>Delicious & Healthy Foods</li>
                            <li>Spacific Family & Kids Zone</li>
                            <li>Best Price & Offers</li>
                            <li>Made By Fresh Ingredients</li>
                            <li>Delicious & Healthy Foods</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.why-choose />
    <section class="fp__about_video mt_100 xs_mt_70">
        <div class="container wow fadeInUp" data-wow-duration="1s">
            <div class="fp__about_video_bg" style="background: url({{ asset('frontend/images/about_video_bg.jpg') }})">
                <div class="fp__about_video_overlay">
                    <div class="row">
                        <div class="col-12">
                            <div class="fp__about_video_text">
                                <p>Watch Videos</p>
                                <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
                                    href="https://youtu.be/F3zw1Gvn4Mk">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-frontend.team />
    <x-frontend.counter />
    <x-frontend.testimonial />
</x-frontend-layout>
