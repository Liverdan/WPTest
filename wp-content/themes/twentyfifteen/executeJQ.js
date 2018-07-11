/**
 * @author PV3C47FN


/*Fait apparaitre text si clic sur h1 =>paraText*/
$(document).ready(function(){  
    alerte ("pouet");  
    $( function() {
        $( "#sortable" ).disableSelection();
        $( "#sortable" ).sortable({
           placeholder:"fantom",
           update:function(event,ui){
               var list = ui.item.parent('ul');
               var cpte=$(list).length;
               console.log (cpte);
               var pos=0;
               $(list.find("li")).each(function() {
                 pos--;
                 console.log (pos);
                 $(this).find("input.positionInput").val(pos);
               });
           }
       });
       
    });
}

