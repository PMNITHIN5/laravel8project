<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <section>
      <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add new employee
                        </div>
                        <div class="card-body">
                            @if(Session::has('employee_created'))
                             <div class="alert alert-success" role="alert">
                                 {{Session::get('employee_created')}}
                            @endif
                            <form method="POST" action="{{route('employee.addEmployeeSubmit')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="firstname">FirstName:</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Enter first Name"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email "/>
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber">PhoneNumber:</label>
                                    <input type="number" name="phonenumber" class="form-control" placeholder=" "/>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <input type="text" name="gender" class="form-control" placeholder=" "/>
                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" name="city" class="form-control" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <label for="state">state:</label>
                                    <input type="text" name="state" class="form-control" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <label for="department">department:</label>
                                    <input type="text" name="department" class="form-control" placeholder=""/>

                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">date_of_birth:</label>
                                    <input type="date" name="date_of_birth" class="form-control" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_joining">date_of_joining:</label>
                                    <input type="date" name="date_of_joining" class="form-control" placeholder=""/>
                                </div>
                                <br>
                                <input type="submit"  class="btn btn-success"value="Submit"/>
                            </form>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>