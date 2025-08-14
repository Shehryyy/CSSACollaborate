@props(['labelText' => "default", 'name' => "default", 'hasLabel' => true, 'password' => false, 'readonly' => false, 'value' => "", 'display' => true, 'disabled' => false])

<div class="text-input-div" @if(!$display) style="display: none;" @endif>
    @if($hasLabel)
        <label id="{{$name}}_label" for="{{$name}}_input">{{$labelText}}</label>
    @endif
    <input @readonly($readonly) type="{{$password ? "password": "text"}}" id="{{$name}}_input"
           name="{{$name}}" placeholder="{{$labelText}}" @if($value != "" && !$password) value="{{ $value }}" @elseif(!$password) value="{{ old($name) }}" @endif @disabled($disabled)/>
    
    @error("$name")
        <p class="error-input">{{$message}}</p>
    @enderror
</div>
