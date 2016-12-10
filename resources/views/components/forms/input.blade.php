{!! Former::text($name)->type($type)->label(title_case($name)) !!}
@include('components.forms.error',['name' => $name])
