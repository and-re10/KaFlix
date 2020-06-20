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
            url: "video/store",
            // Verification des donnees dans le formulaire
            data: $('#addVideo').serialize(),
            // En cas de Success
            success: function(response) {
                console.log(response);
                $("#modalAddVideo").modal('hide');
                alert('Data Saved');
                location.reload();
            },
            // En cas de Error
            error: function(error) {
                alert("Data Not Saved");
            }
        });
    });

    // Model pour les filtres
    $('#addFilter').submit(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "filter/store",
            data: $('#addFilter').serialize(),
            success: function(response) {
                console.log(response);
                $('#modalAddFilter').modal('hide');
                alert('Data Saved');
                location.reload();
            },
            error: function(error) {
                alert('Data Not Saved');
            }
        });
    });
});