<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container" style="width: 100%;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
    <h2>Student List</h2>
    <a href="{{url('/export-student')}}" style="margin-top: 20px;"><button type="button" class="btn btn-success">Export Excel</button></a>

    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Disease</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
       
                <td>
                    <!-- <button type="button" class="btn btn-primary">View</button> -->
                    <a href="{{url('/update-student')}}/{{$student->stu_id}}"><button type="button" class="btn btn-success">Update</button></a>
                    <a href="{{url('/delete-student')}}/{{$student->stu_id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        
        </tbody>
    </table>
</div>