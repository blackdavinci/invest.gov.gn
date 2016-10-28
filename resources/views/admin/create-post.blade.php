@extends('admin-template')

@section('title','Nouvelle publication')

@section('content-title','Nouvelle publication')

@section('small-content-title','Création d\'une publication')


@section('content-fil-dariane')
	<li><a href="{{route('posts.index')}}"><i class="fa fa-tasks"></i> Publication</a></li>
	<li class="active">Nouvelle publication</li>
@endsection

@section('main-content')

<!-- Formulaire de création d'un nouveau secteur-->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Nouvelle publication</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="col-md-12">
      <!-- form start -->
      {!! Form::open(['method' =>'POST','route' =>['posts.store'],'files' => true,'class'=>'form-horizontal']) !!}
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $key => $error)
                            @if($error=='Menu déjà existant')
                              <li>{{ $error }}. Veuillez effectuer un lien avec le menu déjà défini dans le module des Menus</li>
                            @endif
                          @endforeach
                      </ul>
                  </div>
              @endif
            </div>
          </div>

          <div class="form-group {{ $errors->has('post_type') ? ' has-error' : '' }}">
            <label for="post_type" class="control-label col-md-2">Type de publication</label>

            <div class="col-md-10">
              <select class="form-control" name="post_type" id="post_type">
                <option class="text-center" value="" >Choisissez le type de publication </option>
                <option value="1" >Page statique</option>
                <option value="2">Onglet</option>
                <option value="3">Raison</option>
              </select>
              @if ($errors->has('post_type'))
                  <span class="help-block">
                      <strong>{{ $errors->first('post_type') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <!-- Menu List Container -->
          <div id="menulist-content">
            <div class='form-group {{ $errors->has('menu_id') ? ' has-error' : '' }}' id='menulist'>
              <label for='menu_id' class='col-sm-2 control-label'>Menu Parent</label>
              <div class='col-sm-10'>
                <select class='form-control' name='menu_id' id='menu_parent'>
                  <option class="text-center" value="" >Choisissez le menu parent </option>
                  @foreach($menus as $menu)
                    <option value='{{$menu->id}}'> {{$menu->menu_nom}}</option>
                  @endforeach
                </select>
                @if ($errors->has('menu_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('menu_id') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
          <!-- Secteur List Container -->
          <div id="secteurlist-content">
          </div>

          <div class="form-group{{ $errors->has('post_order') ? ' has-error' : '' }}">
            <label for="post_order" class="col-sm-2 control-label">Position</label>

            <div class="col-sm-10">
              <input type="number" class="form-control" id="post_order" placeholder="1,2,3" name="post_order" value="{{ old('post_order') }}" required>
              @if ($errors->has('post_order'))
                  <span class="help-block">
                      <strong>{{ $errors->first('post_order') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('post_titre') ? ' has-error' : '' }}">
            <label for="post_titre" class="col-sm-2 control-label">Titre</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="nopost_typem" placeholder="Titre de la publication" name="post_titre" value="{{ old('post_titre') }}" required>
              @if ($errors->has('post_titre'))
                  <span class="help-block">
                      <strong>{{ $errors->first('post_titre') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="form-group {{ $errors->has('post_content') ? 'has-error' : '' }}">
            <label for="post_content" class="col-sm-2 control-label">Contenu</label>

            <div class="col-sm-10">
             <textarea class="form-control summernote" rows="3" placeholder="Text de la publication" name="post_content">{{ old('post_content')}}</textarea>
             @if ($errors->has('post_content'))
                 <span class="help-block">
                     <strong>{{ $errors->first('post_content') }}</strong>
                 </span>
             @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('post_resume') ? ' has-error' : '' }}">
            <label for="post_resume" class="col-sm-2 control-label">Résumé</label>

            <div class="col-sm-10">
             <textarea class="form-control summernote" rows="3" placeholder="Résumé de la publication ..." name="post_resume">{{ old('post_resume') }}</textarea>
             @if ($errors->has('post_resume'))
                 <span class="help-block">
                     <strong>{{ $errors->first('post_resume') }}</strong>
                 </span>
             @endif
            </div>
          </div>

          <!-- <div class="form-group">
            <label for="illustration"  class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
              <input type="file" id="illustration" name="secteur_img">
              <p class="help-block">Image d'illustration du secteur dans le slide show.</p>
              </div>
          </div> -->

          <div class="form-group {{ $errors->has('langue_id') ? ' has-error' : '' }}">
            <label for="presentation" class="col-sm-2 control-label" >Langue</label>

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

          <div class="form-group {{ $errors->has('post_statut') ? ' has-error' : '' }}">
            <label for="post_statut" class="control-label col-md-2">Statut</label>

            <div class="col-md-10">
              <select class="form-control" name="post_statut" >
                <option value="1" >Activé</option>
                <option value="0" selected>Désactivé</option>
              </select>
              @if ($errors->has('post_statut'))
                  <span class="help-block">
                      <strong>{{ $errors->first('post_statut') }}</strong>
                  </span>
              @endif
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{route('secteurs.index')}}" class="btn btn-default">Annuler</a>
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

@section('script')

<!-- Script d'Affichage du menu si 'Définir comme menu' est coché -->

$( "#post_type" ).change(function() {
   if($('#post_type').val()==1){
      $('#menulist-content').append(menulist);
      $('#secteurlist').remove();
    }else if($('#post_type').val()==2){
      $('#secteurlist-content').append(secteurlist);
      $('#menulist').remove();
    }else{
       $('#secteurlist').remove();
      $('#menulist').remove();
    }
})
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
