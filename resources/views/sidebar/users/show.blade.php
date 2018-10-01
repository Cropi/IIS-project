@extends('layouts.app')
@section('content')

@if ($data['error'] == 'true')
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="pficon pficon-close"></span>
    </button>
    <span class="pficon pficon-error-circle-o"></span>
    <strong>Hey there is a problem!</strong> You can not remove yourself!
</div>
@endif

<h1>System users</h1>
<p>Your are a system admin so you can change user privileges and informations. You can also create, modify and delete users whenever you want</p>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>

<table class="table table-bordered table-striped table-bordered table-sm" data-sorting="true">
    <thead>
        <tr>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">Email</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">Name</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer">Titul</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer">Role</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')" style="cursor:pointer">Adress</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(6)')" style="cursor:pointer">Account number</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(7)')" style="cursor:pointer">Wage</th>
            <th width="0px"></th>
        </tr>
    </thead>
    <tbody id="myTable">

    @foreach($data['users'] as $user)
        <tr class="item">
            <td>{{$user->email}}</td>
            <td>{{$user->name}}</td>
            <td>Mudr.</td>
            <td>{{$user->role}}</td>
            <td>{{$user->adress}}</td>
            <td>{{$user->bankAccountNumber}}</td>
            <td>{{$user->wage}}</td>
            <td width="2">
                <div class="dropdown table-view-pf-actions">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="fa fa-ellipsis-v"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                        <li><a href="{{route('sidebar.users.edit', $user->id)}}" >Modify user</a></li></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('sidebar.users.ask-delete', $user->id)}}">Delete user</a></li>
                </div>
            </td>
        </tr>
    @endforeach

    </tbody>

</table>

<p>Note that removed users can not be restored.</p>
</div>

<script>
$(document).ready(function(){
$("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#myTable tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
});
</script>


<script>
$(document).ready(function(){
 $("#myInput").on("keyup", function() {
   var value = $(this).val().toLowerCase();
   $("#myTable tr").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
 });
});
</script>

@endsection
