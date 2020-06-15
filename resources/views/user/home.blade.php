<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Tour Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="/JS/index.js"></script>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
        integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <style>
    .image {
        position: relative;
      

    }

    .bottom-left {
        position: absolute;
        bottom: 1px;
        left: 0px;
       
        
    }
    </style>
</head>

<body>
    <div style="backgroung-color: white; display:flex;;">

        <div>
            <img src="images/logo.png" alt="" style="height: 100px; width:300px;">
        </div>

        <div style="margin-left: 150px; padding: 30px 30px 30px 30px;">

            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"><span style="color: #F40C74;"> DU LỊCH</span> </a>
                <a class="navbar-brand">BOOK VÉ MÁY BAY</a>
                <a class="navbar-brand">BOOK KHÁCH SẠN</a>
                <a class="navbar-brand">DU LỊCH VISA</a>
                <a class="navbar-brand">THUÊ XE</a>
                <a class="navbar-brand">TIN TỨC</a>
                <a class="navbar-brand">GIỚI THIỆU</a>
            </nav>
        </div>


    </div>

    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach($tours as $tour)
                            <div class="col-md-4">
                                <div>
                                    <div class="image">
                                        <img src="/{{$tour->image}}" style="height:200px; width:300px;" alt="" />
                                        <div class="bottom-left" >
                                            <span style="background-color:#F8408D; color: white ; "> <i class="far fa-clock"> Còn 19 ngày 14 h</i></span> 
                                            <span style="background-color:#5D5959; color: white; "> Từ {{$tour->typetour}}</span>
                                        </div>

                                    </div>


                                    <p style="background-color: #F7EFEF; width: 300px;">{{$tour->name}}</p>
                                </div>
                                <div style="display:flex; background-color: #F4E7EC; width: 300px;">
                                    <div>
                                        <i class="far fa-clock"> Lịch trình: {{$tour->schedule}}</i>

                                        <i class="fas fa-calendar-alt"> Khởi hành: {{$tour->depart}} </i>
                                        <i class="far fa-user"> Số chổ còn nhận: {{20-$tour->number}}</i>

                                    </div>
                                    <div style="margin-top: 20px; margin-right: 10px;">
                                        <p style="color:red;">{{$tour->price}}đ</p>
                                    </div>
                                </div>
                                <br>
                            </div>

                            @endforeach
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>