@extends('admin-template')

@section('title','Liste des secteurs')

@section('content-title','Liste des secteurs')

@section('small-content-title','Liste des secteurs')


@section('content-fil-dariane')
	<li><i class="fa fa-tasks"></i> Secteurs</li>
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
              <a type="button" href="{{route('secteurs.create')}}" class="btn btn-block btn-primary">Nouveau secteur </a>
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

<!-- DataTables de la liste des secteurs -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="secteurs-table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nom</th>
        <th>Résumé</th>
        <th>Langue</th>
        <th>Menu</th>
        <th>Statut</th>
        <th>Edit.</th>
        <th>Supp.</th>
      </tr>
      </thead>
      <tbody>
     
        @foreach($secteurs as $secteur)
          <tr>
            <td><a href="{{route('secteurs.show',$secteur->id)}}">{{$secteur->secteur_nom}}</a></td>
            <td><?= $secteur->secteur_resume ?></td>
            <td>{{$secteur->langue->langue_nom_fr}}</td>
            <td>
              @if($secteur->menu_id!=null)
                Défini
              @else
                Non défini
              @endif
            </td>
            <td>
              @if($secteur->secteur_statut==1)
                Activé
              @else 
                Désactivé
              @endif
            </td>
            <td>
            <a class="btn btn-warning" href="{{route('secteurs.edit',$secteur->id)}}">
                <i class="fa fa-edit" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger" data-toggle="modal" data-target="#supModal{{$secteur->id}}" aria-label="Delete">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
              </a>
            </td>
          </tr>


          <!-- Suppresion Modal -->
          <div class="example-modal" >
            <div class="modal" id="supModal{{$secteur->id}}">
              <div class="modal-dialog">
              {!! Form::open(['method' =>'DELETE','route' =>['secteurs.destroy',$secteur->id]]) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Suppression du menu {{$secteur->secteur_nom}}</h4>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le secteur <strong class="text-danger">{{$secteur->secteur_nom}}</strong> ?</p>
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
        <th>Nom</th>
        <th>Résumé</th>
        <th>Langue</th>
        <th>Menu</th>
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
	$("#secteurs-table").DataTable({
		language: {
		        url: 'json/French.json'
		}
	});
@endsection