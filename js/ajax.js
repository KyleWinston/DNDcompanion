

$(document).ready(function(){
    $('input').prop('disabled',true);
    $('#playername').prop('disabled',false);
    $.ajax({
        type: 'GET',
        url: 'query.php',
        success: function(response) {
            var names = response.split(",");
            for (var i=0; i<names.length; i++){
                console.log(names[i]);
                var html = $('#players').html();
                $('#players').html(html + '<li class="player"><a>' + names[i] + '</a></li>');
            }
        }
    });


    $(".dropdown-menu").on('click', 'li .player a', function(){
        var name = this.text;
        console.log(name);
        $.ajax({
            type: 'POST',
            url: 'query.php',
            data:{name: name},
            success: function(response){
                console.log(response);
                var names = response.split(",");
                 $('#characters').html("");
                for (var i=0; i<names.length; i++){
                    console.log(names[i]);
                    var html = $('#characters').html();
                    $('#characters').html(html + '<li class="character"><a>' + names[i] + '</a></li>');
                    $('#btn-player').html(name)
                    $("#playername").val(name);
                }
            }
        });
    });
});
// $('#players').click(saveData());


/*function saveData(){
    if (n.value !== "") {
        console.log(n.name);
        console.log(n.value);
        $.ajax({  
            type: 'POST',  
            url: 'query.php', 
            data: { name: n.name , value: n.value },
            success: function(response) {
                console.log(response);
            }
        });
    }
}*/