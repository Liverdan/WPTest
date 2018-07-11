/**
 * @author PV3C47FN
*/
jQuery(document).ready(function(){    
    jQuery( function() {
        jQuery( "#sortable" ).disableSelection();
        jQuery( "#sortable" ).sortable({
           placeholder:"fantom",
           update:function(event,ui){
               var list = ui.item.parent('ul');
               var cpte=$(list).length;
               console.log (cpte);
               var pos=0;
               jQuery(list.find("li")).each(function() {
                 pos--;
                 console.log (pos);
                 jQuery(this).find("input.positionInput").val(pos);
               });
           }
       });       
    });
});

