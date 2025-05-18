function el(x) {
    let element = document.querySelector(x)
    return element;
}

function getMeta(metaName) {
    const metas = document.getElementsByTagName('meta');
    for (let i = 0; i < metas.length; i++) {
        if (metas[i].getAttribute('name') === metaName) {
            return metas[i].getAttribute('content');
        }
    }
    return '';
}

let apikey = el("#opsi").dataset.apikey;

const baseurl = getMeta("baseurl");

window.tanggal = {
    denganNamaHari : function(str) {
        const dateString = str;
        const date = new Date(dateString);

        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        const dayName = days[date.getDay()];
        const day = date.getDate();
        const monthName = months[date.getMonth()];
        const year = date.getFullYear();

        const formattedDate = `${dayName}, ${day} ${monthName} ${year}`;

        return formattedDate;
    },
    toFormatFB : function(str) {
        const now = new Date();
        const past = new Date(str);
        const secondsPast = (now - past) / 1000;

        if (secondsPast < 60) {
            return 'baru saja';
        } else if (secondsPast < 3600) {
            const minutes = Math.floor(secondsPast / 60);
            return `${minutes} menit yang lalu`;
        } else if (secondsPast < 86400) {
            const hours = Math.floor(secondsPast / 3600);
            return `${hours} jam yang lalu`;
        } else {
            const days = Math.floor(secondsPast / 86400);
            return `${days} hari yang lalu`;
        }
    }
};

async function csrf() {
    const url = baseurl + "api/csrf";
    try {
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'x-api-key': apikey,
                'tipe' : 'web'
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



async function plusOne(x) {
    let tb = x.tabel;
    let kl = x.kolom;
    let id = x.id;

    let link = "";
    if(x.link){
        link = x.link;
    }

    const url = baseurl + "api/plusone/"+tb+"/"+kl+"/"+id;
    try {
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'x-api-key': apikey,
                'tipe' : 'web'
            }
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();
        // console.log(result);

        if(el("#data"+kl)){
            el("#data"+kl).innerHTML = result.data.jumlah;
        }

        if(link != ""){
            window.location.href=link;
        }

    } catch (error) {
        console.log(error);
    }
}