<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"
        integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/custom.js"></script>
</head>

<body>

    <div class="container">
        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">ADD <span
                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Launch demo modal
        </button>
        </a>


        <div class="table-responsive">
            <table id="ctable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Title</th>
                        <th>lname</th>
                        <th>fname</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Restore</th>
                    </tr>
                </thead>
                <tbody id="cbody">
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create new customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cform" action="#">

                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" class="form-control" id="titulo" name="title">

                        </div>

                        <div class="form-group">
                            <label for="lname" class="control-label">USER_ID</label>
                            <input type="text" class="form-control " id="user_id" name="user_id">

                        </div>

                        <div class="form-group">
                            <label for="lname" class="control-label">last name</label>
                            <input type="text" class="form-control " id="lname" name="lname">

                        </div>
                        <div class="form-group">
                            <label for="fname" class="control-label">First Name</label>
                            <input type="text" class="form-control " id="fname" name="fname">

                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address</label>
                            <input type="text" class="form-control" id="address" name="addressline">

                        </div>
                        <div class="form-group">
                            <label for="town" class="control-label">Town</label>
                            <input type="text" class="form-control" id="town" name="town">
                        </div>
                        <div class="form-group">
                            <label for="zipcode" class="control-label">Zip code</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label">Credit Limit</label>
                            <input type="text" class="form-control" id="creditlimit" name="creditlimit">
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label">Level</label>
                            <input type="text" class="form-control" id="level" name="level">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button id="myFormSubmit" type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create new customer</h4>
                </div>
                <div class="modal-body">
                  
                    <form id="cform" method="post" action="#">
                        
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" class="form-control" id="titulo" name="title">
                               
                        </div>
                        <div class="form-group">
                            <label for="lname" class="control-label">last name</label>
                            <input type="text" class="form-control " id="lname" name="lname">
                                
                        </div>
                        <div class="form-group">
                            <label for="fname" class="control-label">First Name</label>
                            <input type="text" class="form-control " id="fname" name="fname">
                                
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address</label>
                            <input type="text" class="form-control" id="address" name="addressline">
                           
                        </div>
                        <div class="form-group">
                            <label for="town" class="control-label">Town</label>
                            <input type="text" class="form-control" id="town" name="town">
                        </div>
                        <div class="form-group">
                            <label for="zipcode" class="control-label">Zip code</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                </div>
                </form>
            </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="myFormSubmit" type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
    </div>
    </div>
</body>

</html>