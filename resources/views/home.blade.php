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


<!-- Editing Modal Markup -->
<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
	<style scoped>
		/* provides a red astrix to denote required fields - this should be included in common stylesheet */
		.form-group.required .control-label:after {
			content:"*";
			color:red;
			margin-left: 4px;
		}
	</style>
	<div class="modal-dialog" role="document">
		<form class="modal-content form-horizontal" id="editor">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="editor-title">Add Row</h4>
			</div>
			<div class="modal-body">
				<input type="number" id="id" name="id" class="hidden"/>
				<div class="form-group required">
					<label for="firstName" class="col-sm-3 control-label">First Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
					</div>
				</div>
				<div class="form-group required">
					<label for="lastName" class="col-sm-3 control-label">Last Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
					</div>
				</div>
				<div class="form-group">
					<label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
					</div>
				</div>
				<div class="form-group required">
					<label for="startedOn" class="col-sm-3 control-label">Started On</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="startedOn" name="startedOn" placeholder="Started On" required>
					</div>
				</div>
				<div class="form-group">
					<label for="dob" class="col-sm-3 control-label">Date of Birth</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-sm-3 control-label">Status</label>
					<div class="col-sm-9">
						<select class="form-control" id="status" name="status">
							<option value="Active">Active</option>
							<option value="Disabled">Disabled</option>
							<option value="Suspended">Suspended</option>
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</form>
	</div>
</div>




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
