<div class="form-group">
  {!! Form::label('Nome', null) !!}
  {!! Form::text('name', null, ['class' => 'form-control txtIpunt']) !!}
  @error('name')
      <div class="text-danger">{{ $message }}</div>
  @enderror
</div>
<div class="form-group">
  {!! Form::label('Descrição', null) !!}
  {!! Form::textarea('description', null, ['class' => 'form-control txtInput']) !!}
  @error('description')
      <div class="text-danger">{{ $message }}</div>
  @enderror
</div>
<div class="row justify-content-between">
  <div class="form-group">
    {!! Form::label('Imagen', null) !!}
    {!! Form::file('picture', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <p class="font-weight-bold">ATIVO?</p>

    <label>
      {!! Form::radio('active', 1, true) !!}
      SIM
    </label>
    <label>
      {!! Form::radio('active', 2) !!}
      SIM
    </label>

  </div>
  
</div>


