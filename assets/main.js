const form = document.getElementById('form-container');
const addbtn = document.getElementById('addbtn');
const closebtn =document.getElementById('icon');
 
addbtn.addEventListener('click', function(){
    console.log('test');
    
  form.style.display='block';
});

closebtn.addEventListener('click', function(){
 form.style.display='none';

});