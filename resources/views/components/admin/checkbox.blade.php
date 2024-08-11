
@props(['label','name','value','dataAttr','checked'])

<div>
    <label class="row">
      <span class="col">{{$label??$name}}</span>
      <span class="col-auto">
        <label class="form-check form-check-single form-switch">
          <input class="form-check-input" name="{{$name}}" value="{{$value??null}}" data-attr="{{$dataAttr??null}}" type="checkbox" {{ $checked ? 'checked' : '' }}>
        </label>
      </span>
    </label>
  </div>