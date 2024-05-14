
@props(['blog'])

<div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
    <div class="fp__single_blog">
        <a href="/blog-detail" class="fp__single_blog_img">
            <img src="{{ asset('frontend/images/menu2_img_1.jpg') }}" alt="blog" class="img-fluid w-100" />
        </a>
        <div class="fp__single_blog_text">
            <a class="category" href="#">chicken</a>
            <ul class="d-flex flex-wrap mt_15">
                <li><i class="fas fa-user"></i>admin</li>
                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                <li><i class="fas fa-comments"></i> 25 comment</li>
            </ul>
            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
        </div>
    </div>
</div>
