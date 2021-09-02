    // multiselect

    $(document).ready(function(){
        $('#category').multiselect({
        nonSelectedText: 'Select category',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth:'400px'
        });
        $('#category_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        url:"{{ url('store') }}",
        method:"POST",
        data:form_data,
        success:function(data)
        {
        $('#category option:selected').each(function(){
        $(this).prop('selected', false);
        });
        $('#category').multiselect('refresh');
        alert(data['success']);
        }
        });
        });
        });