
const API_URL = 'https://jsonplaceholder.typicode.com';

const HTMLresponse= document.querySelector('#app');


fetch('${API_URL}/users')
.then((response) => response.json())
.then((users) => {

  const tpl = users.map(user => '<li>${user.name} ${user.email}</li>');
  HTMLresponse.innerHTML = '<ul>${tpl}</ul>'
  

});










//const xhr = new XMLHttpRequest();

//function onRequestHandler(){

  //if(this.readyState == 4 && this.status == 200){
      //console.log(this.response);
      //const HTMLresponse = document.querySelecto
      //const tpl = data.map(user => '<li>${user.name} ${user.email}</li>');
      //HTMLresponse.innerHTML = '<ul>${tlp}</ul>'
  //}   

//}

//xhr.addEventListener('load', onRequestHandler);
//xhr.open('GET', '${API_URL}/users');
//xhr.send();