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

const baseurl = getMeta("baseurl");
const apikey = getMeta("apikey");
const prefix = getMeta("prefix");

async function getDataToInner(x) {
    const endpoint = x.endpoint;
    const elementid = x.elementid;
    const url = baseurl + "api/"+endpoint;
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
        console.log(result);
        el('#'+elementid).innerHTML = result.data;
    } catch (error) {
        console.error(error.message);
    }
}