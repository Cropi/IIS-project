@extends('layouts.app')

@section('content')


<h1> Welcome </h1>

<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="pficon pficon-close"></span>
  </button>
  <span class="pficon pficon-error-circle-o"></span>
  <strong>Hey there is a problem!</strong> Yeah this is really messed up and you should <a href="#" class="alert-link">know about it</a>.
</div>

@endsection
