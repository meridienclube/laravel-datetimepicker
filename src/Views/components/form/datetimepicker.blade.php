{{ Form::text($name, $value, array_merge(['class' => 'form-control cw_datetimepicker'], $attributes)) }}

@push('scripts')
    <script>
        $('.cw_datetimepicker').datetimepicker({
            //timepicker:false,
            mask: true, // '9999/19/39 29:59' - digit is the maximum possible for a cell
            format:'d/m/Y H:i'
        });
    </script>
@endpush
