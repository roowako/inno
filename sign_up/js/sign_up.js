$(document).ready(function(){
    var ao = $(".inputField");
    ao.attr("autocomplete","off");
    $(".create").click(function(event){
        var input = $(".inputField").val();
        event.preventDefault();
        
        
        
        if( input == ""){
            $("#emptyField").html("Please fill in all fields.").fadeIn("slow").delay(3000).fadeOut("slow");
            $("#emptyField").addClass("empty");
           
        } else{
            var name = $("#fullname").val(),
                uname = $("#uname").val(),
                pword = $("#pword").val(),
                gender = $("#gender").val(),
                email = $("#email").val() ;
            $.ajax({
                type: "post",
                url: "register.php",
                data: {
                    
                    name : name,
                    uname : uname,
                    pword : pword,
                    gender : gender,
                    email : email
                    
                }
            
            }).done(function(response){
                $("#emptyField").addClass("empty");
                $("#emptyField").html(response).fadeIn("slow").delay(3000).fadeOut("slow");
              
            });   
        }
        
    });
    
    
    $(".fullname").on("keyup",function(event){
      $(this).actorName(event);
    });
    
    $(".uname").on("keyup",function(event){
        $(this).actorUserName(event);
    });
   
    $.fn.actorName = function(event){
        
         var rx = new RegExp;
        rx = /[^a-z,'\ ]/gi;
        
        if( rx.test($(this).val()) ){
           
            $(".actor-name").text("Please enter a valid name.");    
        } else{
             $(".actor-name").text("")
        }
    };
    
    $.fn.actorUserName = function(event){
        
        var un = $(this).val();
         var rx = new RegExp;
            
         ind = /[^a-z]/gi;
         rx = /[^a-z0-9]/gi;;
        
        if( rx.test($(this).val()) ){
           
            $(".actor-uname").html("Enter a valid username.");    
        } else{
           
             $.ajax({
                url: "register.php",
                 type: "post",
                 data: { un: un}
             }).done(function(res){
                
                $(".actor-uname").html(res);
                 if( $.trim(res) == un+" is ok"){
                     $(".actor-uname").css("color","#009000");
                 }else if( $.trim(res) == un+" is taken" ){
                     $(".actor-uname").css("color","#f00");
                     
                 } 
                 
             });
            
           
        }
    };
    
    
   
});