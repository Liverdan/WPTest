/**
 * @author PV3C47FN
 */
jQuery(document).ready(function() {
    //alert("pouet !!!");
    jQuery(function() {
        jQuery("#sortable").disableSelection();
        console.log ("changement ok");
        jQuery("#sortable").sortable({
            placeholder : "fantom",
            update : function(event, ui) {
                var list = ui.item.parent('ul');
                var cpte = $(list).length;
                console.log(cpte);
                var pos = 0;
                jQuery(list.find("li")).each(function() {
                    pos--;
                    console.log(pos);
                    jQuery(this).find("input.positionInput").val(pos);
                });
            }
        });
    });
});

/*jQuery(document).ready(function(e) {
    jQuery("#opener").on(function(e) {
        alert("pouet !!!");
        //window.location = "http://localhost/wptest/ma-page-a-moi/";
    });
});*/
