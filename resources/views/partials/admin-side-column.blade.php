  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU PRINCIPAL</li>
        <li class="@if($active=='dashboard') active @endif treeview">
          <a href="{{route('dashboard.index')}}">
            <i class="fa fa-dashboard "></i> <span>Tableau de bord</span>
          </a>
        </li>
        <li class=" @if($active=='langues') active @endif treeview">
          <a href="{{route('langues.index')}}">
            <i class="fa  fa-globe  "></i> <span>Langues</span>
          </a>
        </li>
        <li class=" @if($active=='posts') active @endif treeview">
          <a href="{{route('posts.index')}}">
            <i class="fa  fa-edit  "></i> <span>Publications</span>
          </a>
        </li>
        <li class=" @if($active=='secteurs') active @endif treeview">
          <a href="{{route('secteurs.index')}}">
            <i class="fa fa-tasks "></i> <span>Secteurs</span>
          </a>
        </li>

        <li class=" @if($active=='filieres') active @endif treeview">
          <a href="{{route('filieres.index')}}">
            <i class="fa fa-server "></i> <span>Filières</span>
          </a>
        </li>

        <li class="@if($active=='documents') active @endif treeview">
          <a href="{{route('documents.index')}}">
            <i class="fa fa-file-pdf-o "></i> <span>Documents</span>
          </a>
        </li>

        <li class=" @if($active=='dashboard') medias @endif treeview">
          <a href="{{route('medias.index')}}">
            <i class="fa fa-film "></i> <span>Medias</span>
          </a>
        </li>

        <li class=" @if($active=='users') active @endif treeview">
          <a href="{{route('users.index')}}">
            <i class="fa fa-users "></i> <span>Utilisateurs</span>
          </a>
        </li>
      


        <li class=" @if($active=='menus') active @endif treeview">
          <a href="{{route('menus.index')}}">
            <i class="fa fa-bars"></i> <span>Menus</span>
          </a>
        </li>

        <li class=" treeview">
          <a href="{{route('logs.index')}}">
            <i class="fa fa-archive @if($active=='historiques') active @endif"></i> <span>Historique</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>