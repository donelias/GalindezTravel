<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="control-label">{{ 'Code' }}</label>
    <input class="form-control" name="code" type="text" id="code" value="{{ isset($city->code) ? $city->code : ''}}" required>
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="control-label">{{ 'City' }}</label>
    <textarea class="form-control" rows="5" name="city" type="textarea" id="city" >{{ isset($city->city) ? $city->city : ''}}</textarea>
    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    <label for="country_id" class="control-label">{{ 'Country Id' }}</label>
    <input class="form-control" name="country_id" type="number" id="country_id" value="{{ isset($city->country_id) ? $city->country_id : ''}}" >
    {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
