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

    <div id="customers" class="container">
        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">ADD <span
                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
        </a>
        <button type="button" class="btn btn-info btn-lg" id="item">Swap<span class="glyphicon glyphicon-plus"
                aria-hidden="true"></span></button>


        <div class="table-responsive">
            <table id="ctable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Title</th>
                        <th>lname</th>
                        <th>fname</th>
                        <th>address</th>
                        <th>town</th>
                        <th>zipcode</th>
                        <th>number</th>
                        <th>credit limit</th>
                        <th>level</th>
                        <th>Edit</th>
                        <th>Delete</th>
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

    <div class="modal fade" id="editModal" role="dialog" style="display:none">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update customer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateform" method="#" action="#">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="form-group">
                            <label for="etitle" class="control-label">Title</label>
                            <input type="text" class="form-control" id="etitle" name="title">
                        </div>
                        <div class="form-group">
                            <label for="title" class="control-label">UserId</label>
                            <input type="text" class="form-control" id="euserid" name="user_id">
                        </div>
                        <div class="form-group">
                            <label for="elname" class="control-label">last name</label>
                            <input type="text" class="form-control " id="elname" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="efname" class="control-label">First Name</label>
                            <input type="text" class="form-control " id="efname" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="eaddress" class="control-label">Address</label>
                            <input type="text" class="form-control" id="eaddress" name="addressline">
                        </div>
                        <div class="form-group">
                            <label for="etown" class="control-label">Town</label>
                            <input type="text" class="form-control" id="etown" name="town">
                        </div>
                        <div class="form-group">
                            <label for="ezipcode" class="control-label">Zip code</label>
                            <input type="text" class="form-control" id="ezipcode" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="ephone" class="control-label">Phone</label>
                            <input type="text" class="form-control" id="ephone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="zipcode" class="control-label">Credit</label>
                            <input type="text" class="form-control" id="ecredit" name="creditlimit">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">level</label>
                            <input type="text" class="form-control" id="elevel" name="level">
                        </div>
                </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button id="updatebtn" type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

    <div id="items" class="container">

        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#itemModal">add<span
                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>

        <button type="button" class="btn btn-info btn-lg" id="customerbtn">Swap<span class="glyphicon glyphicon-plus"
                aria-hidden="true"></span></button>

        <div class="table-responsive">
            <table id="itable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Description</th>
                        <th>Sell price</th>
                        <th>Cost price</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="ibody">
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="itemModal" role="dialog" style="display:none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create new item</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="iform" method="#" action="#" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="desc" class="control-label">Description</label>
                            <input type="text" class="form-control" id="desc" name="description">
                        </div>
                        <div class="form-group">
                            <label for="cost" class="control-label">Cost Price</label>
                            <input type="text" class="form-control " id="cost" name="cost_price">
                        </div>
                        <div class="form-group">
                            <label for="sell" class="control-label">sell price</label>
                            <input type="text" class="form-control " id="sell" name="sell_price">
                        </div>
                        <div class="form-group">
                            <label for="title" class="control-label">title</label>
                            <input type="text" class="form-control " id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="img" class="control-label">img</label>
                            <input type="file" class="form-control" id="img" name="img" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="itemSubmit" type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editItem" role="dialog" style="display:none">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update item</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateItem" method="#" action="#" enctype="multipart/form-data">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="form-group">
                            <label for="idescription" class="control-label">Description</label>
                            <input type="text" class="form-control" id="idescription" name="description">
                        </div>
                        <div class="form-group">
                            <label for="icost" class="control-label">Cost Price</label>
                            <input type="text" class="form-control " id="icost" name="cost_price">
                        </div>
                        <div class="form-group">
                            <label for="isell" class="control-label">sell price</label>
                            <input type="text" class="form-control " id="isell" name="sell_price">
                        </div>
                        <div class="form-group">
                            <label for="ititle" class="control-label">title</label>
                            <input type="text" class="form-control " id="ititle" name="title">
                        </div>
                        <div class="form-group">
                            <label for="iimg" class="control-label">img</label>
                            <input type="file" class="form-control" id="iimg" name="img" />
                        </div>
                </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button id="btnItem" type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>