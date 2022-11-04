<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel9 and AJAX</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top: 20px">
            <form class="row g-3" action="{{ route('categorySubmit') }}" method="post" >
                @csrf
                <div class="col-5">
                    <label for="category" class="visually-hidden">Category</label>
                    <input type="text" name="category" class="form-control" id="Category" placeholder="Enter Category Name">
                </div>
                <div class="col-5">
                    <button type="submit" class="btn btn-secondary mb-3">ADD Category</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" style="margin-top: 20px">
               @foreach($data as $datas)
                <div class="col-5">
                    {{ $datas->category }}
                </div>
               @endforeach
        </div>
    </div>


</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
