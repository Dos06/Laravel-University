@extends('layouts.app')

@section('title') News @endsection

@section('content')

    <link rel="stylesheet" href="/css/search.css">

    <div class="container">
        <div class="categories row justify-content-around align-items-center" style="color: white;">
            <p class="category">Politics</p>
            <p class="category">Society</p>
            <p class="category">Sports</p>
            <p class="category">Technology</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div href="{{ route('news') }}" class="top-news" style="height: 600px;">
                    <img class="img" src="https://cdn.cnn.com/cnnnext/dam/assets/201017212456-05-donald-trump-1017-wisconsin-exlarge-169.jpg">
                    <div class="overlay"></div>
                    <div class="text">
                        <p class="politics">Politics</p>
                        <a class="white" href="{{ route('news-details') }}">
                            <h2 class="title">This is Biden's shortest path to the White House</h2>
                        </a>
                        <div class="post-details">
                            <p><i class="fas fa-user-alt"></i> IITU news</p>
                            <p><i class="fas fa-clock mr-1"></i>19.10.20</p>
                            <p><i class="fas fa-heart mr-1"></i>178</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="w-100">
                    <div class="top-news" style="height: 350px;">
                        <img class="img" src="https://cdn.cnn.com/cnnnext/dam/assets/201019124711-94-year-old-votes-300-miles-restricted-exlarge-169.jpg">
                        <div class="overlay"></div>
                        <div class="text-2">
                            <p class="society">Society</p>
                            <a class="white" href="{{ route('news-details') }}">
                                <h2 class="title">This 94-year-old traveled more than 300 miles each way just so she could vote</h2>
                            </a>
                            <div class="post-details">
                                <p><i class="fas fa-user-alt"></i> IITU news</p>
                                <p><i class="fas fa-clock mr-1"></i>18.10.20</p>
                                <p><i class="fas fa-heart mr-1"></i>152</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="top-news" style="height: 230px;">
                        <img class="img" src="https://cdn.cnn.com/cnnnext/dam/assets/201019122255-01-mlb-tampa-bay-rays-1017-large-169.jpg">
                        <div class="overlay"></div>
                        <div class="overlay-3"></div>
                        <div class="text-3">
                            <p class="sports">Sports</p>
                            <a class="white" href="{{ route('news-details') }}">
                                <h2 class="title">'Best player on earth' ready to sting Dodgers in World Series</h2>
                            </a>
                            <div class="post-details">
                                <p><i class="fas fa-user-alt"></i> IITU news</p>
                                <p><i class="fas fa-clock mr-1"></i>17.10.20</p>
                                <p><i class="fas fa-heart mr-1"></i>114</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="snews row mb-2">
            <div class="col-sm-12 col-lg-9">
                <div class="row">









                    <div class="col-sm-12 col-lg-6" id="dynamic-row1">

                        @foreach ($posts1 as $post)

                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="{{ $post->picture_url }}">
                            <div class="news-block-content">
                                <p>
                                    <span>By IITU News</span>
                                    October 20, 2020
                                </p>
                                <a class="red hover-black" href="{{ route('news-details') }}"><h2>{{ $post->title }}</h2></a>
                                <p class="short-text">
                                    {{ $post->short_content }}
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    <a href="{{ route('news-details') }}" class="category-link red hover-black">
                                    @foreach ($categories as $cat)
                                        @if ($cat->id == $post->category_id)
                                            {{ $cat->name }}
                                        @endif
                                    @endforeach
                                    </a>
                                    <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 14</a>
                                </div>

                            </div>
                        </div>


                        @endforeach

                    </div>


                    <div class="col-sm-12 col-lg-6" id="dynamic-row">

                        @foreach ($posts2 as $post)

                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="{{ $post->picture_url }}">
                            <div class="news-block-content">
                                <p>
                                    <span>By IITU News</span>
                                    October 20, 2020
                                </p>
                                <a class="red hover-black" href="{{ route('news-details') }}"><h2>{{ $post->title }}</h2></a>
                                <p class="short-text">
                                    {{ $post->short_content }}
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    <a href="{{ route('news-details') }}" class="category-link red hover-black">
                                    @foreach ($categories as $cat)
                                        @if ($cat->id == $post->category_id)
                                            {{ $cat->name }}
                                        @endif
                                    @endforeach
                                    </a>
                                    <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 14</a>
                                </div>

                            </div>

                        </div>

                        @endforeach

                    </div>











                    {{-- <div class="col-sm-12 col-lg-6">
                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="https://images.idgesg.net/images/article/2019/09/apple-logo-colors-01-100810554-large.jpg">
                            <div class="news-block-content">
                                <p>
                                    <span>By IITU News</span>
                                    October 20, 2020
                                </p>
                                <a class="red hover-black" href="{{ route('news-details') }}"><h2>Couple of cool mock-up ideas</h2></a>
                                <p class="short-text">
                                    Ut et lacus ex. Aliquam dignissim mauris
                                    sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat…
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    <a href="{{ route('news-details') }}" class="category-link red hover-black">Design</a>
                                    <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 14</a>
                                </div>

                            </div>
                        </div>

                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="https://images.idgesg.net/images/article/2020/04/man_wearing_scrubs_and_face_mask_looks_at_a_world_map_tracking_clusters_spread_infection_coronavirus_covid-19_outbreak_pandemic_by_rawpixel_hwangmangjoo_id_2300360_cc0_2400x1600-100839291-large.jpg">
                            <div class="news-block-content">
                                <p>
                                    <span>By IITU News</span>
                                    October 20, 2020
                                </p>
                                <a class="red hover-black" href="{{ route('news-details') }}"><h2>An iPhone a day keeps the doctor away</h2></a>
                                <p class="short-text">
                                    We know the pandemic has affected the way we work, forcing enterprises
                                    to embrace work-from-home models. But it is also driving innovation in
                                    digital health, prompting the evolution of remote diagnosis and home care.
                                    Award-winning company, Butterfly Network, is part of this change.
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    <a href="{{ route('news-details') }}" class="category-link red hover-black">Medicine</a>
                                    <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 48</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="https://images.techhive.com/images/article/2017/03/future_what_is_next-100711982-large.jpg">
                            <div class="news-block-content">
                                <p>
                                    <span>By IITU News</span>
                                    October 20, 2020
                                </p>
                                <a class="red hover-black" href="{{ route('news-details') }}"><h2>Fast forward: What's coming in future versions of Chrome?</h2></a>
                                <p class="short-text">
                                    Ut et lacus ex. Aliquam dignissim mauris
                                    sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat…
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    <a href="{{ route('news-details') }}" class="category-link red hover-black">Technology</a>
                                    <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 36</a>
                                </div>

                            </div>
                        </div>
                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="https://images.idgesg.net/images/article/2019/01/orange_matrix_binary_rain_code_shallow_dof_w_bokeh_by_gonin_gettyimages_1200x800-100784691-large.jpg">
                            <div class="news-block-content">
                                <p>
                                    <span>By IITU News</span>
                                    October 20, 2020
                                </p>
                                <a class="red hover-black" href="{{ route('news-details') }}"><h2>How Microsoft will end Office's perpetual licensing</h2></a>
                                <p class="short-text">
                                    "This is going to be a version of Exchange that will only be available
                                    with the purchase of a subscription," said Greg Taylor, director of product
                                    marketing for Exchange, in a video posted just prior to Ignite. "This
                                    subscription entitles you to updates and support for the lifetime of your
                                    subscription."
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    <a href="{{ route('news-details') }}" class="category-link red hover-black">Technology</a>
                                    <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 36</a>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    
                </div>
                <div class="row justify-content-center align-items-center my-3">
                    <ul class="page-numbers">
                        <li><a class="prev page-numbers hover-red" href="#"><b>Previous</b></a></li>
                        <li class="current"><a class="page-numbers" href="#"><b>1</b></a></li>
                        <li><a class="page-numbers hover-red" href="#"><b>2</b></a></li>
                        <li><a class="next page-numbers hover-red" href="#"><b>Next</b></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 mb-3">
                <form>

                    <input type="search" id="search-news">
                    <i class="fa fa-search"></i>
                </form>
                <hr>
                <div>
                    <h3>Popular tags</h3>
                    <div class="tags">
                        <a href="#" class="tag">C#</a>
                        <a href="#" class="tag">Java</a>
                        <a href="#" class="tag">CSS</a>
                        <a href="#" class="tag">PHP</a>
                        <a href="#" class="tag">Java EE</a>
                        <a href="#" class="tag">C++</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="js/login.js"></script>

@endsection
