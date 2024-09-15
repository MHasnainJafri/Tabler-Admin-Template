@props(['options', 'label', 'name', 'selectedValue', 'optionLabelKey'=>null, 'optionIdKey'=>null])
<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <select type="text" class="form-select" {{ $name }} value="{{ $selectedValue ?? null }}">
        <option value="{{ $selectedValue ?? 'selected' }}" >Please select an option</option>
        @foreach ($options as $option)
            <option value="{{ $optionIdKey ? $option[$optionIdKey]: $option }}">{{ $optionLabelKey?ucFirst($option[$optionLabelKey]): ucFirst($option) }}</option>
        @endforeach
    </select>
</div>
