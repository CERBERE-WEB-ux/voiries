$(document).ready(function(){
    var h0 = 100-25
    var h1 = 100-30
    var h2 = 100-60
    $('.htr').slimScroll({
        height: h0+'vh',
        color: '#c2c2c2',
        size: '6px',
    });

    $('.chtmsgcps').slimScroll({
        height: h1+'vh',
        color: '#c2c2c2',
        size: '6px',
    });

    $('.htrprof').slimScroll({
        height: h2+'vh',
        color: '#c2c2c2',
        size: '6px',
    });
});






$(document).on('change', '#fl', function(){
    if($(this).val() != ""){
        //var numero = $(this).attr("name");
        //var id = $("#idcc").val();
        var fileInput = document.getElementById('fl');
        var fichier = fileInput.files[0];
        var nm = fileInput.files[0].name;
        if((fichier).size > 150000000){
            alert('fichier trop lourd!!!');
        }else{
            var tps = new Date();
            var mtn = tps.getHours() + ":" + tps.getMinutes().toString().padStart(2, '0');
            //alert(nm);
            $('#msgcps').append('<div id="" class="mt-2" style="text-align: right">'+'<div class="px-2 text-left bg-secondary" style="border-radius: 10px; width: auto; max-width: 70%; display: inline-block;  color: #c2c2c2">'+'<div class="mb-0 text-start">'+'<span class="mb-0 text-start">'+(nm)+'</span>'+'</div>'+'<div class="text-end mt-0 p-0">'+'<small class="mt-0 p-0" style="color: #202020">'+(mtn)+'</small>'+'</div>'+'</div>'+'</div>');
            $('#chtmsgcps').scrollTop($('#msgcps').height());
        }
    }
    $(this).val("");
});

function parcour(nm, img){
    var nbr = $('.list').length + 1;
    var nnm = '';
    $('.list').each(function(){
        if($(this).attr('nm') == nm){
            nnm = $(this).attr('nm');
            return nnm;
        }
    });

    if(nnm != nm){
        alert(nnm + ' ' + nm);
        
        $('#nmclt').empty();
        $('#msgcps').empty();
        $('#nmclt').append(nm.toUpperCase());
        $('#chtlt').append('<div id="" class="mt-2" style="margin-left: 40px; cursor: pointer">'+'<div class="list d-flex justify-content-between" style="vertical-align: middle" nm="utilisateurtest">'+'<div class="d-flex">'+'<span id="usrimg" class="" style="">'+'<img src="{{asset('+(img)+')}}" height="40">'+'</span>'+'<p class="mb-0" style="vertical-align: middle; margin-left: 10px; margin-top: 8px; text-transform: uppercase">utilisateur'+nbr+'</p>'+'</div>'+'<div>'+'<span class="badge bg-secondary tot" style="vertical-align: middle; margin-right: 10px; margin-top: 8px">04</span>'+'</div>'+'</div>'+'<hr class="" style="margin-top: 8px; margin-left: 45px">'+'</div>');
    }

}

/*
function validate(){
    var rv = true;
    $('input[type=text]').each(function(){
        if($(this).val() == "") {
            rv = false;   // Set flag
            return false; // Stop iterating
        }
    });
    return rv;
}

function validate() {
    var valid = true;
    $('input[type=text]').each(function(){
        if($(this).val() == "") //or a more complex check here
        return valid = false;
    });
    return valid;
}*/


