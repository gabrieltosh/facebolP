    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            {!!Form::text('name', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Categoria</label>
        <div class="col-sm-10">
            {!!Form::select('categoria_id', $categorias,null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Descripcion</label>
        <div class="col-sm-10">
            {!!Form::text('descripcion', null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Mini Descripcion</label>
        <div class="col-sm-10">
            {!!Form::text('extraer',null, ['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Precio</label>
        <div class="col-sm-10">
            {!!Form::text('precio',null, ['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Imagen</label>
        <div class="col-sm-10">
            {!!Form::file('imagen',null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>
    <!--<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Visible</label>
        <div class="col-sm-10">
            {!!Form::checkbox('visible',null,['class'=> 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
        </div>
    </div>-->