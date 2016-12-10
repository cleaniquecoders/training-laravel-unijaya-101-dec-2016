@if ($errors->has($name))
    <span class="help-block" style="color:red">
        <strong>{{ $errors->first($name) }}</strong>
    </span>
@endif
