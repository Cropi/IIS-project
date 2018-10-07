@extends('layouts.app')
@section('content')

@if ($data['error'] == 'error')
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="pficon pficon-close"></span>
    </button>
    <span class="pficon pficon-error-circle-o"></span>
    <strong>Hey there is a problem!</strong> You can not remove yourself!
</div>
@elseif($data['error'] == 'update')
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-ok"></span>
  <strong>Great job!</strong> You have successfully modified the requested person.
</div>
@elseif($data['error'] == 'destroy')
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-ok"></span>
  <strong>Great job!</strong> You have successfully removed the requested person.
</div>

@endif

<h1>Pet owners</h1>
<p>You can add/modify/delete animals.</p>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>

<table class="table table-bordered table-striped table-bordered table-sm" data-sorting="true">
    <thead>
        <tr>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer"> ID</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">Name</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer">Type</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer">Birthday</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')" style="cursor:pointer">Last visit</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(6)')" style="cursor:pointer">Owner(FK)</th>
            <th width="0px"></th>
        </tr>
    </thead>
    <tbody id="myTable">

    @foreach($data['animals'] as $animal)
        <tr class="item">
            <td>{{$animal->id}}</td>
            <td>{{$animal->name}}</td>
            <td>{{$animal->type}}</td>
            <td>{{$animal->birthday}}</td>
            <td>{{$animal->lastVisit}}</td>
            <td>{{$animal->owner == NULL ? "-" : $animal->owner->name}}</td>
            <td width="2">
                <div class="dropdown table-view-pf-actions">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="fa fa-ellipsis-v"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                        <li><a href="{{route('sidebar.animals.edit', $animal->id)}}" >Modify owner</a></li></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('sidebar.animals.ask-delete', $animal->id)}}">Delete owner</a></li>
                </div>
            </td>
        </tr>
    @endforeach

    </tbody>

</table>

<p>Note that removed animals can not be restored.</p>
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