/* $(document).on('click', '.listalluser', function(){
    $('.listalluser').removeClass('bg-secondary');
    $(this).addClass('bg-secondary');
    $('.tot').removeClass( 'd-none');
    $(this).find( ".tot" ).addClass( 'd-none');
    $('#chatsdmsg').removeAttr('disabled');
    $('#fl').removeAttr('disabled');
    var id = $(this).attr('id')
    var nm = $(this).attr('nm');
    var img = $(this).attr('pp');
    var nbr = $('.list').length + 1;
    var nbr0 = 0;
    var nnm = [];
    $('.list').each(function(){
        nnm.push($(this).attr('nm'));
        return nnm;
    });

    //on afch 1eqmt lè ultr dt lè nm n st p ds la chatlist
    if($.inArray(nm, nnm) === -1){
        //$('#nmclt').empty();
        //$('#msgcps').empty();
        //$('#nmclt').append(nm.toUpperCase());
        $('.list').removeClass('bg-secondary');
        $('#chtlt').append('<div id="'+id+'" class="mt-2" style="margin-left: 40px; cursor: pointer">'+'<div class="list d-flex justify-content-between bg-secondary" style="vertical-align: middle" nm="'+(nm)+'">'+'<div class="d-flex">'+'<span id="usrimg" class="" style="">'+'<img src="'+(img)+'" height="40">'+'</span>'+'<p class="mb-0" style="vertical-align: middle; margin-left: 10px; margin-top: 8px; text-transform: uppercase">'+nm.toUpperCase()+'</p>'+'</div>'+'<div>'+'<span class="badge bg-secondary tot" style="vertical-align: middle; margin-right: 10px; margin-top: 8px">'+nbr+'</span>'+'</div>'+'</div>'+'<hr class="" style="margin-top: 8px; margin-left: 45px">'+'</div>');
    
    }else{
        alert("cet utilisateur existe déjà dans votre chat-list!!!<br>veuillez selectionner un autre svp !");
    }
}); */

$(document).on('click', '#meetId', function(){
    var id1 = (Math.floor(Math.random() * 900) + 100).toString();
    var id2 = (Math.floor(Math.random() * 9000) + 1000).toString();
    var id3 = (Math.floor(Math.random() * 9000) + 1000).toString();
    $('#mid').val( id1 + id2 + id3);
});
$(document).on('click', '#meetSc', function(){
    var id1 = (Math.floor(Math.random() * 90) + 10).toString();
    var id2 = (Math.floor(Math.random() * 90) + 10).toString();
    var id3 = (Math.floor(Math.random() * 90) + 10).toString();
    $('#msc').val( id1 + id2 + id3);
});

function usrpp(files) {
    var imageType = /^image\//;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (!imageType.test(file.type)) {
            $('#msgbox').empty();
            $('#msgbox').append('veuillez sélectionner une image svp !');
            $('.oui').addClass('d-none');
            $('.non').removeClass('d-none');
            $('.non').empty();
            $('.non').append('Ok!');
            $('#msg').modal('show');
        }else{
                if(i == 0){
                    previewusrpp.innerHTML = '';
            }
            var img = document.createElement("img");
            img.classList.add("obj");
            img.file = file;
            previewusrpp.appendChild(img); 
            var reader = new FileReader();
            reader.onload = ( function(aImg) { 
                return function(e) { 
                aImg.src = e.target.result; 
                }; 
            })(img);

            reader.readAsDataURL(file);
        }

    }       
};



$(document).on('click', '#usrprofiledit0', function(){
    var prnm = $('#prnm').text();
    var prprnm = $('#prprnm').text();
    var prssrnm = $('#prssrnm').text();
    var prtel = $('#prtel').text();
    var prmail = $('#prmail').text();
    var prbp = $('#prbp').text();
    var prbd = $('#prbd').text();
    var nprbd = prbd.replaceAll("/", "-")
    var nnprbd = nprbd.split("-").reverse().join("-")

    $('#prnme').val("");
    $('#prnme').val(prnm);

    $('#prprnme').val("");
    $('#prprnme').val(prprnm);

    $('#prssrnme').val("");
    $('#prssrnme').val(prssrnm);

    $('#prtele').val("");
    $('#prtele').val(prtel);

    $('#prmaile').val("");
    $('#prmaile').val(prmail);

    $('#prbpe').val("");
    $('#prbpe').val(prbp);

    $('#prbde').val("");
    $('#prbde').val(nnprbd);
});









