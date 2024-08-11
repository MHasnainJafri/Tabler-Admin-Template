@props(['options', 'label', 'name', 'selectedValue', 'optionLabelKey', 'optionIdKey'])
<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <select type="text" class="form-select" {{ $name }} value="{{ $selectedValue ?? null }}">
        <option value="{{ $selectedValue ?? 'selected' }}" >Please select an option</option>
        @foreach ($options as $option)
            <option value="{{ $option[$optionIdKey ?? 'id'] }}">{{ $option[$optionLabelKey] }}</option>
        @endforeach
    </select>
</div>
