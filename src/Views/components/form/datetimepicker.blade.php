{{ Form::text($name, $value, array_merge(['class' => 'form-control datetimepicker'], $attributes)) }}

@push('scripts')
    <script>
        jQuery('#datetimepicker').datetimepicker();
    </script>
@endpush
