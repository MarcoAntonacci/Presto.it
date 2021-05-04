document.addEventListener('DOMContentLoaded', function(){

    if(document.querySelectorAll('#drophere').length > 0) {   
        
        function getAttribute(selector, attributeName) {
            return document.querySelectorAll(selector)[0].getAttribute(attributeName);
        }

        let csrfToken = getAttribute('meta[name="csrf-token"]', 'content');
        let uniqueSecret = getAttribute('input[name="uniqueSecret"]', 'value');

        let myDropzone = new window.Dropzone('#drophere', {
            url: '/annunci/images/upload',

            params: {
                _token : csrfToken,
                uniqueSecret : uniqueSecret
            },

            addRemoveLinks : true,

            init : function(){

                fetch(`/annunci/images? uniqueSecret=${uniqueSecret}` , {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    }
                })
                .then(response => {
                    console.log('risposta ricevuta: ', response)
                    return response.json()
                })
                .then(data => {
                    console.log('Success:', data);
                    data.forEach(value => {
                        let file = {
                            serverId: value.id
                        };

                        myDropzone.options.addedfile.call(myDropzone, file);
                        myDropzone.options.thumbnail.call(myDropzone, file, value.src);
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }

        });


        myDropzone.on("success", function(file, response){

            file.serverId = response.id;
            console.log('Immagine Upload con successo');

        });

        myDropzone.on("removedfile", function(file){

            const data = {
                _token : csrfToken,
                id : file.serverId,
                uniqueSecret : uniqueSecret
            };

            fetch('/annunci/images/remove', {
                method: 'DELETE', 
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Cancellazione OK', data);
                })
                .catch((error) => {
                    console.error('Cancellazione Error:', error);
                });
        });

    }

});
