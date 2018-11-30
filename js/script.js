$('#ins').on('click', function(e){
   var e = $("input[name='insertlist']").serialize();
   $.post('/main',e, function(info){

   });

});
function loadingtask(data){
    var dat = json_encode(data);
    console.log(dat);
}

$(document).ready ( function() {
    $.ajax({
        url: 'http://listaction',
        method: 'post',
        type: 'json',
        success: function (data) {
            loadingtask(data);
        }

        });
});
