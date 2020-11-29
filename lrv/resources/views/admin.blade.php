<!DOCTYPE html>
<html lang="en">
{{-- <?php
    include 'php_backend/DBManager.php';
?> --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Including HTMLs with JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <style>
        ul.ks-cboxtags {
            list-style: none;
            padding: 0px;
        }
        ul.ks-cboxtags li{
            display: inline;
        }
        ul.ks-cboxtags li label,
        ul.ks-cboxtags li div form label {
            display: inline-block;
            background-color: rgba(255, 255, 255, .9);
            border: 2px solid rgba(139, 139, 139, .3);
            color: #adadad;
            border-radius: 25px;
            white-space: nowrap;
            margin: 3px 0px;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            transition: all .2s;
        }

        ul.ks-cboxtags li label,
        ul.ks-cboxtags li div form label {
            padding: 8px 12px;
            cursor: pointer;
        }

        ul.ks-cboxtags li label::before,
        ul.ks-cboxtags li div form label::before {
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 12px;
            padding: 2px 6px 2px 2px;
            content: "\f067";
            transition: transform .3s ease-in-out;
        }

        ul.ks-cboxtags li input[type="checkbox"]:checked + label::before,
        ul.ks-cboxtags li div form input[type="checkbox"]:checked + label::before {
            content: "\f00c";
            transform: rotate(-360deg);
            transition: transform .3s ease-in-out;
        }

        ul.ks-cboxtags li input[type="checkbox"]:checked + label,
        ul.ks-cboxtags li div form input[type="checkbox"]:checked + label {
            border: 2px solid #1bdbf8;
            background-color: #12bbd4;
            color: #fff;
            transition: all .2s;
        }

        ul.ks-cboxtags li input[type="checkbox"],
        ul.ks-cboxtags li div form input[type="checkbox"] {
            display: absolute;
        }
        ul.ks-cboxtags li input[type="checkbox"],
        ul.ks-cboxtags li div form input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }
        ul.ks-cboxtags li input[type="checkbox"]:focus + label,
        ul.ks-cboxtags li div form input[type="checkbox"]:focus + label {
            border: 2px solid #e9a1ff;
        }
    </style>
    {{-- <div id="links"></div> --}}    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- FontAwesome icons -->
    <script src="https://kit.fontawesome.com/7a19382369.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">IITU SELECTION COMMITTEE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="btn btn-danger btn-md ml-auto" href="{{ route('signout') }}">Sign Out</a>
    </nav>

    <div class="col-sm-12 d-flex h-100 pl-0">
        {{-- <div class="col-sm-2 d-inline-block sticky-top" style="background-color: gainsboro; height: 100%; position: relative;">
            <h2 class="mt-4">ADMIN PANEL</h2>
            <ul class="list-group mt-4">
                <li class="list-group-item" style="background-color: gainsboro"><a href="{{ route('admin') }}#users" style="color: black;"><b>Users</b></a></li>
                <li class="list-group-item" style="background-color: gainsboro"><a href="{{ route('admin') }}#posts" style="color: black;"><b>Posts</b></a></li>
                <li class="list-group-item" style="background-color: gainsboro"><a href="{{ route('admin') }}#categories" style="color: black;"><b>Categories</b></a></li>
            </ul>
        </div> --}}

        <div class="col-2 mt-4" id="sticky-sidebar">
            <div class="sticky-top">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action bg-dark" th:disabled="'disabled'" style="color: white"><h4 class="text-center">Admin page</h4></a>

                    <a href="{{ route('admin') }}#users" class="list-group-item list-group-item-action" style="color: black;"><b>Users</b></a>
                    <a href="{{ route('admin') }}#posts" class="list-group-item list-group-item-action" style="color: black;"><b>Posts</b></a>
                    <a href="{{ route('admin') }}#categories" class="list-group-item list-group-item-action" style="color: black;"><b>Categories</b></a>
                </div>
            </div>
        </div>

        <div class="col-sm-10 d-inline-block">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Successfully!<br>
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if (session('fail'))
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                Something went wrong!
                {{ session('fail') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif





            <div class="row col-sm-12 justify-content-between mt-4">
                <h4>List of all <span style="color: crimson">Users</span></h4>
                <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#add_user">+ ADD NEW </button> -->
            </div>

            <!-- <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="AddUserModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddUserModalLabel">Add a User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/edit?action=add" method="post">
                                @csrf
                                <input type="hidden" name="user" value="">
                                <div class="form-group">
                                    <label>User Name : </label>
                                    <input type="text" name="language_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Language Code : </label>
                                    <input type="text" name="language_code" class="form-control" required>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-success">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="row mt-4 mb-4">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped" id="users">
                        <thead class="font-weight-bold bg-secondary">
                            <tr>
                                <td>ID</td>
                                <td>EMAIL</td>
                                <td>NAME</td>
                                <td>SURNAME</td>
                                <td>ROLE</td>
                                <td>OPERATIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->surname }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_user{{ $user->id }}">DELETE</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_user{{ $user->id }}">EDIT</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="delete_user{{ $user->id }}" tabindex="-1" aria-labelledby="DeleteUserModalLabel{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteUserModalLabel{{ $user->id }}">Confirm to Delete {{ $user->email }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('user-delete') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit_user{{ $user->id }}" tabindex="-1" aria-labelledby="EditUserModalLabel{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditUserModalLabel{{ $user->id }}">Change the Values {{ $user->email }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('user-edit') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <input type="hidden" name="user_password" value="{{ $user->password }}">
                                                <input type="hidden" name="user_oldpassword" value="{{ $user->password }}">
                                                <input type="hidden" name="user_repassword" value="{{ $user->password }}">
                                                <input type="hidden" name="user_name" value="{{ $user->name }}">
                                                <input type="hidden" name="user_surname" value="{{ $user->surname }}">
                                                <input type="hidden" name="user_pictureurl" value="{{ $user->picture_url }}">
                                                <div class="form-group">
                                                    <label>User Email : </label>
                                                    <input readonly type="text" name="user_email" class="form-control" value="{{ $user->email }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>User Role : </label>
                                                    <select name="user_role" class="form-control" required>
                                                        <option value="student" @if ($user->role == 'student')
                                                                                    {{ 'selected' }}
                                                                                @endif>
                                                            Student
                                                        </option>
                                                        <option value="admin" @if ($user->role == 'admin')
                                                                                    {{ 'selected' }}
                                                                                @endif>
                                                            Administrator
                                                        </option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-success">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>




            <!-- POSTS -->
            <div class="row col-sm-12 justify-content-between mt-4">
                <h4>List of all <span style="color: crimson">Posts</span></h4>
                <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#add_post">+ ADD NEW </button>
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
                            <form action="{{ route('post-add') }}" method="post">
                                @csrf
                                <ul class="ks-cboxtags">
                                    <li><input type="checkbox" id="active" name="post_active" value="1"><label for="active">Active</label></li>
                                    <li><input type="checkbox" id="top" name="post_top" value="1"><label for="top">In top</label></li>
                                </ul>
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
                                    <label>Author</label>
                                    <select name="author_id" class="form-control">
                                        <option selected disabled>Choose</option>
                                        @foreach ($users as $us)
                                        <option value="{{ $us->id }}">{{ $us->id }}. {{ $us->name }} {{ $us->surname }}</option>
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
                                    <textarea name="post_content" class="form-control" rows="6" required></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-success">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-4 mb-4">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped" id="posts">
                        <thead class="font-weight-bold bg-secondary">
                            <tr>
                                <td>ID</td>
                                <td>TITLE</td>
                                <td>DATE</td>
                                <td>ACTIVE</td>
                                <td>TOP</td>
                                <td>CATEGORY</td>
                                <td>OPERATIONS</td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($posts as $post)
                            <?php
                                $post_category = null;
                                foreach ($categories as $cat) {
                                    if ($cat->id == $post->category_id) {
                                        $post_category = $cat;
                                        break;
                                    }
                                }
                            ?>

                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->active }}</td>
                                <td>{{ $post->top }}</td>
                                <td>{{ $post_category->name }}</td>
                                <td class="row">
                                    <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#delete_post{{ $post->id }}">DELETE</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_post{{ $post->id }}">EDIT</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="delete_post{{ $post->id }}" tabindex="-1" aria-labelledby="DeletePostModalLabel{{ $post->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeletePostModalLabel{{ $post->id }}">Confirm to Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('post-delete') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $post->id }}">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit_post{{ $post->id }}" tabindex="-1" aria-labelledby="EditPostModalLabel{{ $post->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditPostModalLabel{{ $post->id }}">Change the Values</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('post-edit') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $post->id }}">
                                                <input type="hidden" name="post_likes" class="form-control" value="{{ $post->likes }}">
                                                <input type="hidden" name="author_id" class="form-control" value="{{ $post->author_id }}">
                                                {{-- <div class="form-group">
                                                    <input type="checkbox" name="active" value="1">
                                                </div> --}}

                                                <ul class="ks-cboxtags">
                                                    <li><input type="checkbox" id="active{{ $post->id }}" name="post_active" value="1" @if ($post->active == 1) {{ 'checked' }} @endif><label for="active{{ $post->id }}">Active</label></li>
                                                    <li><input type="checkbox" id="top{{ $post->id }}" name="post_top" value="1" @if ($post->top == 1) {{ 'checked' }} @endif><label for="top{{ $post->id }}">In top</label></li>
                                                </ul>
                                                <div class="form-group">
                                                    <label>Category : </label>
                                                    <select name="post_category_id" class="form-control">
                                                        <option selected disabled>Choose</option>
                                                        @foreach ($categories as $cat)
                                                        {{-- <option value="{{ $cat->id }}" <?php if ({{ $cat->id == $post_category->id }}) {echo 'selected';} ?> >{{ $post->name }}</option> --}}

                                                        <option value="{{ $cat->id }}" @if ($cat->id == $post_category->id) {{ 'selected' }} @endif ( ) >
                                                            {{ $cat->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Title : </label>
                                                    <input type="text" name="post_title" class="form-control" value="{{ $post->title }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Picture URL : </label>
                                                    <input type="text" name="post_pictureurl" class="form-control" value="{{ $post->picture_url }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Short Content : </label>
                                                    <textarea name="post_shortcontent" class="form-control" rows="3" required>{{ $post->short_content }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Content : </label>
                                                    <textarea name="post_content" class="form-control" rows="6" required>{{ $post->content }}</textarea>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-success">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>







            <!-- CATEGORIES -->
            <div class="row col-sm-12 justify-content-between mt-4">
                <h4>List of all <span style="color: crimson">Categories</span></h4>
                <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#add_category">+ ADD NEW </button>
            </div>

            <div class="modal fade" id="add_category" tabindex="-1" aria-labelledby="AddCategoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddCategoryModalLabel">Add a Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('category-add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Category Name : </label>
                                    <input type="text" name="category_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Category Background Color : </label>
                                    <input type="text" name="category_bgcolor" class="form-control" required>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-success">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-4 mb-4">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped" id="categories">
                        <thead class="font-weight-bold bg-secondary">
                            <tr>
                                <td>ID</td>
                                <td>NAME</td>
                                <td>BACKGROUND COLOR</td>
                                <td>OPERATIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)

                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->bg_color }}</td>
                                <td class="row">
                                    <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#delete_category{{ $cat->id }}">DELETE</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_category{{ $cat->id }}">EDIT</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="delete_category{{ $cat->id }}" tabindex="-1" aria-labelledby="DeleteCategoryModalLabel{{ $cat->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteCategoryModalLabel{{ $cat->id }}">Confirm to Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('category-delete') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $cat->id }}">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit_category{{ $cat->id }}" tabindex="-1" aria-labelledby="EditCategoryModalLabel{{ $cat->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EditCategoryModalLabel{{ $cat->id }}">Change the Values</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('category-edit') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $cat->id }}">
                                                <div class="form-group">
                                                    <label>Category Name : </label>
                                                    <input type="text" name="category_name" class="form-control" value="{{ $cat->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Category Background Color : </label>
                                                    <input type="text" name="category_bgcolor" class="form-control" value="{{ $cat->bg_color }}" required>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                <button type="submit" class="btn btn-success">SAVE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>




        </div>


        <script src="src/scripts/bootstrap.min.js"></script>
        <script src="src/scripts/scripts.js"></script>
</body>

</html>
