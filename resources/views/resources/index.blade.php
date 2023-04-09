
<!DOCTYPE html >
<html lang="en" dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5"><h2>المواد الأولية </h2></div>
                    <div class="col-sm-3">
                        <a href="{{ route('resources.create') }}" class="btn btn-success" style="margin_right:57px">Create Post</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الاسم</th>
                        <th>أساسية</th>
                        <th>الكمية</th>
                        <th>الواحدة</th>
                        <th>الحد الأدنى</th>
                        <th>سعر الواحدة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($resources as $resource)
                    <tr>
                        <td>{{ $resource->id }}</td>
                        <td>{{ $resource->name }}</td>
                        <td>
                            @if ($resource->is_essential)
                                  نعم
                            @else
                                   لا
                            @endif
                           
                        </td>
                        <td>{{ $resource->quantity }}</td>
                        <td>{{ $resource->unit }}</td>
                        <td>{{ $resource->quantity_limit }}</td>
                        <td>{{ $resource->unit_price }}</td>
                        <td>
                            <a href="{{ route('resources.delete',$resource->id) }}" class="view" title="View" data-toggle="tooltip"><i class="material-icons" style="color: rgb(12, 111, 224)">&#xE417;</i></a>
                            <a href="{{ route('resources.edit',$resource->id) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit" style="color: rgb(255, 238, 0)">&#xE254;</i></a>
                            <a href="{{ route('resources.delete',$resource->id) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete" style="color: rgb(221, 15, 15)">&#xE872;</i></a>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>
