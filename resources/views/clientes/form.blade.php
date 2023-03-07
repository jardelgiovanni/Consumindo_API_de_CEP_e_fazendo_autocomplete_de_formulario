<div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome"
        value="{{ isset($cliente->nome) ? $cliente->nome : '' }}">
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email"
        value="{{ isset($cliente->email) ? $cliente->email : '' }}">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cep') ? 'has-error' : '' }}">
    <label for="cep" class="control-label">{{ 'Cep' }}</label>
    <input class="form-control" name="cep" type="text" id="cep"
        value="{{ isset($cliente->cep) ? $cliente->cep : '' }}" placeholder="00000-000">
    {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('logradouro') ? 'has-error' : '' }}">
    <label for="logradouro" class="control-label">{{ 'Logradouro' }}</label>
    <input class="form-control" name="logradouro" type="text" id="logradouro"
        value="{{ isset($cliente->logradouro) ? $cliente->logradouro : '' }}">
    {!! $errors->first('logradouro', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bairro') ? 'has-error' : '' }}">
    <label for="bairro" class="control-label">{{ 'Bairro' }}</label>
    <input class="form-control" name="bairro" type="text" id="bairro"
        value="{{ isset($cliente->bairro) ? $cliente->bairro : '' }}">
    {!! $errors->first('bairro', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="text" id="estado"
        value="{{ isset($cliente->estado) ? $cliente->estado : '' }}">
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
