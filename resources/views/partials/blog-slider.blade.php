<section class="tj-blog-section">
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
                                <a
                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                    <img src="{{ !is_null($blog->post_image) ? asset($blog->post_image) : '' }}"
                                        alt="Blog" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <div class="meta-date">
                                        <ul class="list-gap">
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</li>
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</li>
                                        </ul>
                                    </div>
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i><a href="#">
                                                    {{-- {{ $blog->user->name }}</a></li> --}}
                                                    {{ !is_null($blog->user->name) ? $blog->user->name : '' }}</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text-box">
                                    <div class="blog-header">
                                        <h4>
                                            <a class="title-link"
                                                @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                {{-- {{ $blog->post_name }} --}}
                                                {{-- {{ Illuminate\Support\Str::limit($blog->post_name, 20, '...') }} --}}
                                                {{ !is_null($blog->post_name) ? Illuminate\Support\Str::limit($blog->post_name, 20, '...') : '' }}
                                            </a>
                                        </h4>
                                        {{-- <p>
                                        {!! Illuminate\Support\Str::limit($blog->post_description, 200, '...') !!}
                                        </p> --}}
                                    </div>
                                    <div class="blog-button">
                                        <ul class="list-gap">
                                            <li>
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    Read More <i class="fa-regular fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>