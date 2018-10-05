@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <hr/>
    <div class="blank-slate-pf " id="">
        <h1> Welcome on the site, {{Auth::user()->name}} </h1>
        <h3> Your last visit: {{Auth::user()->lastLogin}} </h3>
        <div class="col-sm-12">
        <div class="alert alert-warning" role="alert">
            <h2 > If it wasn't you, please contact the system administrator </h2>
        </div>
    </div>
    </div>
</div>
@endsection
