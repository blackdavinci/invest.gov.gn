@extends('admin-template')

@section('title','Liste des publications')

@section('content-title','Liste des publications')

@section('small-content-title','Liste des publications')


@section('content-fil-dariane')
	<li><i class="fa fa-edit"></i> Publication</li>
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
              <a type="button" href="{{route('posts.create')}}" class="btn btn-block btn-primary">Nouvelle publication</a>
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

<!-- DataTables de la liste des posts -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body table-responsive ">
    <table id="posts-table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Titre</th>
        <th>Type</th>
        <th>Parent</th>
        <th>Langue</th>
        <th>Statut</th>
        <th>Edit.</th>
        <th>Supp.</th>
      </tr>
      </thead>
      <tbody>
      @foreach($posts as $post)
          <tr>
            <td><a href="{{route('posts.show',$post->id)}}">{{$post->post_titre}}</a></td>
            <td>
              @if($post->post_type==1)
                  Page statique
              @elseif($post->post_type==2)
                  Onglet
              @else
                Raison
              @endif
            </td>
            <td>
              @if($post->secteur_id!=null)
                {{$post->secteur->secteur_nom}}
              @elseif($post->menu_id!=null)
                {{$post->menu->menu_nom}}
              @else
                Aucun
              @endif
            </td>
            <td>{{$post->langue->langue_nom_fr}}</td>
            <td>
              @if($post->post_statut==0)
                Désactivé
              @else
                Activé
              @endif
            </td>
            <td>
            <a class="btn btn-warning" aria-label="Delete" data-toggle="modal" data-target="#editModal{{$post->id}}">
                <i class="fa fa-edit" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger" data-toggle="modal" data-target="#supModal{{$post->id}}" aria-label="Delete">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
              </a>
            </td>
          </tr>


          <!-- Suppresion Modal -->
          <div class="example-modal" >
            <div class="modal" id="supModal{{$post->id}}">
              <div class="modal-dialog">
              {!! Form::open(['method' =>'DELETE','route' =>['posts.destroy',$post->id]]) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Suppression du post {{$post->post_nom}}</h4>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le post <strong class="text-danger">{{$post->post_nom}}</strong> ?</p>
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
        <th>Titre</th>
        <th>Type</th>
        <th>Parent</th>
        <th>Résumé</th>
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
	$("#posts-table").DataTable({
		language: {
		        url: 'json/French.json'
		}
	});
@endsection