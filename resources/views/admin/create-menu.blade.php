@extends('admin-template')

@section('title','Liste des menus')

@section('content-title','Nouveau menu')

@section('small-content-title','Création d\'un nouveau menu')


@section('content-fil-dariane')
	<li><a href="{{route('menus.index')}}"><i class="fa fa-bars"></i> Menus</a></li>
	<li class="active">Nouveau menu</li>
@endsection

@section('main-content')

<!-- Formulaire de création d'un nouveau menu-->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Nouveau menu</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="col-md-12">
      <!-- form start -->
       <form class="form-horizontal" role="form" method="POST" action="{{route('menus.store')}}">
       {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group{{ $errors->has('menu_nom') ? ' has-error' : '' }}">
            <label for="nom" class="col-sm-2 control-label">Nom</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="nom" placeholder="Nom du menu (Accueil, Opportunités, etc)" name="menu_nom" value="{{ old('menu_nom') }}" required>
              @if ($errors->has('menu_nom'))
                  <span class="help-block">
                      <strong>{{ $errors->first('menu_nom') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('menu_order') ? ' has-error' : '' }}">
            <label for="position" class="col-sm-2 control-label">Position</label>

            <div class="col-sm-10">
              <input type="number" class="form-control" id="position" placeholder="1,2,3" name="menu_order" value="{{ old('menu_order') }}" required>
              @if ($errors->has('menu_order'))
                  <span class="help-block">
                      <strong>{{ $errors->first('menu_order') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="form-group {{ $errors->has('menu_parent') ? ' has-error' : '' }}">
            <label for="menu_parent" class="col-sm-2 control-label" ">Menu Parent</label>

            <div class="col-sm-10">
              <select class="form-control" name="menu_parent" id="menu_parent">
                <option value="">Aucun</option>
                @foreach($menus as $menu)
                  <option value="{{$menu->id}}"> {{$menu->menu_nom}}</option>
                @endforeach
              </select>
              @if ($errors->has('menu_parent'))
                  <span class="help-block">
                      <strong>{{ $errors->first('menu_parent') }}</strong>
                  </span>
              @endif
            </div>
          </div>
        
          <div class="form-group {{ $errors->has('langue_id') ? ' has-error' : '' }}">
            <label for="presentation" class="col-sm-2 control-label">Langue</label>

            <div class="col-sm-10">
              <select class="form-control" name="langue_id" required>
                @foreach($langues as $langue)
                  <option value="{{$langue->id}}" @if($langue->langue_code=='fr') selected @endif> {{$langue->langue_nom_en}} ({{$langue->langue_nom_fr}})</option>
                @endforeach
              </select>
              @if ($errors->has('langue_id'))
                  <span class="help-block">
                      <strong>{{ $errors->first('langue_id') }}</strong>
                  </span>
              @endif
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('menus.index')}}" class="btn btn-default">Annuler</a>
          <button type="submit" class="btn btn-success pull-right">Créer</button>
        </div>
        <!-- /.box-footer -->
      {!! Form::close() !!}
    </div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
