<html lang="pt-br">
<header>
    <meta charset="UTF-8">
    <title>API Pesquisa Tudo</title>
    <link rel="shortcut icon" href="img/favicon.ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
    <script type="text/javascript" src="vendor/components/jquery/jquery.js"></script>
    <script type="text/javascript" src="vendor/components/jquery/jquery.mask.js"></script>
    <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/script.js"></script>
</header>

<body>
    <section>
        <div class="navbar">
            <a href="#" id="busca"><b>BUSCA DADOS</b></a>
            <a href="#" id="completa"><b>COMPLETA FORMULÁRIO</b></a>
            <a href="#" id="anti"><b>ANTI-FRAUDE</b></a>
        </div>
    </section>
    <section id="section_busca">
        <div class="container" id="loading_gif">
            <div>
                <img id="image" src="img/loading.gif">
            </div>
        </div>
        <div class="container" id="insert_data">
            <div style="height: 5%"></div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>JWT</label>
                        <div class="row col-12">
	                        <input type="text" class="form-control" id="jwt" placeholder="Insira o JWT">
	                        <a href="https://tawk.to/chat/5afad6f35f7cdf4f05343d7e/default" target="_BLANK">
	                        <button type="button" class="btn btn-secondary" style="width: 100px">Solicite</button>
	                        </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Token</label>
                        <input type="text" class="form-control" id="token" placeholder="Insira o Token">
                    </div>
                    <div class="form-group" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                        <label>CPF</label>
                        </script>
                        <input type="text" class="form-control cpf" id="cpf" placeholder="000.000.000-00" maxlength="11">
                    </div>
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" id="datanascimento" max="2050-12-31">
                    </div>
                    <div class="form-group">
                        <label>UF</label>
                        <select class="form-control" id="uf" name="uf">
                            <option></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-success" id="btn-procurar">PROCURAR</button>
                </div>
                <div class="col-6">
                    <div class="form-group text-center">
                        <label>
                            <h4>RESULTADO</h3></label>
				  </div>
				  <div>
				  <div type="text" id="resultado" disabled="disabled"></div>
				  </div>
			</div>
			</div>
		</div>
	</section>
	<section id="section_completa" class="hide">
		
	</section>
	<section id="section_anti" class="hide">
		
	</section>
</body>
	<footer class="container">
		<div class="row footer">
			<div class="col-md-3">
				<ul class="social_icon">
                    <li><a href="https://www.facebook.com/clansoftware/" target="_BLANK"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://github.com/clansoftware" target="_BLANK"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/clan-software" target="_BLANK"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=554184605647" target="_BLANK"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
        		</ul>
        	</div>
			<div class="titlepage col-md-6">
			<div style="height: 30px"></div>
                 <a href="https://api.whatsapp.com/send?phone=554184605647" target="_BLANK">
                 	<i id="mobile" class="fa fa-mobile" > (41) 8460-5647</i></a> | 
                 <a href="tel:+554133611822" target="_BLANK">
                 	<i id="phone" class="fa fa-phone" > (41) 3361-1822</i> 
                 </a> | <a href="mailto:contato@clansoftware.com.br"><i id="email" class="fa fa-envelope-o" > contato@clansoftware.com.br</i></a>
             </div>
			<div class="col-md-3">
				<a id="invert" href="https://clansoftware.com.br" target="_BLANK">
					<img id="clan-logo" src="img/clan-logo_transparent.png">
				</a>
			</div>
		</div>
	</footer>
</html>