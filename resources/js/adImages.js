document.addEventListener('DOMContentLoaded', function(){

    if(document.querySelectorAll('#drophere').length > 0){    
        let csrfToken=$('meta[name="csrf-token"]').attr('content');
        let uniqueSecret=$('input[name="uniqueSecret"]').attr('value');

        let myDropzone=new window.Dropzone('#drophere', {
            url: '/annunci/images/upload',

            params: {
                _token:csrfToken,
                uniqueSecret:uniqueSecret
            },
            addRemoveLinks:true,

            init:function(){
                $.ajax({
                    type: 'GET',
                    url: '/annunci/images',
                    data: {
                        uniqueSecret:uniqueSecret
                    },
                    dataType:'json'
                }).done(function(data){
                    $.each(data, function(key, value){
                        let file={
                            serverId:value.id
                        };

                        myDropzone.options.addedfile.call(myDropzone, file);
                        myDropzone.options.thumbnail.call(myDropzone, file, value.src);
                    });
                });
            }
        });
    

myDropzone.on("success", function(file, response){
    file.serverId=response.id;
    console.log('Prova con coach')
});

myDropzone.on("removedfile", function(file){
    $.ajax({
        type: 'DELETE',
        url: '/annunci/images/remove',
        data: {
            _token: csrfToken,
            id: file.serverId,
            uniqueSecret: uniqueSecret
        },
        dataType:'json'
    });
});

};

});
