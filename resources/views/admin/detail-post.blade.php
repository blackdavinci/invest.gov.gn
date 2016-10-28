@extends('admin-template')

@section('title','Details de la publication '.$post->post_titre)

@section('content-title','Détails ')

@section('small-content-title','Détails de la publication '.$post->post_titre)


@section('content-fil-dariane')
	<li><a href="{{route('posts.index')}}"><i class="fa fa-edit"></i> Publication</a></li>
	<li class="active">{{ucfirst($post->post_titre)}}</li>
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
              <a type="button" href="{{route('posts.edit',$post->id)}}" class="btn btn-block btn-success">Mettre à jour</a>
            </td>
            <td>
              <a type="button" href="{{route('posts.create')}}" class="btn btn-block btn-warning">Désactiver</a>
            </td>
            <td>
              <a type="button" href="{{route('posts.create')}}" class="btn btn-block btn-danger">Supprimer</a>
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

<!-- START CONTENT  -->

<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-body pad table-responsive ">

          <!-- Langue - Statut - Menu -->
          <section class="invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-4">
                <h2 class="page-header custom-page-header">
                  <i class="fa fa-globe"></i> Langue
                  <small class="pull-right text-uppercase">
                      {{$post->langue->langue_nom_en}}
                      ({{$post->langue->langue_nom_fr}})
                  </small>
                </h2>
              </div>
              <!-- /.col -->
              <div class="col-xs-3">
                <h2 class="page-header custom-page-header">
                  <i class="fa fa-info-circle"></i> Statut
                  <small class="pull-right text-uppercase">
                    @if($post->post_statut==1)
                      Activé
                    @else
                      Désactivé
                    @endif
                  </small>
                </h2>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <h2 class="page-header custom-page-header">
                  <i class="fa fa-info-circle"></i> 
                    {{$post->menu->menu_nom}}
                </h2>
              </div>
              <!-- /.col -->
            </div>
          </section>
          <!-- /.content -->

          
          
          <!-- Post Content /.content -->
          <div class="col-md-12">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title text-uppercase">{{$post->post_titre}}</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row invoice-info">
                  <div class="col-sm-12 invoice-col">
                    <?= $post->post_content ?>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->

          <!-- Post Resume /.content -->
          <div class="col-md-12">
            <div class="box box-warning collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title text-uppercase">Résumé</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row invoice-info">
                  <div class="col-sm-12 invoice-col">
                    <?= $post->post_resume ?>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->

      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->
@endsection

@section('script')
	$("#posts-table").DataTable({
		language: {
		        url: 'json/French.json'
		}
	});
@endsection