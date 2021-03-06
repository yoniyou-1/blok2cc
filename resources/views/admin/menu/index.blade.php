@extends("theme.$theme.layout")
@section('titulo')
Menus
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" type="text/css" />
@endsection



@section('scriptsPlugins')
<script src='{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}' type='text/javascript'></script>
@endsection


@section('scripts')
<script src='{{asset("assets/pages/scripts/admin/menu/index.js")}}' type='text/javascript'></script>
@endsection

@section('contenido')

<div class="row">
	<div class="col-md-12">
		@include('includes.mensaje')
		<div class="card card-primary card-info">
			<div class="card-header">
				<h3 class="card-title"> Crear Menu</h3>
			</div>
						 <div class="card-tools pull-right">
                    <a href="{{route('crear_menu')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
              </div>
			<!-- /.card-header -->
			<div class="card-body table-responsive no-padding">
				@csrf
				<!-- /.card-body -->
				<div class="dd" id="nestable">
					<ol Class="dd-list">
						@foreach($menus as $key => $item)
							@if($item["menu_id"] != 0)
								@break;
							@endif
							@include('admin.menu.menu-item',['title'=> $item])
						@endforeach
					<ol/>
					</div>
				</div>
				<!-- /.card-footer -->

			</div>
		</div>
	</div>

	@endsection


