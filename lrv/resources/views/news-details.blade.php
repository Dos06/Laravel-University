@extends('layouts.app')

@section('title') News @endsection

@section('content')

    <link rel="stylesheet" href="/css/search.css">

    <div class="top-detail">
        <div class="container h-100 d-flex align-items-center justify-content-between">
            <h2>News Details</h2>
            <div>
                <p>News > @foreach ($categories as $cat) @if ($cat->id == $post->category_id) {{ $cat->name }} <?php break; ?> @endif @endforeach > {{ $post->title }}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-lg-9">
                <div class="news-block mb-2">
                    <img class="news-block-img rounded" src="{{ $post->picture_url }}">
                    <div class="news-block-chert mt-3">
                        <p>
                            <span class="d-block">By <b class="red">@foreach ($users as $user) @if ($user->id == $post->author_id) {{ $user->name . ' ' . $user->surname }} <?php break; ?> @endif @endforeach</b></span>
                            {{ date('d.m.Y', strtotime($post->created_at)) }}
                        </p>
                        <hr>
                        <a class="red hover-black" href="#"><h2>{{ $post->title }}</h2></a>
                        <p class="short-text">
                            {{ $post->short_content }}
                        </p>
                        <p class="news-block-contents">
                            {{ $post->content }}
                        </p>
                        <div class="footer-news-block d-flex align-items-center justify-content-between">
                            <a href="#" class="category-link red hover-black">@foreach ($categories as $cat) @if ($cat->id == $post->category_id) {{ $cat->name }} <?php break; ?> @endif @endforeach</a>
                        <a href="#" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> {{ sizeof($comments) }}</a>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <h3>Tags In</h3>
                    <div class="tags">
                        <a href="#" class="tag">C#</a>
                        <a href="#" class="tag">Java</a>
                    </div>
                </div>
                <hr>
                <div class="related-news">
                    <h3>Related news</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="rounded" src="https://images.idgesg.net/images/article/2019/01/orange_matrix_binary_rain_code_shallow_dof_w_bokeh_by_gonin_gettyimages_1200x800-100784691-large.jpg">
                            <p>Movielike photo shoot – B&W</p>
                            <hr>
                            <p></p><i class="fas fa-tags"></i> Technology</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="rounded" src="https://images.techhive.com/images/article/2017/03/future_what_is_next-100711982-large.jpg">
                            <p>Fast forward: What's coming in future versions of Chrome?</p>
                            <hr>
                            <p></p><i class="fas fa-tags"></i> Technology</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="rounded" src="https://images.idgesg.net/images/article/2020/04/man_wearing_scrubs_and_face_mask_looks_at_a_world_map_tracking_clusters_spread_infection_coronavirus_covid-19_outbreak_pandemic_by_rawpixel_hwangmangjoo_id_2300360_cc0_2400x1600-100839291-large.jpg">
                            <p>Movielike photo shoot – B&W</p>
                            <hr>
                            <p></p><i class="fas fa-tags"></i> Technology</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-lg-3 mb-3 search-bar">
                <form action="#">
                    <input type="search">
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













    <div class="container">
        @comments(['model'=>$post])
    </div>






    <!-- <div class="container">
        <div class="row col-sm-12 col-lg-9 m-0">

            <div class="post-news-details mt-5">
                <div class="sub-comment">

                </div>

                <?php
                $current_user = session()->get('currentUser');
                ?>
                @if ($current_user != null)
                <div class="comment-box box mb-4">
                    <div class="comment-btn">
                        <input type="textarea" class="comment btn btn-lg btn-dark form-control shadow container-fluid p-4" rows="5" cols="30" placeholder="Add a comment...">
                    </div>
                </div>
                @endif
            </div>


            <?php
            $current_user = session()->get('currentUser');
            ?>
            @if ($current_user != null)
            <div class="add-comment container-fluid p-4 mb-4">
                <div class="box">
                    <div class="add-comment-img">
                        <img src="{{ $current_user->picture_url }}">
                    </div>
                    <div class="add-comment-text">
                        <form action="">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="author_id" value="{{ $current_user->id }}">
                            <textarea rows="3" name="content" class="example-textarea p-3"></textarea>
                        </form>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div class="add-comment-text-btn text-center">
                    <button type="submit" class="btn btn-dark post-comment-btn mt-2">Post Comment</button>
                    <button type="button" class="btn btn-secondary cancel-btn mt-2">Cancel</button>
                </div>
            </div>
            @endif

        </div>
    </div> -->




    {{-- <footer id="footer"></footer> --}}


    <?php
    $current_user = session()->get('currentUser');
    ?>
    @if ($current_user != null)

    <script>
        $(".comment").click(function() {
            $(".comment").hide();
        });

        $(".cancel-btn").click(function() {
            $(".comment").show();
        });

        $('.comment').click(function() {
            $(".add-comment").slideToggle();
        });

        $('.post-comment-btn').click(function() {
            var data = $('.example-textarea').val();
            if(!data){
                alert("Plese Enter a comment, after that click the \"Post\" button.");
            }else{
                $('.example-textarea').val('');
                $(".sub-comment").append('<div class="example"><div class="comment-img"><img src="{{ $current_user->picture_url }}" class="example"></div><div class="comment"><p>'+ data +'</p></div><div style="clear:both;"></div></div><hr>');
            }
        });

        $(".cancel-btn").click(function() {
            $(".add-comment").hide();
        });

    </script>

    @endif

@endsection
