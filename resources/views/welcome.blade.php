<!doctype html>
<html lang="en">
<head>

    <style>
        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 10px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
        }

        /* Style the active class, and buttons on mouse-over */
        .active, .btn:hover {
            background-color: #666;
            color: white;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <title>Laravel9 and AJAX</title>
</head>
<body class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top: 20px">
            <form class="row g-3" action="{{ route('categorySubmit') }}" method="post" >
                @csrf
                <h2> CATEGORIES </h2>
                <label for="category" class="">Add Category</label>
                <div class="col-5">
                    <input type="text" name="category" class="form-control" id="Category" placeholder="Enter Category Name" required>
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
{{--                    <span class="{{ $datas->id }} ">x</span>--}}
                    <td>
                        <a class="" onclick="return confirm('are u sure to delete')" href="{{ route('deleteCategory',$datas->id) }}">X</a>
                    </td>
                    {{ $datas->category }}
                </div>
               @endforeach
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12" style="margin-top: 20px">
            <form class="row g-3" action="{{ route('TodoSubmit') }}" method="post" >
                @csrf
                <h2> ADD TO DO </h2>
                <label for="category" class="">Title</label>
                <div class="col-6">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title Name" required>
                </div>
                <label for="category" class="">Choice Category</label>


                <br><br>
                <!-- Department Employees Dropdown -->
                <div class="col-5">
                    <select name="selected" class="form-select" aria-label="Default select example">
                        <option label="Select your category">Select your category</option>
                        @foreach($data as $datas)
                        <option value="{{ $datas->category}}"> {{ $datas->category}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-5">
                    <button type="submit" class="btn btn-secondary mb-3">ADD TO DO</button>
                </div>
            </form>
        </div>

        <hr>

        <div class="row" >

            <div class="col">
{{--                <p> category name:</p>--}}
                <p >All-Data</p>
            </div>

            @foreach($data as $datas)
            <div class="col">
                <button id="change">{{ $datas->category }}</button>

            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12" style="margin-top: 20px;">
                @foreach($task as $tasks)
                    <div class="col-5"  >
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                    <input type="checkbox" id="checkbox" class="checkbox" />
                            </div>
                            {{ $tasks->todo_text }}
                        </div>
                @endforeach
            </div>
        </div>

    </div>


</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $('.checkbox').change(function() {

        if (this.checked) {
            $(this).parent().parent().css("text-decoration", "line-through");
        } else {
            $(this).parent().parent().css("text-decoration", "none");
        }
    });

</script>

</body>
</html>
