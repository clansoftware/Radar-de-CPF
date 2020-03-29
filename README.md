# PESQUISATUDO
[Site Oficial](https://clansoftware.com.br/ "Ir para: https://clansoftware.com.br")
<p>
	**PesquisaTudo** é uma API pela qual conseguimos localizar uma pessoa por meio do CPF, Datanascimento e UF, sendo CPF o único campo obrigatório.
</p>
<br/>
<table border="1">
	<tr>
		<td>Campo</td>
		<td>Obrigatório</td>
		<td>Descrição</td>
		<td>Exemplo</td>
	</tr>
	<tr>
		<td>cpf</td>
		<td>
			![picture alt](img/check-64.png "Campo obrigatório")
		</td>
		<td>
			Campo de númeração
		</td>
		<td>
			333.149.078-42
		</td>
	</tr>
	<tr>
		<td>datanascimento</td>
		<td>
			![picture alt](img/error-64/.png "Campo não obrigatório")
		</td>
		<td>
			Campo do tipo data, em padrão americano
		</td>
		<td>
			1991-01-10
		</td>
	</tr>
	<tr>
		<td>uf</td>
		<td>
			![picture alt](img/error-64.png "Campo não obrigatório")
		</td>
		<td>
			Campo do tipo texto, com duas casas decimais em maiúsculo
		</td>
		<td>
			PR
		</td>
	</tr>
</table>
<br />
### Exemplo
<table border="1">
	<tr>
		<td>Entrada</td>
		<td>Saída</td>
	</tr>
	<tr>
		<td>
			Markup : ```var data = {
					"cpf": "33314907842",
					"datanascimento": "1991-01-10",
					"uf": "PR"}```
		</td>
		<td>
			<img src="img/Screenshot.png" />
		</td>
	</tr>
</table>
<br />
<p>
	Dados possíveis de retorno:
</p>
- [x] Nome<br/>
- [x] Email<br/>
- [x] Celular, Whatsapp<br/>
- [x] Telefone<br/>
- [x] Endereço<br/>
- [x] Áreas/Produtos de interesse<br/>
<h2>Contato | Contact | Contacto</h2>
<a href="https://api.whatsapp.com/send?phone=554184605647" target="_BLANK">(41) 8460-5647</a> 

</a><a href="mailto:contato@clansoftware.com.br">contato@clansoftware.com.br</a>
