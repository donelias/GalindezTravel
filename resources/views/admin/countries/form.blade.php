<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="control-label">{{ 'Code' }}</label>
    <input class="form-control" name="code" type="text" id="code" value="{{ isset($country->code) ? $country->code : ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="control-label">{{ 'Country' }}</label>
    <input class="form-control" name="country" type="text" id="country" value="{{ isset($country->country) ? $country->country : ''}}" >
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('continent_country') ? 'has-error' : ''}}">
    <label for="continent_country" class="control-label">{{ 'Continent Country' }}</label>
    <input class="form-control" name="continent_country" type="text" id="continent_country" value="{{ isset($country->continent_country) ? $country->continent_country : ''}}" >
    {!! $errors->first('continent_country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_region') ? 'has-error' : ''}}">
    <label for="country_region" class="control-label">{{ 'Country Region' }}</label>
    <input class="form-control" name="country_region" type="text" id="country_region" value="{{ isset($country->country_region) ? $country->country_region : ''}}" >
    {!! $errors->first('country_region', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_area') ? 'has-error' : ''}}">
    <label for="country_area" class="control-label">{{ 'Country Area' }}</label>
    <input class="form-control" name="country_area" type="text" id="country_area" value="{{ isset($country->country_area) ? $country->country_area : ''}}" >
    {!! $errors->first('country_area', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_independence') ? 'has-error' : ''}}">
    <label for="country_independence" class="control-label">{{ 'Country Independence' }}</label>
    <input class="form-control" name="country_independence" type="text" id="country_independence" value="{{ isset($country->country_independence) ? $country->country_independence : ''}}" >
    {!! $errors->first('country_independence', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_population') ? 'has-error' : ''}}">
    <label for="country_population" class="control-label">{{ 'Country Population' }}</label>
    <input class="form-control" name="country_population" type="text" id="country_population" value="{{ isset($country->country_population) ? $country->country_population : ''}}" >
    {!! $errors->first('country_population', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_life_expectancy') ? 'has-error' : ''}}">
    <label for="country_life_expectancy" class="control-label">{{ 'Country Life Expectancy' }}</label>
    <input class="form-control" name="country_life_expectancy" type="text" id="country_life_expectancy" value="{{ isset($country->country_life_expectancy) ? $country->country_life_expectancy : ''}}" >
    {!! $errors->first('country_life_expectancy', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisProductoInternoBruto') ? 'has-error' : ''}}">
    <label for="PaisProductoInternoBruto" class="control-label">{{ 'Paisproductointernobruto' }}</label>
    <input class="form-control" name="PaisProductoInternoBruto" type="text" id="PaisProductoInternoBruto" value="{{ isset($country->PaisProductoInternoBruto) ? $country->PaisProductoInternoBruto : ''}}" >
    {!! $errors->first('PaisProductoInternoBruto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisProductoInternoBrutoAntiguo') ? 'has-error' : ''}}">
    <label for="PaisProductoInternoBrutoAntiguo" class="control-label">{{ 'Paisproductointernobrutoantiguo' }}</label>
    <input class="form-control" name="PaisProductoInternoBrutoAntiguo" type="text" id="PaisProductoInternoBrutoAntiguo" value="{{ isset($country->PaisProductoInternoBrutoAntiguo) ? $country->PaisProductoInternoBrutoAntiguo : ''}}" >
    {!! $errors->first('PaisProductoInternoBrutoAntiguo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisNombreLocal') ? 'has-error' : ''}}">
    <label for="PaisNombreLocal" class="control-label">{{ 'Paisnombrelocal' }}</label>
    <input class="form-control" name="PaisNombreLocal" type="text" id="PaisNombreLocal" value="{{ isset($country->PaisNombreLocal) ? $country->PaisNombreLocal : ''}}" >
    {!! $errors->first('PaisNombreLocal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisGobierno') ? 'has-error' : ''}}">
    <label for="PaisGobierno" class="control-label">{{ 'Paisgobierno' }}</label>
    <input class="form-control" name="PaisGobierno" type="text" id="PaisGobierno" value="{{ isset($country->PaisGobierno) ? $country->PaisGobierno : ''}}" >
    {!! $errors->first('PaisGobierno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisJefeDeEstado') ? 'has-error' : ''}}">
    <label for="PaisJefeDeEstado" class="control-label">{{ 'Paisjefedeestado' }}</label>
    <input class="form-control" name="PaisJefeDeEstado" type="text" id="PaisJefeDeEstado" value="{{ isset($country->PaisJefeDeEstado) ? $country->PaisJefeDeEstado : ''}}" >
    {!! $errors->first('PaisJefeDeEstado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisCapital') ? 'has-error' : ''}}">
    <label for="PaisCapital" class="control-label">{{ 'Paiscapital' }}</label>
    <input class="form-control" name="PaisCapital" type="text" id="PaisCapital" value="{{ isset($country->PaisCapital) ? $country->PaisCapital : ''}}" >
    {!! $errors->first('PaisCapital', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PaisCodigo2') ? 'has-error' : ''}}">
    <label for="PaisCodigo2" class="control-label">{{ 'Paiscodigo2' }}</label>
    <input class="form-control" name="PaisCodigo2" type="text" id="PaisCodigo2" value="{{ isset($country->PaisCodigo2) ? $country->PaisCodigo2 : ''}}" >
    {!! $errors->first('PaisCodigo2', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
