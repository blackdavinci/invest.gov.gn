@extends('admin-template')

@section('title','Liste des menus')

@section('content-title','Liste des menus')

@section('small-content-title','Liste des menus')


@section('content-fil-dariane')
	<li><i class="fa fa-bars"></i> Menu</li>
	<li class="active">Liste</li>
@endsection

@section('main-content')
<!-- Bouton Actions -->
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-body pad table-responsive ">
        <table class="tabl table-nobordered-top text-center text-uppercase">
          <tr>
            <td>
              <a type="button" href="{{route('menus.create')}}" class="btn btn-block btn-primary">Nouveau menu</a>
            </td>
          </tr>
          
        </table>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="col-md-12">

  </div>
  <!-- /.col -->
</div>
<!-- ./row -->

<!-- DataTables de la liste des menus -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body table-responsive ">
    <table id="menus-table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nom</th>
        <th>Niveau</th>
        <th>Ordre</th>
        <th>Langue</th>
        <th>Menu parent</th>
        <th>Statut</th>
        <th>Edit.</th>
        <th>Supp.</th>
      </tr>
      </thead>
      <tbody>
      @foreach($menus as $menu)
          <tr>
            <td>{{$menu->menu_nom}}</td>
            <td>
              @if($menu->menu_niveau==1)
                Menu Principal
              @elseif($menu->menu_niveau==2)
                Sous-Menu
              @elseif($menu->menu_niveau==3)
                Sous-Sous-Menu
              @elseif($menu->menu_niveau==4)
                Sous-Sous-Sous-Menu
              @endif
            </td>
            <td>{{$menu->menu_order}}</td>
            <td>{{$menu->langue->langue_nom_fr}}</td>
            <td>
              @foreach($menus as $menuparent)
                @if($menu->menu_parent==$menuparent->id) {{$menuparent->menu_nom}} @endif
              @endforeach
            </td>
            <td>
              @if($menu->menu_statut==0)
                Désactivé
              @else
                Activé
              @endif
            </td>
            <td>
            <a class="btn btn-warning" aria-label="Delete" data-toggle="modal" data-target="#editModal{{$menu->id}}">
                <i class="fa fa-edit" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger" data-toggle="modal" data-target="#supModal{{$menu->id}}" aria-label="Delete">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
              </a>
            </td>
          </tr>

           <!-- Modification Modal  -->
          <div class="example-modal" >
            <div class="modal" id="editModal{{$menu->id}}">
              <div class="modal-dialog">
                {!! Form::open(['method' =>'PUT','route' =>['menus.update',$menu->id]]) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modification du menu {{$menu->menu_nom}}</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">

                        <div class="form-group{{ $errors->has('menu_nom') ? ' has-error' : '' }}">
                          <label for="nom" class="control-label">Nom</label>

                          <div class="">
                            <input type="text" class="form-control" id="nom" placeholder="Nom du menu (Accueil, Opportunités, etc)" name="menu_nom" value="{{$menu->menu_nom }}" required>
                            @if ($errors->has('menu_nom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('menu_nom') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="form-group{{ $errors->has('menu_order') ? ' has-error' : '' }}">
                          <label for="position" class=" control-label">Position</label>

                          <div class="">
                            <input type="number" class="form-control" id="position" placeholder="1,2,3" name="menu_order" value="{{$menu->menu_order}}" required>
                            @if ($errors->has('menu_order'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('menu_order') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="form-group {{ $errors->has('menu_parent') ? ' has-error' : '' }}">
                          <label for="menu_parent" class="control-label" >Menu Parent</label>

                          <div class="">
                            <select class="form-control" name="menu_parent" id="menu_parent">
                              <option value="" @if($menu->menu_parent==null) selected @endif>Aucun</option>
                              @foreach($menus as $menulist)
                                @if($menulist->id!=$menu->id)
                                  <option value="{{$menulist->id}}" @if($menulist->id==$menu->menu_parent) selected @endif> {{$menulist->menu_nom}}</option>
                                @endif
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
                          <label for="presentation" class="control-label">Langue</label>

                          <div class="">
                            <select class="form-control" name="langue_id" required>
                              @foreach($langues as $langue)
                                <option value="{{$langue->id}}" @if($langue->id==$menu->langue->id) selected @endif> {{$langue->langue_nom_en}} ({{$langue->langue_nom_fr}})</option>
                              @endforeach
                            </select>
                            @if ($errors->has('langue_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('langue_id') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group {{ $errors->has('menu_statut') ? ' has-error' : '' }}">
                          <label for="presentation" class="control-label">Statut</label>

                          <div class="">
                            <select class="form-control" name="menu_statut" required>
                              <option value="1" @if($menu->menu_statut==1) selected @endif>Activé</option>
                              <option value="0" @if($menu->menu_statut==0) selected @endif>Désactivé</option>
                            </select>
                            @if ($errors->has('menu_statut'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('menu_statut') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>  
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
                </div>
                </form>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
          <!-- /.Modification-modal -->

          <!-- Suppresion Modal -->
          <div class="example-modal" >
            <div class="modal" id="supModal{{$menu->id}}">
              <div class="modal-dialog">
              {!! Form::open(['method' =>'DELETE','route' =>['menus.destroy',$menu->id]]) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Suppression du menu {{$menu->menu_nom}}</h4>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le menu <strong class="text-danger">{{$menu->menu_nom}}</strong> ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Supprimer</button>
                  </div>
                </div>
                </form>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
          <!-- /.Suppresion-modal -->
      @endforeach
      </tbody>
      <tfoot>
      <tr>
       <th>Nom </th>
       <th>Niveau</th>
       <th>Ordre</th>
       <th>Langue</th>
       <th>Menu parent</th>
       <th>Statut</th>
       <th>Edit.</th>
       <th>Sup.</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


@endsection

@section('script')
	$("#menus-table").DataTable({
		language: {
		        url: 'json/French.json'
		}
	});
@endsection