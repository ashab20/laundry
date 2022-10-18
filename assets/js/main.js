var next_click=document.querySelectorAll(".next-click");
var back_click=document.querySelectorAll(".back-click");
var finish_click=document.querySelector(".finish-click");
var step_form=document.querySelectorAll(".step");
var list=document.querySelectorAll(".progress-bar li")
let formnumber=0;



next_click.forEach(function(next_page){
    next_page.addEventListener('click',function(){
         if(!validateform()){
        return false;
        }
         formnumber++;
         updateform();
         progress_forward();         
        $('.edit-customers').addClass('d-none')
    });
});


back_click.forEach(function(back_page){
    back_page.addEventListener('click',function(){
         formnumber--;
         updateform();   
    });
});

finish_click.addEventListener('click',function(){
//   if(!validateform()){
//         return false;
//         }
         formnumber++;
         updateform();
         var remove_progress=document.querySelector(".progress-bar");
         remove_progress.classList.add('d-none'); 
});
function progress_forward(){
    list[formnumber].classList.add('active');
}



function updateform(){
    step_form.forEach(function(step_number){ 
       step_number.classList.remove('active'); 
    });
    step_form[formnumber].classList.add('active');
  
   
} 



 
function validateform(){
    validate=true;
    var validate_form=document.querySelectorAll(".step.active input");
    validate_form.forEach(function(val){
        val.classList.remove('warning');
        if(val.hasAttribute('require')){
            if(val.value.length==0){
                validate=false;
                val.classList.add('warning');
            }
        }
    });
    return validate;
}