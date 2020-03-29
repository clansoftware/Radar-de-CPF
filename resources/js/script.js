$(document).ready(function() {
    document.querySelector('#busca').style.backgroundColor='#191970';
	$('#cpf').mask('000.000.000-00', {reverse: true});
    $("#btn-procurar").click(function () {
        var jwt = $("#jwt").val();
        var token = $("#token").val();
        var cpf = $("#cpf").val();
        var datanascimento = $("#datanascimento").val()
        var uf = $("select[name=uf]").val();

        var errado = false;
        // Limpa mensagens de erro
        $("#msgalert").hide();
        $("#msgalert").html("");
        $(".removerror").removeClass("erro");

        if (jwt == "")
        {
            alert("O campo JWT é obrigatorio");
            $("#msgalert").append("<li>O campo JWT é obrigatorio</li>");
            $("#msgalert").fadeIn();
            $("#telefone").addClass("erro");
            $("#telefone").focus();
            errado=true;
        }
        else if (token == "")
        {
            alert("O campo Token é obrigatorio");
            $("#msgalert").append("<li>O campo JWT é obrigatorio</li>");
            $("#msgalert").fadeIn();
            $("#telefone").addClass("erro");
            $("#telefone").focus();
            errado=true;
        }
        else if (cpf == "")
        {
            alert("O campo CPF é obrigatorio");
            $("#msgalert").append("<li>O campo CPF é obrigatorio</li>");
            $("#msgalert").fadeIn();
            $("#telefone").addClass("erro");
            $("#telefone").focus();
            errado=true;
        }
        else if (cpf.trim().length < 11)
        {            
            alert("CPF inválido");
            $("#msgalert").append("<li>CPF inválido</li>");
            $("#msgalert").fadeIn();
            $("#cpf").addClass("erro");
            $("#cpf").focus();
            errado=true;
        } else {
            var fone_regex = /^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/gm;

        }

        if(errado==true){
            return false;
        }

        var data = { 
		    cpf : $('#cpf').val(),
		    datanascimento: $('#datanascimento').val(),
		    uf: $('#uf').val(),
		    token: $('#token').val(),
		    jwt: $('#jwt').val()

		}
		console.log(data)
		$.ajax({
		    method: 'GET',
		    crossDomain: true,
		    dataType: 'json',
		    crossOrigin: true,
		    async: true,
		    contentType: 'application/json',
		    data: data,
		    url: 'Pesquisatudo.php',

            beforeSend: function(){
                $("#insert_data").hide();
                $("#loading_gif").show();
               },
            complete: function(){
                $("#loading_gif").hide();
                $("#insert_data").show();
               },
            success: function(data) {
                let html = '';
                $(data).each(function(i,v){
                    html += '<b>CPF:</b>'+v.cpf+'<br/>'
                    html += '<b>Nome:</b>'+v.name+'<br/>'
                    html += '<b>Celular:</b>'+v.cellphone+'<br/>'
                    html += '<b>Telefone:</b>'+v.phone+'<br/>'
                    html += '<b>E-mail:</b>'+v.email+'<br/>'
                    // html += '<b>Endereço:</b>'+v.endereco+'<br/>'
                    // html += '<b>Número:</b>'+v.numero+'<br/>'
                    // html += '<b>Complemento:</b>'+v.complemento+'<br/>'
                    // html += '<b>Cidade:</b>'+v.cidade+'<br/>'
                    // html += '<b>Estado:</b>'+v.estado+'<br/>'
                });
		        $('#resultado').html(html)
		    },
		    error: function (request, status, error) {
		        console.log("There was an error: ", request.responseText);
		    }
		})
    })
    $("#busca").on('click', function() {
                    $("#section_busca").show();
                    $("#section_completa").hide();
                    $("#section_anti").hide();
                    document.querySelector('#busca').style.backgroundColor ='#191970';
                    document.querySelector('#completa').style.backgroundColor ='black';
                    document.querySelector('#anti').style.backgroundColor ='black';
                });
                $("#completa").on('click', function() {
                    $("#section_busca").hide();
                    $("#section_completa").show();
                    $("#section_anti").hide();
                    document.querySelector('#busca').style.backgroundColor ='black';
                    document.querySelector('#completa').style.backgroundColor ='#191970';
                    document.querySelector('#anti').style.backgroundColor ='black';
                });
                $("#anti").on('click', function() {
                    $("#section_busca").hide();
                    $("#section_completa").hide();
                    $("#section_anti").show();
                    document.querySelector('#busca').style.backgroundColor ='black';
                    document.querySelector('#completa').style.backgroundColor ='black';
                    document.querySelector('#anti').style.backgroundColor ='#191970';
                });
}); //fim ready
