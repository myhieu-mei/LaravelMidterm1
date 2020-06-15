<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manage Tours</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="height: 100%; width: 90%; margin: auto; text-align: center;">
    <br><br>
    <h1 style="text-align: center;">Manage Tours</h1>

    <form action="/admin/tour/create" method="get">
                @csrf  
                <button class="btn btn-primary">Add Tour</button>
                
            </form>
<br>
            <hr>
            <br>
    <div class="row">
        <table border=1>
            <tr>
                <th>Name</th>
                <th>Iamge</th>
                <th>Type tour</th>
                <th>Schedule</th>
                <th>Depart</th>
                <th>Number people</th>
                <th>Price</th>
            </tr>
            @foreach($tours as $tour)
            <tr>
                <td>{{$tour->name}}</td>
                <td><img src="/{{$tour->image}}" style="height:170px; width:150px; "></td>
                <td style="width:200px;">{{$tour->typetour}}</td>
                <td style=" width:200px;">{{$tour->schedule}}</td>
                <td style=" width:150px;">{{$tour->depart}}</td>
                <td style=" width:150px;">{{$tour->number}}</td>
                <td style="width:150px;">{{$tour->price}}</td>
              
            </tr>

            @endforeach
        </table>
    </div>
    </body>
</html>