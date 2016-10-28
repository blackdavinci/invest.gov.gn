@extends('admin-template')

@section('title','Mise à jour')

@section('content-title','Mise à jour secteur')

@section('small-content-title','Mise à jour du secteur '.$secteur->secteur_nom)


@section('content-fil-dariane')
	<li><a href="{{route('secteurs.index')}}"><i class="fa fa-tasks"></i> Secteurs</a></li>
	<li class="active">Nouveau secteur</li>
@endsection

@section('main-content')

<!-- Formulaire de création d'un nouveau secteur-->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Données</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="col-md-12">
      <!-- form start -->
      {!! Form::open(['method' =>'PUT','route' =>['secteurs.update',$secteur->id],'files' => true,'class'=>'form-horizontal']) !!}
        <div class="box-body">
          <div class="form-group{{ $errors->has('secteur_nom') ? ' has-error' : '' }}">
            <label for="nom" class="col-sm-2 control-label">Nom</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="nom" placeholder="Nom du secteur (Agriculture, Mines, etc)" name="secteur_nom" value="{{$secteur->secteur_nom }}" required>
              @if ($errors->has('secteur_nom'))
                  <span class="help-block">
                      <strong>{{ $errors->first('secteur_nom') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="form-group {{ $errors->has('secteur_presentation') ? 'has-error' : '' }}">
            <label for="presentation" class="col-sm-2 control-label">Présentation</label>

            <div class="col-sm-10">
             <textarea class="form-control summernote" rows="3" placeholder="Description du secteur ..." name="secteur_presentation"><?= $secteur->secteur_presentation ?></textarea>
             @if ($errors->has('secteur_presentation'))
                 <span class="help-block">
                     <strong>{{ $errors->first('secteur_presentation') }}</strong>
                 </span>
             @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('secteur_resume') ? ' has-error' : '' }}">
            <label for="presentation" class="col-sm-2 control-label">Résumé</label>

            <div class="col-sm-10">
             <textarea class="form-control summernote" rows="3" placeholder="Résumé sur le secteur ..." name="secteur_resume"><?= $secteur->secteur_resume ?></textarea>
             @if ($errors->has('secteur_resume'))
                 <span class="help-block">
                     <strong>{{ $errors->first('secteur_resume') }}</strong>
                 </span>
             @endif
            </div>
          </div>

          <div class="form-group">
            <label for="illustration"  class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
              <input type="file" id="illustration" name="secteur_img">
              <p class="help-block">Image d'illustration du secteur dans le slide show.</p>
              </div>
          </div>

          <div class="form-group {{ $errors->has('langue_id') ? ' has-error' : '' }}">
            <label for="presentation" class="col-sm-2 control-label" >Langue</label>

            <div class="col-sm-10">
              <select class="form-control" name="langue_id" required>
                @foreach($langues as $langue)
                  <option value="{{$langue->id}}" @if($langue->id==$secteur->langue_id) selected @endif> {{$langue->langue_nom_en}} ({{$langue->langue_nom_fr}})</option>
                @endforeach
              </select>
              @if ($errors->has('langue_id'))
                  <span class="help-block">
                      <strong>{{ $errors->first('langue_id') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group {{ $errors->has('secteur_statut') ? ' has-error' : '' }}">
            <label for="presentation" class="control-label col-md-2">Statut</label>

            <div class="col-md-10">
              <select class="form-control" name="secteur_statut" >
                <option value="1" @if($secteur->secteur_statut==1) selected @endif>Activé</option>
                <option value="0" @if($secteur->secteur_statut==0) selected @endif>Désactivé</option>
              </select>
              @if ($errors->has('secteur_statut'))
                  <span class="help-block">
                      <strong>{{ $errors->first('secteur_statut') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          @if($secteur->menu_id==null)
            <div class="form-group">
              <label for="presentation" class="col-sm-2 control-label"></label>

              <div class="col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="menu_parent" id="menu_parent">
                    Définir le secteur comme menu
                  </label>
                </div>
              </div>
            </div>
          @endif
      
        <div id="menulist-content">
         
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('secteurs.show',$secteur->id)}}" class="btn btn-default">Annuler</a>
          <button type="submit" class="btn btn-success pull-right">Enregistrer</button>
        </div>
        <!-- /.box-footer -->
      {!! Form::close() !!}
    </div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@section('script')

<!-- Script d'Affichage du menu si 'Définir comme menu' est coché -->
var menulist = "<div class='form-group {{ $errors->has('menu_id') ? ' has-error' : '' }}' id='menulist'>"+
                "<label for='menu_id' class='col-sm-2 control-label'>Menu Parent</label>"+
                "<div class='col-sm-10'>"+
                "<select class='form-control' name='menu_id' id='menu_parent'>"+
                "@foreach($menus as $menu)"+
                "<option value='{{$menu->id}}' @if($secteur->menu_id==$menu->id) selected @endif> {{$menu->menu_nom}}</option>"+
                "@endforeach"+
                "</select>"+
                "@if ($errors->has('menu_id'))"+
                "<span class="help-block">"+
                "<strong>{{ $errors->first('menu_id') }}</strong>"+
                "</span>"+
                "@endif"+
                "</div>"+
                "</div>";

$("#menu_parent").change(function() {
    if(this.checked) {
      $('#menulist-content').append(menulist);
    }else{
      $('#menulist').remove();
    }
});

<!-- Fin Script Affichage Menu -->

<!-- Script Summernote -->
$('.summernote').summernote({
           // unfortunately you can only rewrite
           // all the toolbar contents, on the bright side
           // you can place uploadcare button wherever you want
           lang: 'fr-FR', // default: 'en-US'
           height: 300,                 // set editor height
           minHeight: null,             // set minimum height of editor
           maxHeight: null,             // set maximum height of editor
           focus: true, 
           toolbar: [
             ['uploadcare', ['uploadcare']], // here, for example
             ['style', ['style']],
             ['font', ['bold', 'italic', 'underline', 'clear']],
             ['fontname', ['fontname']],
             ['color', ['color']],
             ['para', ['ul', 'ol', 'paragraph']],
             ['height', ['height']],
             ['table', ['table']],
             ['insert', ['media', 'link', 'hr', 'picture', 'video']],
             ['view', ['fullscreen', 'codeview']],
             ['help', ['help']]
           ],
           uploadcare: {
             // button name (default is Uploadcare)
             buttonLabel: 'Image / Fichier',
             // font-awesome icon name (you need to include font awesome on the page)
             buttonIcon: 'picture-o',
             // text which will be shown in button tooltip
             tooltipText: 'Télécharger fichiers, vidéos ou images',

             // uploadcare widget options,
             // see https://uploadcare.com/documentation/widget/#configuration
             publicKey: '5935bd1b32a2ace0a22e', // set your API key
             locale : 'fr',
             crop: 'free',
             tabs: 'all',
             multiple: true
           }
         });
<!-- Fin Script Summernote -->
@endsection
