
const article_body = document.getElementById("article_body");
const article_title = document.getElementById('article-title');
const CSRF_TOKEN = document.querySelector('[name=csrf-token]').content;

function appendImg(link, node){
    console.log(link)
    const newImg = document.createElement('img');
    newImg.setAttribute('src',link);
    node.append(newImg);
}

article_body.addEventListener("drop", async function(event) {
    event.preventDefault();
    let link = "";
    let response = await postDraftImage(event.dataTransfer.files[0]);
    await response.json().then((val) => link = window.location.origin+ '/' + val.link);
    appendImg(link, article_body);

}, false);

async function postDraftImage(data) {
    const currentDraftId = document.querySelector('[name=draft_id]').content;
    const formData = new FormData();
    formData.append('file', data);

    const response = await fetch(window.location + '/img/' + currentDraftId, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            'X-CSRF-TOKEN' : CSRF_TOKEN
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: formData
    });

    return response; // parses JSON response into native JavaScript objects
}

const submit_button = document.getElementById('create_article');
const text_area = document.getElementById('article_content_text');

submit_button.addEventListener('click', (e)=>{
    const value = article_body.innerHTML;
    console.log(value);
    text_area.innerHTML = value;
});
