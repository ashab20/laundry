var create_workspace=document.querySelector(".create-workspace");
var next_click=document.querySelectorAll(".next-click");
var back_click=document.querySelectorAll(".back-click");
var finish_click=document.querySelector(".finish-click");
var step_form=document.querySelectorAll(".step");
var list=document.querySelectorAll(".progress-bar li")
let formnumber=0;


create_workspace.addEventListener('click',function(e){
    e.preventDefault();
    // if(!validateform()){
    //     return false;
    // }

    let contact = $('.contact');
    let name = $('.name');
    let address = $('.addess');

    let data = {
        name,contact,address
    }


    $.ajax({
        url: '../form/data.php?department',
        type: 'post',
        dataType: 'json',
        data,
        contentType: 'application/json',
        success: function (res) {
            console.log(res);
        },error: function(xhr, status, errorMessage) {
            console.log(errorMessage);
        }
    });


   formnumber++;
   updateform();
   progress_forward();
});




next_click.forEach(function(next_page){
    next_page.addEventListener('click',function(){
         if(!validateform()){
        return false;
        }
         formnumber++;
         updateform();
         progress_forward();
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