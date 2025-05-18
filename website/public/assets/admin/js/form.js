function sf(x) {
    const fid = x.fid;
    const field = x.field;
    
    el('#'+fid).onsubmit = (e) => {
        e.preventDefault();
        const form = el('form[id="'+fid+'"]');
        const formData = new FormData(form);
        const message = el("#msg"+fid);

        if(validasi({
            fid: fid,
            field: field
        })){
            fetch(baseurl + 'api/login', {
                method: 'POST',
                headers: {
                    'x-api-key': apikey
                },
                body: formData
            }).then(response => response.json()).then(result => {
                if(result.code == 200){
                    if(result.data.info == "redirect"){
                        window.location.href = result.data.url;
                    }else{
                        message.innerHTML = `
                            <div class="alert alert-danger text-danger" role="alert">
                                `+result.data.info+`
                            </div>
                        `;
                    }
                }else{
                    message.innerHTML = `
                        <div class="alert alert-danger text-danger" role="alert">
                            `+result.info+`
                        </div>
                    `;
                }
            }).catch(error => {
                console.log(error);
            });
        }

    }
}

async function csrf() {
    const url = baseurl + "api/csrf";
    try {
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'x-api-key': apikey
            }
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();

        let form = document.querySelectorAll('form');
        for(let i=0; i<form.length; i++){
            let input = document.createElement('input');
            input.setAttribute('type','hidden');
            input.setAttribute('id','__csrf');
            input.setAttribute('name','__csrf');
            input.setAttribute('value',result.data.csrf);
            form[i].prepend(input);
        }
        return result.data.csrf
    } catch (error) {
        console.error(error.message);
    }
}

csrf();