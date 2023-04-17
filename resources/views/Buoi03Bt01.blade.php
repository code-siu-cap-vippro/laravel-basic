<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hình Chữ Nhật</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-primary fs-3 text-center">
           Tính Chu Vi - Diện Tích Hình Chữ Nhật
        </div>
        <table class="table table-danger">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Hình Chữ Nhật</th>
                <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">01</th>
                <td>Chiều dài: 3.2m - Chiều rộng: 13.5m</td>
                <td><a class="btn btn-success" href="{{route('hcn',['cd' => 3.2, 'cr' => 13.5])}}">Tính</a></td>
                </tr>
                <tr>
                    <th scope="row">02</th>
                    <td>Chiều dài: 6.4m - Chiều rộng: 13.5m</td>
                    <td><a class="btn btn-success" href="{{route('hcn',['cd' => 6.4, 'cr' => 13.5])}}">Tính</a></td>
                </tr>
            </tbody>
            @if(isset($cv))
                <tfoot>
                    <tr class="text-center">
                        <th colspan="3">Chu vi: {{$cv}} -  Diện Tích: {{$dt}}</th>
                    </tr>
                </tfoot>
            @endif
        </table>
    </div>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>