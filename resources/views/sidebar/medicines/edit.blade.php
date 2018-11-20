@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit informations about <strong>{{$data['medicine']->name}}</strong>?</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-medicine', $data['medicine']->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $data['medicine']->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Type *</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="{{ $data['medicine']->type }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('activeIngredients') ? ' has-error' : '' }}">
                            <label for="activeIngredients" class="col-md-4 control-label">Active ingredient</label>

                            <div class="col-md-6">
                                <input id="activeIngredients" type="text" class="form-control" name="activeIngredients" value="{{ $data['medicine']->activeIngredients }}">

                                @if ($errors->has('activeIngredients'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('activeIngredients') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                                   <strong>&laquo; Go back</strong>
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit contraindications about <strong>{{$data['medicine']->name}}</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add-contraindication-medicine', $data['medicine']->id) }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('contraindication') ? ' has-error' : '' }}">
                            <label for="contraindication" class="col-md-4 control-label">Contraindication *</label>

                            <div class="col-md-6">
                                <input id="contraindication" type="text" class="form-control" name="contraindication" value="" required autofocus>

                                @if ($errors->has('contraindication'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contraindication') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                                <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                                   <strong>&laquo; Go back</strong>
                                </a>
                            </div>
                        </div>


                    </form>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('remove-contraindication-medicine', $data['medicine']->id) }}">
                        {{ csrf_field() }}

                        @if(isset($data['contraindications']))
                            <?php $contraindicationOrder = 1; ?>
                            @foreach($data['contraindications'] as $elem)
                            <div class="form-group">
                                <label for="x" class="col-md-4 control-label">Contraindication <?php echo $contraindicationOrder; ?></label>
                                <div class="col-md-6">
                                    <div class="form-check" id="x"  name="x">
                                        <label>
                                            <input type="checkbox" name="check_list[]" value="{{ $elem->disease }}"> {{ $elem->disease}} <span class="label-text"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php $contraindicationOrder++; ?>
                            @endforeach
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Specify medicine <strong>{{$data['medicine']->name}}</strong> for which animals can be applied to</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add-types-medicine', $data['medicine']->id) }}">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="typeType" class="col-md-4 control-label">Type *</label>
                            <div class="col-md-6">
                                <select id="typeType" class="selectpicker form-control" name="typeType">
                                    <option value="Camel">Camel</option>
                                    <option value="Cat">Cat</option>
                                    <option value="Chichken">Chichken</option>
                                    <option value="Donkey">Donkey</option>
                                    <option value="Dog">Dog</option>
                                    <option value="Horse">Horse</option>
                                    <option value="Perrot">Perrot</option>
                                    <option value="Pig">Pig</option>
                                    <option value="Raccoon">Racoon</option>
                                    <option value="Rabbit">Rabbit</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                                <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                                   <strong>&laquo; Go back</strong>
                                </a>
                            </div>
                        </div>


                    </form>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('remove-type-medicine', $data['medicine']->id) }}">
                        {{ csrf_field() }}

                        <?php $typeOrder = 1; ?>
                        @if(isset($data['types']))
                            @foreach($data['types'] as $elem)
                            <div class="form-group">
                                <label for="x" class="col-md-4 control-label">Type <?php echo $typeOrder; ?></label>
                                <div class="col-md-6">
                                    <div class="form-check" id="x"  name="x">
                                        <label>
                                            <input type="checkbox" name="check_list2[]" value="{{ $elem->type }}"> {{ $elem->type}} <span class="label-text"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php $typeOrder++; ?>
                            @endforeach
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
