@extends('layouts.app')
@section('content')

@if ($data['error'] == 'error')
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="pficon pficon-close"></span>
    </button>
    <span class="pficon pficon-error-circle-o"></span>
    <strong>Hey there is a problem!</strong> You can not add prescriptions if the treatments owner/animal has been removed!
</div>
@elseif($data['error'] == 'update')
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-ok"></span>
  <strong>Great job!</strong> You have successfully updated the requested treatment.
</div>
@elseif($data['error'] == 'add-prescription')
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-ok"></span>
  <strong>Great job!</strong> You have successfully added the requested prescription.
</div>
@elseif($data['error'] == 'create')
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-ok"></span>
  <strong>Great job!</strong> You have successfully created the requested treatment.
</div>
@elseif($data['error'] == 'destroy')
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-ok"></span>
  <strong>Great job!</strong> You have successfully removed the requested treatment.
</div>

@endif

<h1>Treatments</h1>
<p>You can add/modify/delete treatments.</p>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>

<table class="table table-bordered table-striped table-bordered table-sm" data-sorting="true">
    <thead>
        <tr>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer"> ID </th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">Diagnosis</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer">Animal</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer">State</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')" style="cursor:pointer">Price</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(6)')" style="cursor:pointer">Veterinarian</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(7)')" style="cursor:pointer">Start date</th>
            <th width="0px"></th>
        </tr>
    </thead>
    <tbody id="myTable">

    @foreach($data['treatments'] as $treatment)
        <tr class="item">
            <td>{{$treatment->id}}</td>
            <td>{{$treatment->diagnosis}}</td>
            <td>{{$treatment->animal != NULL ? $treatment->animal->name : "-"}}</td>
            <td>{{$treatment->state}}</td>
            <td>{{$treatment->price}}</td>
            <td>{{$treatment->user->name}}</td>
            <td>{{$treatment->startDate}}</td>
            <td width="2">
                <div class="dropdown table-view-pf-actions">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="fa fa-ellipsis-v"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownKebabRight">
                        <li><a href="{{route('show-treatment', $treatment->id)}}" >Show treatment</a></li></li>
                        @if (Auth::user()->isVeterinarian())
                            <li><a href="{{route('sidebar.treatments.edit', $treatment->id)}}" >Edit treatment</a></li></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('add-prescription-medicine', $treatment->id)}}" >Add prescription</a></li></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('sidebar.treatments.ask-delete', $treatment->id)}}">Delete treatment</a></li>
                        @endif
                </div>
            </td>
        </tr>
    @endforeach

    </tbody>

</table>

<p>Note that removed treatments can not be restored.</p>
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
