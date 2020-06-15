<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookTour</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="height: 100%; width: 90%; margin: auto;">
    <div style="height: 50%; width: 40%; margin: auto;">
        <h1 style="text-align: center;">Add tour</h1>
        <form action="/admin/tours" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Name" name="name">
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="Image" name="image">
            </div>
            <div class="form-group">
                <label for="">Type Tour</label>
                <input type="text" class="form-control" id="" placeholder="Type tour" name="typetour">
            </div>
            <div class="form-group">
                <label for="">Schedule</label>
                <input type="text" class="form-control" id="" placeholder="Schedule" name="schedule">
            </div>
            <div class="form-group">
                <label for="">Depart</label>
                <input type="date" class="form-control" id="" placeholder="Depart" name="depart">
            </div>
            <div class="form-group">
                <label for="">Number People</label>
                <input type="text" class="form-control" id="" placeholder="Number People" name="number">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" id="" placeholder="Price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>