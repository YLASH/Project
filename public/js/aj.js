 $("#preview").click(function () {

var clonetext = $('#stuff').clone(true);
$('#previewDiv').html(clonetext);
$('#previewDiv input').attr('readonly', 'readonly');
$("#previewDiv").dialog("open");
return false;
});
$("#previewDiv").dialog({
autoOpen: false,
open: function () {},
show: "blind",
hide: "explode"
}); 

