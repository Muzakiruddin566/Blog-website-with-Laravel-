<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

{{--    <link href="{{ asset('css/index.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}" />

    <title>{{$blog->tile}}</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('uploads/'.$blog->image)}}" alt="{{$blog->tile}}" class="images">
                <h3 class="mt-5">{{$blog->tile}}</h3>
                <h5 class="mt-3">{{$blog->Shortdescription}}</h5>
                <p class="mt-3">{{$blog->Description}}</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <lable for="comment" class="commtent">Comment</lable>
                @if (Route::has('login'))
                    <div class="col-12">
                        @auth
                            <br>
                            <textarea name="comment" id="comment" cols="15" rows="10" class="w-100"></textarea>
                            <br>
                            <input type="submit" name="submit" value="Submit">
                        @else
                            <h3>Please Login</h3>
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
