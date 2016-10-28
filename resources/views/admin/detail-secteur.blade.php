@extends('admin-template')

@section('title','Details du secteur '.$secteur->secteur_nom)

@section('content-title','Détails du secteur '.$secteur->secteur_nom)

@section('small-content-title','Détails du secteur '.$secteur->secteur_nom)


@section('content-fil-dariane')
	<li><a href="{{route('secteurs.index')}}"><i class="fa fa-tasks"></i> Secteurs</a></li>
	<li class="active">{{ucfirst($secteur->secteur_nom)}}</li>
@endsection

@section('main-content')
<!-- Bouton Actions -->
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-body pad table-responsive ">
        <table class="table table-nobordered-top text-center text-uppercase">
          <tr>
            <td>
              <a type="button" href="{{route('secteurs.edit',$secteur->id)}}" class="btn btn-block btn-success">Mettre à jour</a>
            </td>
            <td>
              <a type="button" href="{{route('structures.createstructure',$secteur->id)}}" class="btn btn-block btn-success">Ajouter une structure</a>
            </td>
            <td>
              <a type="button" href="{{route('secteurs.create')}}" class="btn btn-block btn-warning">Désactiver</a>
            </td>
            <td>
              <a type="button" href="{{route('secteurs.create')}}" class="btn btn-block btn-danger">Supprimer</a>
            </td>
            <td>
              <a type="button" href="{{route('filieres.create')}}" class="btn btn-block btn-primary">Ajouter une filière</a>
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

<!-- START CUSTOM TABS -->
<div class="row">
  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active text-uppercase"><a href="#tab_1" data-toggle="tab">Infos Secteur</a></li>
        <li class="text-uppercase"><a href="#tab_2" data-toggle="tab">Filières</a></li>
        <li class="text-uppercase"><a href="#tab_3" data-toggle="tab">Document(s)</a></li>
        <li class="text-uppercase"><a href="#tab_4" data-toggle="tab">Structure(s)</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">

          <!-- Langue - Statut - Menu -->
          <section class="invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-4">
                <h2 class="page-header custom-page-header">
                  <i class="fa fa-globe"></i> Langue
                  <small class="pull-right text-uppercase">
                    {{$secteur->langue->langue_nom_en}}
                    ({{$secteur->langue->langue_nom_fr}})
                  </small>
                </h2>
              </div>
              <!-- /.col -->
              <div class="col-xs-3">
                <h2 class="page-header custom-page-header">
                  <i class="fa fa-info-circle"></i> Statut
                  <small class="pull-right text-uppercase">
                    @if($secteur->secteur_statut==1)
                      Activé
                    @else
                      Désactivé
                    @endif
                  </small>
                </h2>
              </div>
              <!-- /.col -->
              <div class="col-xs-3">
                <h2 class="page-header custom-page-header">
                  <i class="fa fa-info-circle"></i> 
            
                    @if($secteur->menu_id!=null)
                      Défini comme Menu
                    @else
                      Non défini comme Menu
                    @endif
                
                </h2>
              </div>
              <!-- /.col -->
            </div>
          </section>
          <!-- /.content -->

          <!-- Présentation content -->
          <section class="invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-12">
                <h2 class="page-header">
                  Présentation
                </h2>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-12 invoice-col">
                <?= $secteur->secteur_presentation ?>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->

          <!-- Résumé content -->
          <section class="invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-12">
                <h2 class="page-header">
                  Résumé
                </h2>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-12 invoice-col">
                <?= $secteur->secteur_resume ?>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
          
       

          <!-- Image d'illustration du secteur  -->
          <section class="invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-12">
                <h2 class="page-header">
                  Image d'Illustration du secteur
                </h2>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-12 invoice-col text-center">
                {!! Html::image('storage/'.$secteur->secteur_img,'Image illustrative du secteur') !!}
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->

        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          The European languages are members of the same family. Their separate existence is a myth.
          For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
          in their grammar, their pronunciation and their most common words. Everyone realizes why a
          new common language would be desirable: one could refuse to pay expensive translators. To
          achieve this, it would be necessary to have uniform grammar, pronunciation and more common
          words. If several languages coalesce, the grammar of the resulting language is more simple
          and regular than that of the individual languages.
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
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
                  <th>Nom</th>
                  <th>Adresse</th>
                  <th>Cordonnées</th>
                  <th>Téléphone</th>
                  <th>E-mail</th>
                  <th>Web</th>
                  <th>Statut</th>
                  <th>Edit.</th>
                  <th>Supp.</th>
                </tr>
                </thead>
                <tbody>
                @foreach($secteur->structures as $structure)
                    <tr>
                      <td>{{$structure->structure_nom}}</td>
                      <td>
                        <p>
                        Quartier {{$structure->quartier}} Rue {{$structure->rue}}<br>
                        Commune de {{$structure->commune}}<br>{{$structure->ville}}
                        </p>
                      </td>
                      <td>
                        <p>
                          Longitude : {{$structure->longitude}}<br>
                          Altitude : {{$structure->altitude}}
                        </p>
                      </td>
                      <td>{{$structure->tel1}}</td>    
                      <td>{{$structure->email}}</td>
                      <td>{{$structure->web}}</td>              
                      <td>
                        @if($structure->structure_statut==0)
                          Désactivé
                        @else
                          Activé
                        @endif
                      </td>
                      <td>
                      <a class="btn btn-warning btn-block" href="{{route('structures.edit',$structure->id)}}">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#supModal{{$structure->id}}" aria-label="Delete">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>

                    <!-- Suppresion Modal -->
                    <div class="example-modal" >
                      <div class="modal" id="supModal{{$structure->id}}">
                        <div class="modal-dialog">
                        {!! Form::open(['method' =>'DELETE','route' =>['structures.destroy',$structure->id]]) !!}
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Suppression de la structure {{$structure->structure_nom}}</h4>
                            </div>
                            <div class="modal-body">
                              <p>Voulez-vous vraiment supprimer la structure <strong class="text-danger">{{$structure->structure_nom}} </strong> ?</p>
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
                  <th>Adresse</th>
                  <th>Cordonnées</th>
                  <th>Téléphone</th>
                  <th>E-mail</th>
                  <th>Web</th>
                  <th>Statut</th>
                  <th>Edit.</th>
                  <th>Supp.</th>                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<!-- END CUSTOM TABS -->
@endsection

@section('script')
	$("#secteurs-table").DataTable({
		language: {
		        url: 'json/French.json'
		}
	});
@endsection