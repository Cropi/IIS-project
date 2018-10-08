@extends('layouts.app')
@section('content')


<h1>List of all prescriptions about the treatment</h1>
<h3>    Pet name: <strong>{{$animal}}</strong><br/></h3><h3>
        Owner name: <strong>{{$owner}}</strong><br/></h3><h3>
        Owner ID: <strong>{{$owner_id}}</strong><br/></h3><h3>
        Veterinarian who started: <strong>{{$user}}</strong><br/></h3><h3>

    </h3>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>

<table class="table table-bordered table-striped table-bordered table-sm" data-sorting="true">
    <thead>
        <tr>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">Disease</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer">Amount</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer">For how much time</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')" style="cursor:pointer">Veterinarian</th>
            <th width="0px"></th>
        </tr>
    </thead>
    <tbody id="myTable">

        @foreach ($dosages as $dosage)
        <tr class="item">
            <td>XXX</td>
            <td>{{$dosage->disease}}</td>
            <td>{{$dosage->amount1}} / {{$dosage->amount2}}(s)</td>
            <td>{{$dosage->timeToConsume1}}  {{$dosage->timeToConsume2}}(s)</td>
            <td></td>
        </tr>
        @endforeach



    </tbody>

</table>

<p>Note that removed owners can not be restored.</p>
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
