@extends('layouts.app')

@section('content')
    @include('templates.header')
    @include('pageMyVideos.MyVideos')
    @include('pageMyVideos.addVideoModal')
    @include('pageMyVideos.myModals')

    {{-- <script src="{{asset('js/app.js')}}"></script> --}}

    <script type="text/javascript">
        
        $(document).ready(function(){

            $('#test').click(function(){
                alert('Hello World, Premier Test!')
            })

            // Model test 1
            $('#addVideo').submit(function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();

                // requettes via ajax sans chargament de page
                $.ajax({
                    // Type de methode 
                    type: "POST",
                    // Route du controller
                    url: "{{route('MyVideos.store')}}",
                    // Verification des donnees dans le formulaire
                    data: $('#addVideo').serialize(),
                    // En cas de Success
                    success: function(response) {
                        console.log(response);
                        $("#modalAddVideo").modal('hide');
                        alert('Data Saved');
                    },
                    error: function(error) {
                        alert("Data Not Saved");
                    }
                });
            });

            // // Model test 2
            // $('#addVideo').submit(function(e){
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     })
            //     e.preventDefault();

            //     $.ajax({
            //         type: "POST",
            //         url: "{{route('MyVideos.store')}}",
            //         data: $('#addVideo').serialize(),
            //         success: function(response) {
            //             console.log(response);
            //             $('#modalAddVideo').modal('hide');
            //             alert('Data Saved');
            //         },
            //         error: function(error) {
            //             alert('Data Not Saved');
            //         }
            //     });
            // });
        });
    </script>
@endsection