<div class="col-md-12 form-group">
    {!! Form::label('images', 'Agregar Imágenes') !!}
    <span style="font-size: 12px"> | Formatos soportados: jpeg, jpg, png, gif | Peso máximo por imágen: 2mb | Peso máximo total: 5mb</span>
    {{--  Images Input  --}}
    {!! Form::file('images[]', array('multiple'=>true, 'id' => 'Multi_Images')) !!}
    <div class="ErrorImage"></div>
</div>