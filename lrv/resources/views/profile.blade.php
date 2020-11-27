@extends('layouts.app')

@section('title') Profile @endsection

@section('content')


    @if(session()->has('currentUser'))
    <?php
        $current = session()->get('currentUser');
    ?>
    @endif
    <div class="container">
        <div class="row py-3">
            <div class="col-md-12 mx-auto mb-5">
                <!-- Profile widget -->


                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Successfully!<br>
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if (session('fail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Something went wrong!
                    {{ session('fail') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 cover row">
                        <div class="media align-items-end profile-head col-3">
                            <div class="profile mr-3 mt-2">

                                <img src="{{ $current->picture_url }}" class="rounded mb-2 img-thumbnail">

                                <button type="button" class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" data-target="#edit_user">Edit profile</button>
                            </div>

                        </div>
                        <?php
                        $counter = 0;
                        ?>
                        @foreach ($posts as $post)
                            @if ($post->author_id == $current->id)
                            <?php
                                $counter++;
                            ?>
                            @endif
                        @endforeach
                        <div class="p-4 d-flex justify-content-end text-center col-9">
                            <ul class="list-inline mb-0">
                                <h1 class="font-weight-bold mb-0 d-block">{{ $counter }}</h1><small class="text-muted"> <i class="fas fa-image mr-1"></i>Posts</small>
                                <li class="list-inline-item">
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{ count($posts) }}</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Posts</small>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="px-4 py-3">
                        <h5 class="mb-0">About</h5>
                        <div class="p-4 rounded shadow-sm bg-light">
                            <p class="font-italic mb-0">Id: {{ $current->id }}</p>
                            <p class="font-italic mb-0">Name: {{ $current->name }}</p>
                            <p class="font-italic mb-0">Surname: {{ $current->surname }}</p>
                            <p class="font-italic mb-0">Email: {{ $current->email }}</p>
                            <p class="font-italic mb-0">Role: {{ $current->role }}</p>
                            {{-- <p class="font-italic mb-0">Password: {{ $current->password }}</p> --}}
                        </div>
                    </div>
                    <div class="py-4 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">Recent posts</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                        </div>

                        <button type="button" class="btn btn-dark mb-4" data-toggle="modal" data-target="#add_post">+ ADD NEW </button>

                        <div class="row">
                            <div>
                                <h2>Post 1</h2>
                                <h2>Post 2</h2>
                                <h2>Post 3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_post" tabindex="-1" aria-labelledby="AddPostModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddPostModalLabel">Add a Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('post-add-profile') }}" method="post">
                        @csrf
                        <input type="hidden" name="author_id" value="{{ $current->id }}">
                        {{-- <input type="hidden" name="post_active" value="0"> --}}
                        <div class="form-group">
                            <label>Category</label>
                            <select name="post_category_id" class="form-control">
                                <option selected disabled>Choose</option>
                                @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Post Title : </label>
                            <input type="text" name="post_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Post Picture URL : </label>
                            <input type="text" name="post_pictureurl" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Post Short Content : </label>
                            <textarea name="post_shortcontent" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Post Content : </label>
                            <textarea name="post_content" class="form-control" rows="10" required></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-success">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="edit_user" tabindex="-1" aria-labelledby="EditUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditUserModalLabel">Edit a User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user-edit-profile') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $current->id }}">
                        <input type="hidden" name="user_role" value="{{ $current->role }}">
                        <div class="form-group">
                            <label>Name : </label>
                            <input type="text" name="user_name" class="form-control" value="{{ $current->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>User Surname : </label>
                            <input type="text" name="user_surname" class="form-control" value="{{ $current->surname }}" required>
                        </div>
                        <div class="form-group">
                            <label>Picture Url : </label>
                            <input type="text" name="user_pictureurl" class="form-control" value="{{ $current->picture_url }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email : </label>
                            <input type="text" name="user_email" class="form-control" value="{{ $current->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>Old Password: </label>
                            <input type="password" name="user_oldpassword" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>New Password : </label>
                            <input type="password" name="user_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password : </label>
                            <input type="password" name="user_repassword" class="form-control" required>
                        </div>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-dark">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
