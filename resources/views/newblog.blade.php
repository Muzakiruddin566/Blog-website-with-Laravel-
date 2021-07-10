<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>NewBLog</title>
</head>
<body>
    <form class="mt-5" method="post" action="{{route('submit')}}" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title">
            </div>
        </div>
        <div class="form-group">
            <label for="inputdes" class="col-sm-2 col-form-label">Short Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputdes" name="Shortdescription" placeholder="Short Description" maxlength="50">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="Description" rows="5" placeholder="Description.."></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
