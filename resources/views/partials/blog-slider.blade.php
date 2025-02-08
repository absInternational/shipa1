<section class="tj-blog-section pt-4">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape"> Latest News</span>
                <h2 class="title">Latest News & Blog</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-blog-item">
                        <div class="tj-blog-image">
                            <a aria-label="Learn more about vehicle transportation Blog" title="Vehicle Transportation Blog"
                                @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                <img loading="lazy" src="{{ !is_null($blog->post_image) ? asset($blog->post_image) : '' }}"
                                    alt="Blog" /></a>
                        </div>
                        <div class="blog-content-area">
                            <div class="blog-meta">
                            </div>
                            <div class="blog-text-box">
                                <div class="blog-header">
                                    <h6>
                                        <a class="title-link fs-5" aria-label="Learn more about vehicle transportation Blog"
                                        title="Vehicle Transportation Blog"
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                            {{ !is_null($blog->post_name) ? Illuminate\Support\Str::limit($blog->post_name, 45, '...') : '' }}
                                        </a>
                                    </h6>
                                </div>
                                <div class="blog-button">
                                    <div class="blog-info d-flex justify-content-between">
                                        <span class="date-icon">
                                            <i class="fa-regular fa-calendar"></i> 
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}
                                        </span>
                                        <a class="ms-3"  aria-label="Learn more about vehicle transportation Blog"
                                        title="Vehicle Transportation Blog"
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" 
                                            @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                            Read More <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>