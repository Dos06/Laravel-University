@extends('layouts.app')

@section('title') News @endsection

@section('content')

    <link rel="stylesheet" href="/css/search.css">

    <div class="top-detail">
        <div class="container h-100 d-flex align-items-center justify-content-between">
            <h2>News Details</h2>
            <div>
                <p>News > Politics > News title</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-lg-9">
                <div class="news-block mb-2">
                    <img class="news-block-img" src="https://images.idgesg.net/images/article/2019/09/apple-logo-colors-01-100810554-large.jpg">
                    <div class="news-block-chert mt-3">
                        <p>
                            <span>By IITU News</span>
                            October 20, 2020
                        </p>
                        <hr>
                        <a class="red hover-black" href="{{ route('news-details') }}"><h2>Couple of cool mock-up ideas</h2></a>
                        <p class="short-text">
                            Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat…
                        </p>
                        <p class="news-block-contents">Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat… Ut et lacus ex. Aliquam dignissim mauris
                            sit amet purus convallis, vitae vehicula lectus tincidunt. Nulla placerat…
                        </p>
                        <div class="footer-news-block d-flex align-items-center justify-content-between">
                            <a href="{{ route('news-details') }}" class="category-link red hover-black">Design</a>
                            <a href="{{ route('news-details') }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> 14</a>
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
                            <img src="https://images.idgesg.net/images/article/2019/01/orange_matrix_binary_rain_code_shallow_dof_w_bokeh_by_gonin_gettyimages_1200x800-100784691-large.jpg">
                            <p>Movielike photo shoot – B&W</p>
                            <hr>
                            <p></p><i class="fas fa-tags"></i> Technology</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="https://images.techhive.com/images/article/2017/03/future_what_is_next-100711982-large.jpg">
                            <p>Fast forward: What's coming in future versions of Chrome?</p>
                            <hr>
                            <p></p><i class="fas fa-tags"></i> Technology</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="https://images.idgesg.net/images/article/2020/04/man_wearing_scrubs_and_face_mask_looks_at_a_world_map_tracking_clusters_spread_infection_coronavirus_covid-19_outbreak_pandemic_by_rawpixel_hwangmangjoo_id_2300360_cc0_2400x1600-100839291-large.jpg">
                            <p>Movielike photo shoot – B&W</p>
                            <hr>
                            <p></p><i class="fas fa-tags"></i> Technology</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-lg-3 mb-3">
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
        <div class="row col-12 m-0">

            <div class="post-news-details mt-5">
                <div class="sub-comment"></div>

                <div class="comment-box box mb-4">
                    <div class="comment-btn">
                        <input type="textarea" class="comment btn btn-lg btn-dark form-control shadow container-fluid p-4" rows="10" cols="30" placeholder="Add a comment...">
                    </div>
                </div>
            </div>

            <div class="add-comment container-fluid p-4 mb-4">
                <div class="box">
                    <div class="add-comment-img">
                        <img src="http://nicesnippets.com/demo/man04.png">
                    </div>
                    <div class="add-comment-text">
                        <textarea rows="5" class="example-textarea p-3"></textarea>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div class="add-comment-text-btn text-center">
                    <button class="btn btn-dark post-comment-btn mt-2">Post Comment</button>
                    <button class="btn btn-secondary cancel-btn mt-2">Cancel</button>
                </div>
            </div>

        </div>
    </div>



    <footer id="footer"></footer>

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
                $(".sub-comment").append('<div class="example"><div class="comment-img"><img src="http://nicesnippets.com/demo/man04.png" class="example"></div><div class="comment"><p>'+ data +'</p></div><div style="clear:both;"></div></div><hr>');
            }
        });

        $(".cancel-btn").click(function() {
            $(".add-comment").hide();
        });
    </script>

@endsection
