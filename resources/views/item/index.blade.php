@extends('layouts.base')
@section('body')
<style>
    * {
        margin-top: 10px;
    }

    .left-col {
        float: left;
        width: 25%;
    }

    .center-col {
        float: left;
        width: 50%;
    }

    .right-col {
        float: left;
        width: 25%;
    }
</style>

<div class="container">

    <!-- <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#itemModal">New
        Item
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>

    <button type="button" class="btn btn-info btn-lg" id="customerbtn" style="float: right">Show
        Customers<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
    <div class="table-responsive"> -->

        <table id="itable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Description</th>
                    <th>Sell price</th>
                    <th>Cost price</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
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
                        <label for="img_path" class="control-label">img_path</label>
                        <input type="file" class="form-control" id="img_path" name="img_path" />
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

@endsection