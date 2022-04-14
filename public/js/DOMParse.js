
window.addEventListener('load', (event) => {
    const article_body = document.getElementById('article_body');
    const article_content = article_body.textContent.trim()
    const temporary_substr = article_content.substring(0, article_content.indexOf('<'));
    article_body.innerHTML = temporary_substr;
    var doc = new DOMParser().parseFromString(article_content,'text/html').querySelectorAll('body > *');
    for(let i = 0; i < doc.length; i++){
        article_body.append(doc[i]);
    }
})
