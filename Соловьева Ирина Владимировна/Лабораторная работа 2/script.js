let id = 1;

function addElement() {
  let firstBlock = document.getElementById("selectedElements");
  let secondBlock = document.getElementsByClassName("propElements")[0];
  let select = document.getElementById("list");

  let elem;
  elem = document.createElement("div");
  elem.className = "element";
  elem.id = "elem" + id;

  let field;
  
  switch(select.value) {
  case 'h1':
    elem.innerHTML = "Заголовок первого уровня";
    field = document.createElement("input");
    field.type = "text";
    break
  case 'h2':
    elem.innerHTML = "Заголовок второго уровня";
    field = document.createElement("input")
    field.type = "text";
    break;
  case 'p':
    elem.innerHTML = "Текст";
    field = document.createElement("textarea");
	
    field.addEventListener('keyup', function(){
      if(this.scrollTop > 0){
        this.style.height = this.scrollHeight + "px";
      }
	});
    break
  case 'img':
    elem.innerHTML = "Изображение";
    field = document.createElement("input");
    field.type = "text";
    break
  default:
    break
}

  let delBtn = document.createElement("input");
  delBtn.type = "button";
  delBtn.value = " X "
  delBtn.className = "delBtn";
  delBtn.id = id+1;
  delBtn.setAttribute("onclick", "deleteElement(id)");


  field.className = "input";
  field.id = id;
  field.name = select.value;

  firstBlock.append(elem);
  secondBlock.append(field); 
  elem.append(delBtn); 

  elem.style.height = field.clientHeight + 'px';
  console.log(field.clientHeight);

  id++;
}


function createDocument() {
  let docum = document.getElementsByClassName("documentArea")[0]; 
  let elem; 
  let block; 
  
  for (let i = 1; i<id; i++) {
    elem = document.getElementById(i);
    block = document.createElement(elem.name);
    block.id = "doc_elem" + i;
    docum.append(block);
    if (elem.name == "img") { 
      block.src = elem.value;
    } else if (elem.name == "p") {
      block.innerHTML = elem.value.replace(/\n/g, '<br/>');
    } else {
      block.innerHTML = elem.value;
    }
  }
}

function deleteElement(idDel) {

    document.getElementById(idDel-1).remove(); 
    document.getElementById("elem" + (idDel-1)).remove();
	
    if (document.getElementById("doc_elem"+ (idDel-1))) { 
      document.getElementById("doc_elem"+ (idDel-1)).remove();
    }

    id--;
}