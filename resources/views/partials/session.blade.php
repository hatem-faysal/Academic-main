@if(session('type'))
    <script>
        jQuery(window).on("load", function() {
            setTimeout(function() {
                swal({
                    title: "{{session('title')}}",
                    text: "{{session('message')}}",
                    timer: 3e3,
                    showConfirmButton: 1,
                    type: "{{session('type')}}"
                });
            }, 1e3);
        });
    </script>

@endif

@if(!empty($errors->all()))
    <script>
        jQuery(window).on("load", function() {
            setTimeout(function() {
                swal({
                    title: "ERROR",
                    html: `
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</lli>
                            @endforeach
                        </ul>
                    `,
                    timer: 3e3,
                    showConfirmButton: true,
                    type: "error"
                });
            }, 1e3);
        });
    </script>

@endif
