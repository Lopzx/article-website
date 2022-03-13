const hidden_file_container = document.getElementById("hidden_file");
const article_body = document.getElementById("article_body");
const article_title = document.getElementById('article-title')

// function dragAndAppend($file, node){
//     const newInput = document.createElement('input');
//     newInput.setAttribute('type','file')
//     console.dir(newInput);
// }

article_body.addEventListener("drop", async function(event) {
    event.preventDefault();
    let file = "";
    let file_size = 0;
    let fileObj = "";

    await event.dataTransfer.files[0].arrayBuffer().then((val) => {
        console.log(val)
        file = new Uint8Array(val);
        file_size = val.byteLength;
        for(let i = 0; i < file_size; i++){
            fileObj += file[i] + ' ';
        }
        article_title.value = fileObj;
    });




    // console.log(event.dataTransfer.files[0].stream());
    // console.log(event.dataTransfer.files[0].text());
  }, false);
