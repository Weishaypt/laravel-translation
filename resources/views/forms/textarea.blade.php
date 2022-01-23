<div class="input-group">
    <label for="{{ $field }}">
        {{ $label }}
    </label>
    <textarea
        class="@if($errors->has($field)) error @endif" 
        name="{{ $field }}" 
        id="{{ $field }}" 
        type="text" 
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
        {{ isset($required) ? 'required' : '' }}>
{{ old($field) }}
    </textarea>
    @if($errors->has($field))
        @foreach($errors->get($field) as $error)
            <p class="error-text">{!! $error !!}</p>
        @endforeach
    @endif
</div>