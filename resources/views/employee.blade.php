<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All employees
                        </div>
                        <div class="card-body">
                            <table class="table">
                                 <thead>
                                    <tr>
                                        <th scope="col">firstname</th>
                                         <th scope="col">email</th>
                                         <th scope="col">phonenumber</th>
                                         <th scope="col">gender</th>
                                         <th scope="col">city</th>
                                         <th scope="col">state</th>
                                         <th scope="col">department</th>
                                         <th scope="col">date of birth</th>
                                         <th scope="col">date of joining</th>
                                        
                                    </tr>
                                 </thead>    
                             <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->firstname}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->phonenumber}}</td>
                                        <td>{{$employee->gender}}</td>
                                        <td>{{$employee->city}}</td>
                                        <td>{{$employee->state}}</td>
                                        <td>{{$employee->department}}</td>
                                        <td>{{$employee->date_of_birth}}</td>
                                        <td>{{$employee->date_of_joining}}</td>
                                        
                                        
                                    </tr>
                                @endforeach
                             </tbody>  
                            </table>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
