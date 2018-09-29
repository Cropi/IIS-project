@extends('layouts.app')

@section('content')

<script src="https://www.w3schools.com/lib/w3.js"></script>

<h1>System users</h1>
<p>Your are a system admin so you can change user privileges and informations. You can also create, modify and delete users whenever you want</p>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table class="table table-bordered table-striped table-bordered table-sm" data-sorting="true">
  <thead>
    <tr>
      <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">Email</th>
      <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">Surname</th>
      <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer">Last name</th>
      <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer">Role</th>
      <th width="0px"></th>
    </tr>
  </thead>
  <tbody id="myTable">
    <tr class="item">
      <td>John</td>
      <td>Doe</td>
      <td>john@example.com</td>
      <td>admin</td>
      <td width="2">
          <div class="dropdown table-view-pf-actions">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="fa fa-ellipsis-v"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                    <li><a href="#">Modify user</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Delete user</a></li>
      </td>
    </tr>
    <tr class="item">
      <td>Mary</td>
      <td>Moe</td>
      <td>mary@mail.com</td>
      <td>user</td>
      <td width="2">
          <div class="dropdown table-view-pf-actions">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="fa fa-ellipsis-v"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                    <li><a href="#">Modify user</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Delete user</a></li>
      </td>
    </tr>
    <tr class="item">
      <td>July</td>
      <td>Dooley</td>
      <td>july@greatstuff.com</td>
      <td>user</td>
      <td width="2">
          <div class="dropdown table-view-pf-actions">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="fa fa-ellipsis-v"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                    <li><a href="#">Modify user</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Delete user</a></li>
      </td>
    </tr>
    <tr class="item">
      <td>Anja</td>
      <td>Ravendale</td>
      <td>a_r@test.com</td>
      <td>user</td>
      <td width="2">
          <div class="dropdown table-view-pf-actions">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="fa fa-ellipsis-v"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                    <li><a href="#">Modify user</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Delete user</a></li>
      </td>
    </tr>
  </tbody>
</table>

<p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
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



<!-- Filtering -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>

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
