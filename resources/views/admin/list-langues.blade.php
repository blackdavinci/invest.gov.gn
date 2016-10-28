@extends('admin-template')

@section('title','Liste des langues')

@section('content-title','Liste des langues')

@section('small-content-title','Liste des langues')


@section('content-fil-dariane')
	<li><i class="fa fa-globe"></i> Langues</li>
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
              <a type="button" class="btn btn-block btn-primary"
              aria-label="Delete" data-toggle="modal" data-target="#addModal">Nouvelle langue</a>
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

<!-- Liste des erreurs -->
<div class="row">
  <div class="col-md-12">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $key => $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>
</div>

 <!-- Nouvelle langue  -->
<div class="example-modal" >
  <div class="modal" id="addModal">
    <div class="modal-dialog">
      {!! Form::open(['method' =>'POST','route' =>['langues.store']]) !!}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ajout d'une nouvelle langue</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">

              <div class="form-group{{ $errors->has('langue_nom_fr') ? ' has-error' : '' }}">
                <label for="langue_nom_fr" class="control-label">Nom Anglais ou Français</label>

                <div class="">
                  <input type="text" class="form-control" id="langue_nom_en" placeholder="Nom Anglais ou Français" name="langue_nom_en"  required>
                  @if ($errors->has('langue_nom_en'))
                      <span class="help-block">
                          <strong>{{ $errors->first('langue_nom_en') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('langue_nom_fr') ? ' has-error' : '' }}">
                <label for="langue_nom_fr" class="control-label">Nom Original</label>

                <div class="">
                  <input type="text" class="form-control" id="langue_nom_fr" placeholder="Nom Original" name="langue_nom_fr"  required>
                  @if ($errors->has('langue_nom_fr'))
                      <span class="help-block">
                          <strong>{{ $errors->first('langue_nom_fr') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('langue_code') ? ' has-error' : '' }}">
                <label for="langue_code" class="control-label">Code langue</label>

                <div class="">
                  <input type="text" class="form-control" id="langue_code" placeholder="Langue Code" name="langue_code" required>
                  @if ($errors->has('langue_code'))
                      <span class="help-block">
                          <strong>{{ $errors->first('langue_code') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
             
              <div class="form-group {{ $errors->has('langue_statut') ? ' has-error' : '' }}">
                <label for="langue_statut" class="control-label">Statut</label>

                <div class="">
                  <select class="form-control" name="langue_statut" required>
                    <option value="1" >Activé</option>
                    <option value="0" selected>Désactivé</option>
                  </select>
                  @if ($errors->has('langue_statut'))
                      <span class="help-block">
                          <strong>{{ $errors->first('langue_statut') }}</strong>
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

<!-- DataTables de la liste des langues -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body table-responsive ">
    <table id="langue-table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nom Anglais</th>
        <th>Nom Original</th>
        <th>Code</th>
        <th>Statut</th>
        <th>Edit.</th>
        <th>Supp.</th>
      </tr>
      </thead>
      <tbody>
      @foreach($langues as $langue)
          <tr>
            <td>{{$langue->langue_nom_en}}</td>
            <td>{{$langue->langue_nom_fr}}</td>
            <td>{{$langue->langue_code}}</td>          
            <td>
              @if($langue->langue_statut==0)
                Désactivé
              @else
                Activé
              @endif
            </td>
            <td>
            <a class="btn btn-warning btn-block" aria-label="Delete" data-toggle="modal" data-target="#editModal{{$langue->id}}">
                <i class="fa fa-edit" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#supModal{{$langue->id}}" aria-label="Delete">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
              </a>
            </td>
          </tr>

           <!-- Modification Modal  -->
          <div class="example-modal" >
            <div class="modal" id="editModal{{$langue->id}}">
              <div class="modal-dialog">
                {!! Form::open(['method' =>'PUT','route' =>['langues.update',$langue->id]]) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modification de la langue {{$langue->langue_nom_en}} ({{$langue->langue_nom_fr}})</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">

                        <div class="form-group{{ $errors->has('langue_nom_en') ? ' has-error' : '' }}">
                          <label for="nom" class="control-label">Nom Anglais</label>

                          <div class="">
                            <input type="text" class="form-control" id="langue_nom_en" placeholder="Nom Anglais de la langue" name="langue_nom_en" value="{{$langue->langue_nom_en }}" required>
                            @if ($errors->has('langue_nom_en'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('langue_nom_en') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('langue_nom_fr') ? ' has-error' : '' }}">
                          <label for="nom" class="control-label">Nom Original</label>

                          <div class="">
                            <input type="text" class="form-control" id="langue_nom_fr" placeholder="Nom Original de la langue" name="langue_nom_fr" value="{{$langue->langue_nom_fr }}" required>
                            @if ($errors->has('langue_nom_fr'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('langue_nom_fr') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="form-group{{ $errors->has('langue_code') ? ' has-error' : '' }}">
                          <label for="langue_code" class="control-label">Langue Code</label>

                          <div class="">
                            <input type="text" class="form-control" id="langue_code" placeholder="Langue Code" name="langue_code" value="{{$langue->langue_code}}" required>
                            @if ($errors->has('langue_code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('langue_code') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group {{ $errors->has('langue_statut') ? ' has-error' : '' }}">
                          <label for="langue_statut" class="control-label">Statut</label>

                          <div class="">
                            <select class="form-control" name="langue_statut" required>
                              <option value="1" @if($langue->langue_statut==1) selected @endif>Activé</option>
                              <option value="0" @if($langue->langue_statut==0) selected @endif>Désactivé</option>
                            </select>
                            @if ($errors->has('langue_statut'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('langue_statut') }}</strong>
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
            <div class="modal" id="supModal{{$langue->id}}">
              <div class="modal-dialog">
              {!! Form::open(['method' =>'DELETE','route' =>['langues.destroy',$langue->id]]) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Suppression du menu {{$langue->langue_nom_en}} ({{$langue->langue_nom_fr}})</h4>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le menu <strong class="text-danger">{{$langue->langue_nom_en}} ({{$langue->langue_nom_fr}})</strong> ?</p>
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
        <th>Nom Anglais</th>
        <th>Nom Original</th>
        <th>Code</th>
        <th>Statut</th>
        <th>Edit.</th>
        <th>Supp.</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


@endsection

@section('script')
	$("#langue-table").DataTable({
		language: {
		        url: 'json/French.json'
		}
	});
@endsection