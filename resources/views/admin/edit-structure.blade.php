@extends('admin-template')

@section('title','Mise à jour de la structure')

@section('content-title','Mise à jour de la structure structure')

@section('small-content-title',$structure->structure_nom)


@section('content-fil-dariane')
	<li><a href="{{route('structures.index')}}"><i class="fa fa-tasks"></i> Secteurs</a></li>
	<li class="active">Structure</li>
@endsection

@section('main-content')

<!-- Formulaire de création d'un nouveau structure-->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Mise à jour de la structure</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="col-md-12">
      <!-- form start -->
      {!! Form::open(['method' =>'PUT','route' =>['structures.update',$structure->id],'files' => true,'class'=>'form-horizontal']) !!}
        <div class="box-body">
          <div class="form-group{{ $errors->has('structure_nom') ? ' has-error' : '' }}">
            <label for="nom" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nom" placeholder="Nom de la structure" name="structure_nom" value="{{ $structure->structure_nom}}" required>
              @if ($errors->has('structure_nom'))
                  <span class="help-block">
                      <strong>{{ $errors->first('structure_nom') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('rue') ? ' has-error' : '' }}">
            <label for="rue" class="col-sm-2 control-label">Rue</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rue" placeholder="Rue de la structure " name="rue" value="{{ $structure->rue }}" required>
              @if ($errors->has('rue'))
                  <span class="help-block">
                      <strong>{{ $errors->first('rue') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('quartier') ? ' has-error' : '' }}">
            <label for="quartier" class="col-sm-2 control-label">Quartier</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="quartier" placeholder="Quartier de la structure " name="quartier" value="{{ $structure->quartier }}" required>
              @if ($errors->has('quartier'))
                  <span class="help-block">
                      <strong>{{ $errors->first('quartier') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('commune') ? ' has-error' : '' }}">
            <label for="commune" class="col-sm-2 control-label">Commune</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="commune" placeholder="Commune de la structure " name="commune" value="{{ $structure->commune }}" required>
              @if ($errors->has('commune'))
                  <span class="help-block">
                      <strong>{{ $errors->first('commune') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
            <label for="ville" class="col-sm-2 control-label">Ville</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ville" placeholder="Ville de la structure " name="ville" value="{{ $structure->ville }}" required>
              @if ($errors->has('ville'))
                  <span class="help-block">
                      <strong>{{ $errors->first('ville') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
            <label for="longitude" class="col-sm-2 control-label">Longitude</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="longitude" placeholder="Longitude de la structure " name="longitude" value="{{ $structure->longitude }}" required>
              @if ($errors->has('longitude'))
                  <span class="help-block">
                      <strong>{{ $errors->first('longitude') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('altitude') ? ' has-error' : '' }}">
            <label for="altitude" class="col-sm-2 control-label">Altitude</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="altitude" placeholder="Altitude de la structure " name="altitude" value="{{ $structure->altitude }}" required>
              @if ($errors->has('altitude'))
                  <span class="help-block">
                      <strong>{{ $errors->first('altitude') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('tel1') ? ' has-error' : '' }}">
            <label for="tel1" class="col-sm-2 control-label">Téléphone</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="tel1" placeholder="Téléphone de la structure " name="tel1" value="{{ $structure->tel1 }}" required>
              @if ($errors->has('tel1'))
                  <span class="help-block">
                      <strong>{{ $errors->first('tel1') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="E-mail de la structure " name="email" value="{{ $structure->email }}" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('web') ? ' has-error' : '' }}">
            <label for="web" class="col-sm-2 control-label">Adresse Web</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="web" placeholder="Adresse Web de la structure " name="web" value="{{ $structure->web }}" required>
              @if ($errors->has('web'))
                  <span class="help-block">
                      <strong>{{ $errors->first('web') }}</strong>
                  </span>
              @endif
            </div>
          </div>
        
          <div class="form-group {{ $errors->has('structure_statut') ? ' has-error' : '' }}">
            <label for="presentation" class="control-label col-md-2">Statut</label>

            <div class="col-md-10">
              <select class="form-control" name="structure_statut" >
                <option value="1" @if($structure->structure_statut==1) selected @endif>Activé</option>
                <option value="0" @if($structure->structure_statut==0) selected @endif >Désactivé</option>
              </select>
              @if ($errors->has('structure_statut'))
                  <span class="help-block">
                      <strong>{{ $errors->first('structure_statut') }}</strong>
                  </span>
              @endif
            </div>
          </div>

      
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('structures.index')}}" class="btn btn-default">Annuler</a>
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

