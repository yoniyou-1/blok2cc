<div class="form-group row">
	<label for="name" class="col-lg-3 col-form-label requerido">Nombre</label>
	<div class="col-lg-8">
		<input type="text"  name="name" id="name" class="form-control" value="{{ old('name') }}" required/>
	</div>
</div>

<div class="form-group row">
	<label for="url" class="col-lg-3 col-form-label requerido">Url</label>
	<div class="col-lg-8">
		<input type="text"  name="url" id="url" class="form-control" value="{{ old('url') }}" required/>
	</div>
</div>

<div class="form-group row">
	<label for="icon" class="col-lg-3 col-form-label ">Icono</label>
	<div class="col-lg-8">
		<input type="text"  name="icon" id="icon" class="form-control" value="{{ old('icon') }}" >
	</div>
	<div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{old("icon")}}"></span>
    </div>
</div>