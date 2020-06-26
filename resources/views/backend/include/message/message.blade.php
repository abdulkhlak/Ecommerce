@if(session()->has('success'))
    <script>
        $(function () {
            $.notify("{{session()->get('success')}}",{globalPosition:'top right',className:'success'});
        })
    </script>
@endif
@if(session()->has('error'))
    <script>
        $(function () {
            $.notify("{{session()->get('error')}}",{globalPosition:'top right',className:'error'});
        })
    </script>
@endif