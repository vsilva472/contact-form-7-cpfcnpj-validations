# Contact Form 7 CPF/CNPJ Validations #
[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/cf7-cpfcnpj-validations.svg)](https://wordpress.org/plugins/cf7-cpfcnpj-validations/) 
[![WordPress plugin](https://img.shields.io/wordpress/plugin/dt/cf7-cpfcnpj-validations.svg)](https://wordpress.org/plugins/cf7-cpfcnpj-validations/) 
[![WordPress](https://img.shields.io/wordpress/v/cf7-cpfcnpj-validations.svg)](https://wordpress.org/plugins/cf7-cpfcnpj-validations/)



## Descrição

**Contact Form 7 CPF/CNPJ Validations** provê de forma simples e fácil funcionalidades para validar campos de **CPF** e/ou **CNPJ** em formulários gerados através do plugin **Contact Form 7**.

**Contact Form 7 CPF/CNPJ Validations** foi desenvolvido de forma não intrusiva, afim de não alterar ou quebrar a layout de seu site, pensando nisso, a validação ocorre em campos que possuem uma **classe CSS específica** que informa para o **Contact Form 7 CPF/CNPJ Validations** que campo e que tipo de validação usar (**CPF** e/ou **CNPJ**).

São elas:

* **cf7cpfcnpj-cpf** para validar campos de **CPF**
* **cf7cpfcnpj-cnpj** para validar campos de **CNPJ**

Veja um exemplo de campo de **CPF** obrigatório:

```php
[text* nome-do-campo class:cf7cpfcnpj-cpf]
```

Na seção *screenshots* você encontra (em ordem de cronolóligica) o processo criação/validação de campos **CPF** e **CNPJ**.

## Instalação

### Instalação via busca pelo painel de Admin =

1. Logue como admin e navegue até a tela "Adicionar novo plugin" e busque por "contact form 7 cpf".
2. Clique no botão "Instalar Agora".
3. Ative o plugin.


### Instalação via painel de admin com arquivo zip

1. Baixe o [zip](https://wordpress.org/plugins/cf7-cpfcnpj-validations/) do projeto.
2. Logue como admin e navegue até a tela "Adicionar novo plugin" e clique no botão "Fazer upload do plugin".
3. Clique no botão "escolher arquivo..." e selecione o arquivo zip que você fez o download.
4. Clique no botão "Instalar Agora".
5. Uma vez instalado, ative o plugin **Contact Form 7 CPF/CNPJ Validations**

### Instalação Manual

1. Baixe e descompacte o [zip](https://wordpress.org/plugins/cf7-cpfcnpj-validations/).
2. Copie a pasta "contact-form-7-cpf-cnpj-validations" para dentro da pasta */wp-content/plugin/* de sua instalação do Wordpress.
3. Ative o plugin

Pronto! Agora você pode facilmente **validar** campos de **CPF** e/ou **CNPJ** em seus formulários de contato.


## Dúvidas Frequentes

1. #### Este plugin aplica máscara de CPF ou CNPJ nos campos?
   Não, o plugin não aplica nenhum tipo de formatação nos campos de seu formulário

2. ### Este plugin insere algum tipo de código javascript no meu site?
   Não, toda validação é feita no backend.
   
3. #### Em que tipos de campo a validação ocorre?
   A validação ocorre nos campos do tipo "text" do formulário
   
4. #### A valição é feita somente em campos obrigatórios?
   Não, a validação é feita em campos obrigatórios e/ou opcionais, desde que sejam do tipo "text".

5. #### Meu formulário tem apenas o campo de CPF, preciso inserir o campo de CNPJ?
   ⋅Não, a validação dos campos é feita de forma independente.

6. #### Meu formulário tem apenas o campo de CNPJ, preciso inserir o campo de CPF?
   Não, a validação dos campos é feita de forma independente.

7. #### Como eu faço para validar um campo de CPF?
   Para validar um campo de CPF você deve adicionar ao shortcode do campo a class **cf7cpfcnpj-cpf**

8. #### Como eu faço para validar um campo de CNPJ?
   Para validar um campo de CNPJ você deve adcionar ao shortcode do campo a class **cf7cpfcnpj-cnpj**



### Screenshots

> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-1.png" target="_blank" title="Criando um campo de texto obrigatório e com validação de CPF"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-1.png" width="100" alt="Validação de CPF"></a> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-2.png" target="_blank" title="Criando um campo de texto obrigatório e com validação de CNPJ"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-2.png" width="100" alt="Criando um campo de texto obrigatório e com validação de CNPJ"></a> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-3.png" target="_blank" title="Formulário com 1 campo de CPF e CNPJ obrigatórios e um campo de CPF opcional"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-3.png" width="100" alt="Formulário com 1 campo de CPF e CNPJ obrigatórios e um campo de CPF opcional"></a> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-4.png" target="_blank" title="Formulário com CPF e CNPJ inválidos"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-4.png" width="100" alt="Formulário com CPF e CNPJ inválidos"></a> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-5.png" target="_blank" title="Formulário com CPF Válido e CNPJ inválido"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-5.png" width="100" alt="Formulário com CPF Válido e CNPJ inválido"></a> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-6.png" target="_blank" title="Formulário com CPF formatado válido (formatado com JS ou pelo usuário) e CNPJ inválido"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-6.png" width="100" alt="Formulário com CPF formatado válido (formatado com JS ou pelo usuário) e CNPJ inválido"></a> <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-7.png" target="_blank" title="Formulário com CPF e CNPJ válidos"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-7.png" width="100" alt="Formulário com CPF e CNPJ válidos"></a>  <a href="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-8.png" target="_blank" title="Formulário com CPF e CNPJ válidos (ambos formatados com JS ou pelo usuário)"><img src="https://www.viniciusdesouza.com.br/wp-plugins/cf7-cpf-cnpj/screenshot-8.png" width="100" alt="Formulário com CPF e CNPJ válidos (ambos formatados com JS ou pelo usuário)"></a> 


### Changelog

0.0.3 - 2018-01-30
- Atualização do readme.txt

0.0.2 - 2018-01-28
* Safe require das dependâncias do plugin

0.0.1 - 2018-01-27 
* Commit Inicial


### Doações
Se este plugin te ajudou, que tal me pagar uma xícara de café?

[![paypal](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=2TVGUEWUEJWAW&lc=BR&item_name=wpplugin&item_number=cf7%2dcpf%2dcnpj&currency_code=BRL&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted)
