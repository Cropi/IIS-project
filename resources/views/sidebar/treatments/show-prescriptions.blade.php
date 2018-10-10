@extends('layouts.app')
@section('styles')
<style type="text/css">
.css-serial {
    counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
    counter-increment: serial-number;  /* Increment the serial number counter */
    content: counter(serial-number);  /* Display the counter */
}

</style>
@endsection

@section('content')



<h1>Additional informations about the treament</h1>
<h3>    Diagnosis: <strong>{{$treatment->diagnosis}}</strong><br/></h3><h3>
        Pet name: <strong>{{$animal->name}}</strong><br/></h3><h3>
        Owner name: <strong>{{$owner->name}}</strong><br/></h3><h3>
        Veterinarian who started the treatment: <strong>{{$user->name}}</strong><br/></h3><h3>
    </h3><br>

<h1>List of all prescriptions about the treatment</h1>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>

<table class="table table-bordered table-striped table-bordered table-sm css-serial" data-sorting="true">
    <thead>
        <tr>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">Disease</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer">Medicine</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer">Amount</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')" style="cursor:pointer">For how much time</th>
            <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(6)')" style="cursor:pointer">Prescipted by</th>
        </tr>
    </thead>
    <tbody id="myTable">

        @foreach ($dosages as $dosage)
        <tr class="item">
            <td></td>
            <td>{{ $dosage->disease }}</td>
            <td>{{ $dosage->medicine['name'] }}</td>
            <td>{{ $dosage->amount1}} / {{$dosage->amount2 }}(s)</td>
            <td>{{ $dosage->timeToConsume1 }}  {{$dosage->timeToConsume2}}(s)</td>
            <td> {{ $dosage->user['name'] }} </td>
        </tr>
        @endforeach

    </tbody>

</table>

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
