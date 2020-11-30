@extends('layouts.app')

@section('title') News @endsection

@section('content')

    <link rel="stylesheet" href="/css/search.css">


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div href="{{ route('news') }}" class="top-news" style="height: 600px;">
                <img class="img" src="{{ $top_posts[0]->picture_url }}">
                    <div class="overlay"></div>
                    <div class="text">
                        <p class="politics">@foreach ($categories as $cat) @if ($cat->id == $top_posts[0]->category_id) {{ $cat->name }} <?php break; ?> @endif @endforeach</p>
                        <a class="white" href="{{ route('news-details', $top_posts[0]->id) }}">
                            <h2 class="title">{{ $top_posts[0]->title }}</h2>
                        </a>
                        <div class="post-details">
                            <p><i class="fas fa-user-alt"></i> @foreach ($users as $user) @if ($user->id == $top_posts[0]->author_id) {{ $user->name . ' ' . $user->surname }} <?php break; ?> @endif @endforeach</p>
                            <p><i class="fas fa-clock mr-1"></i>{{ date('d.m.Y', strtotime($top_posts[0]->created_at)) }}</p>
                            <p><i class="fas fa-heart mr-1"></i>178</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="w-100">
                    <div class="top-news" style="height: 350px;">
                        <img class="img" src="{{ $top_posts[1]->picture_url }}">
                        <div class="overlay"></div>
                        <div class="text-2">
                            <p class="society">@foreach ($categories as $cat) @if ($cat->id == $top_posts[1]->category_id) {{ $cat->name }} <?php break; ?> @endif @endforeach</p>
                            <a class="white" href="{{ route('news-details', $top_posts[1]->id) }}">
                                <h2 class="title">{{ $top_posts[1]->title }}</h2>
                            </a>
                            <div class="post-details">
                                <p><i class="fas fa-user-alt"></i> @foreach ($users as $user) @if ($user->id == $top_posts[1]->author_id) {{ $user->name . ' ' . $user->surname }} <?php break; ?> @endif @endforeach</p>
                                <p><i class="fas fa-clock mr-1"></i>{{ date('d.m.Y', strtotime($top_posts[1]->created_at)) }}</p>
                                <p><i class="fas fa-heart mr-1"></i>152</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="top-news" style="height: 230px;">
                        <img class="img" src="{{ $top_posts[2]->picture_url }}">
                        <div class="overlay"></div>
                        <div class="overlay-3"></div>
                        <div class="text-3">
                            <p class="sports">@foreach ($categories as $cat) @if ($cat->id == $top_posts[2]->category_id) {{ $cat->name }} <?php break; ?> @endif @endforeach</p>
                            <a class="white" href="{{ route('news-details', $top_posts[2]->id) }}">
                                <h2 class="title">{{ $top_posts[2]->title }}</h2>
                            </a>
                            <div class="post-details">
                                <p><i class="fas fa-user-alt"></i> @foreach ($users as $user) @if ($user->id == $top_posts[2]->author_id) {{ $user->name . ' ' . $user->surname }} <?php break; ?> @endif @endforeach</p>
                                <p><i class="fas fa-clock mr-1"></i>{{ date('d.m.Y', strtotime($top_posts[2]->created_at)) }}</p>
                                <p><i class="fas fa-heart mr-1"></i>114</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="categories row justify-content-around align-items-center" style="color: white;">
            @foreach($categories as $cat)
            <a href="{{ route('filterNews', $cat->id) }}">
                <p class="category">{{$cat->name}}</p>
            </a>
            @endforeach
        </div>
    </div>
    <div class="container my-4">
        <div class="snews row mb-2">
            <div class="col-sm-12 col-lg-9">
                <div class="row">









                    <div class="col-sm-12 col-lg-6" id="dynamic-row1">
                        <?php
                        $index = 1;
                        ?>
                        @foreach ($posts as $post)
                            @if ($index % 2 != 0)
                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="{{ $post->picture_url }}">
                            <div class="news-block-content">
                                <p>
                                    <span class="d-block">By <b class="red">@foreach ($users as $user) @if ($user->id == $post->author_id) {{ $user->name . ' ' . $user->surname }} <?php break; ?> @endif @endforeach</b></span>
                                    {{ date('j F, Y', strtotime($post->created_at)) }}
                                    {{-- {{ $post->created_at = Carbon\Carbon::now()->format('F j, Y') }} --}}
                                </p>
                                <a class="red hover-black" href="{{ route('news-details', $post->id) }}"><h2>{{ $post->title }}</h2></a>
                                <p class="short-text">
                                    {{ $post->short_content }}
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    @foreach ($categories as $cat)
                                        @if ($cat->id == $post->category_id)
                                            <a href="{{ route('filterNews', $cat->id) }}" class="category-link red hover-black">
                                                {{ $cat->name }}
                                            </a>
                                        @endif
                                    @endforeach

                                    @php
                                        $post_comments = array();
                                        foreach ($comments as $com) {
                                            if ($post->id == $com->commentable_id) {
                                                array_push($post_comments, $com);
                                            }
                                        }
                                    @endphp
                                    <a href="{{ route('news-details', $post->id) }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> {{ sizeof($post_comments) }}</a>
                                </div>

                            </div>
                        </div>
                            @endif
                            <?php
                            $index++;
                            ?>


                        @endforeach

                    </div>


                    <div class="col-sm-12 col-lg-6" id="dynamic-row">
                        <?php
                            $index =1;
                        ?>
                        @foreach ($posts as $post)
                        @if($index % 2 == 0)
                        <div class="news-block mb-3 shadow bg-white rounded">
                            <img class="news-block-img" src="{{ $post->picture_url }}">
                            <div class="news-block-content">
                                <p>
                                    <span class="d-block">By <b class="red">@foreach ($users as $user) @if ($user->id == $post->author_id) {{ $user->name . ' ' . $user->surname }} <?php break; ?> @endif @endforeach</b></span>
                                    {{ date('j F, Y', strtotime($post->created_at)) }}
                                </p>
                                <a class="red hover-black" href="{{ route('news-details', $post->id) }}"><h2>{{ $post->title }}</h2></a>
                                <p class="short-text">
                                    {{ $post->short_content }}
                                </p>
                                <hr>
                                <div class="footer-news-block d-flex align-items-center justify-content-between">
                                    @foreach ($categories as $cat)
                                        @if ($cat->id == $post->category_id)
                                            <a href="{{ route('filterNews', $cat->id) }}" class="category-link red hover-black">
                                                {{ $cat->name }}
                                            </a>
                                        @endif
                                    @endforeach

                                    @php
                                        $post_comments = array();
                                        foreach ($comments as $com) {
                                            if ($post->id == $com->commentable_id) {
                                                array_push($post_comments, $com);
                                            }
                                        }
                                    @endphp
                                    <a href="{{ route('news-details', $post->id) }}" class="comment-link red hover-black"><i class="fas fa-comment-alt"></i> {{ sizeof($post_comments) }}</a>
                                </div>

                            </div>

                        </div>
                        @endif
                        <?php
                        $index++;
                        ?>
                        @endforeach

                    </div>





                </div>
                <div class="row justify-content-center align-items-center my-3">
                    <ul class="">
                        <!-- <li><a class="prev page-numbers hover-red" href="#"><b>Previous</b></a></li> -->
                        <!-- <li class="current"><a class="page-numbers" href="#"><b>1</b></a></li>
                        <li><a class="page-numbers hover-red" href="#"><b>2</b></a></li> -->
                        {{$posts->links()}}
                        <!-- <li><a class="next page-numbers hover-red" href="#"><b>Next</b></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 mb-3 search-bar">
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



    <script>
        $('body').on('keyup', '#search-news', function() {
            var searchQuery = $(this).val();
            $.ajax({
                method: 'POST',
                url: '{{ route("search-news") }}',
                dataType: 'json',
                data: {
                    '_token': '{{ csrf_token() }}',
                    searchQuery: searchQuery
                },
                success: function(res) {
                    var tableRow = '';

                    $('#dynamic-row').html('');
                    $.each(res, function(index, value){
                        if(index % 2 != 0){
                            tableRow = `<div class="news-block
                            mb-3 shadow bg-white rounded"><img
                            class="news-block-img" src="`+value.picture_url+`"><div
                            class="news-block-content"><p><span class="d-block">By IITU News</span>October 20, 2020</p><a
                            class="red hover-black" href="{{ route('news-details', $post->id) }}"><h2>`+value.title+`</h2></a><p
                            class="short-text">`+value.short_content+`</p><hr><div
                            class="footer-news-block d-flex align-items-center justify-content-between"><a
                            href="{{ route('news-details', $post->id) }}" class="category-link red hover-black">Design</a><a
                            href="{{ route('news-details', $post->id) }}" class="comment-link red hover-black"><i
                            class="fas fa-comment-alt"></i> 14</a></div></div></div>`;
                            $('#dynamic-row').append(tableRow)
                        }
                    })
                    $('#dynamic-row1').html('');
                    $.each(res, function(index, value){
                        if(index%2==0){
                            tableRow = `<div class="news-block
                            mb-3 shadow bg-white rounded"><img
                            class="news-block-img" src="`+value.picture_url+`"><div
                            class="news-block-content"><p><span class="d-block">By IITU News</span>October 20, 2020</p><a
                            class="red hover-black" href="{{ route('news-details', $post->id) }}"><h2>`+value.title+`</h2></a><p
                            class="short-text">`+value.short_content+`</p><hr><div
                            class="footer-news-block d-flex align-items-center justify-content-between"><a
                            href="{{ route('news-details', $post->id) }}" class="category-link red hover-black">Design</a><a
                            href="{{ route('news-details', $post->id) }}" class="comment-link red hover-black"><i
                            class="fas fa-comment-alt"></i> 14</a></div></div></div>`;
                            $('#dynamic-row1').append(tableRow)
                        }
                    })
                }
            });
        });
    </script>

    <script src="js/login.js"></script>

@endsection
