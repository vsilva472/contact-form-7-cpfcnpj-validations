=== Contact Form 7 CPF/CNPJ Validations ===
Contributors: vsilva472
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=2TVGUEWUEJWAW&lc=BR&item_name=wpplugin&item_number=cf7%2dcpf%2dcnpj&currency_code=BRL&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 4.6
Requires PHP: 5.5
Tested up to: 4.9.2
Stable tag: 0.0.2
Tags: contact, form, contact form, cpf, cnpj, cpf-cnpj
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Validações de **CPF** e/ou *CNPJ* para campos do plugin **Contact Form 7**

== Description ==

**Contact Form 7 CPF/CNPJ Validations** provê de forma simples e fácil funcionalidades para validar campos de **CPF** e/ou **CNPJ** em formulários gerados através do plugin **Contact Form 7**.

**Contact Form 7 CPF/CNPJ Validations** foi desenvolvido de forma não intrusiva, afim de não alterar ou quebrar a layout de seu site, pensando nisso, a validação ocorre em campos que possuem uma **classe CSS específica** que informa para o **Contact Form 7 CPF/CNPJ Validations** que campo e que tipo de validação usar (**CPF** e/ou **CNPJ**).

São elas:

* **cf7cpfcnpj-cpf** para validar campos de **CPF**
* **cf7cpfcnpj-cnpj** para validar campos de **CNPJ**

Veja um exemplo de campo de **CPF** obrigatório:

`[text* nome-do-campo class:cf7cpfcnpj-cpf]`

Na seção *screenshots* você encontra (em ordem de cronolóligica) o processo criação/validação de campos **CPF** e **CNPJ**.

== Installation ==

= Instalação via busca pelo painel de Admin =

1. Logue como admin e navegue até a tela "Adicionar novo plugin" e busque por "cpf-cnpj".
2. Clique no botão "Instalar Agora".
3. Ative o plugin.

= Instalação via painel de admin com arquivo zip =
1. Logue como admin e navegue até a tela "Adicionar novo plugin" e clique no botão "Fazer upload do plugin".
2. Clique no botão "escolher arquivo..." e selecione o arquivo zip em seu computador.
3. Clique no botão "Instalar Agora".
4. Uma vez instalado, ative o plugin **Contact Form 7 CPF/CNPJ Validations**

= Instalação Manual =
1. Faça o upload da pasta "contact-form-7-cpf-cnpj" para dentro da pasta */wp-content/plugin/* de sua instalação do Wordpress.
2. Ative o plugin

Pronto! Agora você pode facilmente **validar** campos de **CPF** e/ou **CNPJ** em seus formulários de contato.

== Frequently Asked Questions ==

#### Este plugin aplica máscara de CPF ou CNPJ nos campos?
Não, o plugin não aplica nenhum tipo de formatação nos campos de seu formulário

#### Este plugin insere algum tipo de código javascript no meu site?
Não, toda validação é feita no backend.

#### Em que tipos de campo a validação ocorre?
A validação ocorre nos campos do tipo "text" do formulário

#### A valição é feita somente em campos obrigatórios?
Não, a validação é feita em campos obrigatórios e/ou opcionais, desde que sejam do tipo "text".

#### Meu formulário tem apenas o campo de CPF, preciso inserir o campo de CNPJ?
Não, a validação dos campos é feita de forma independente.

#### Meu formulário tem apenas o campo de CNPJ, preciso inserir o campo de CPF?
Não, a validação dos campos é feita de forma independente.

#### Como eu faço para validar um campo de CPF?
Para validar um campo de CPF você deve adcionar ao shortcode do campo a class **cf7cpfcnpj-cpf**

#### Como eu faço para validar um campo de CNPJ?
Para validar um campo de CNPJ você deve adcionar ao shortcode do campo a class **cf7cpfcnpj-cnpj**

== Screenshots ==

1. Criando um campo de texto obrigatório e com validação de CPF
2. Criando um campo de texto obrigatório e com validação de CNPJ
3. Formulário com 1 campo de CPF e CNPJ obrigatórios e um campo de CPF opcional
4. Formulário com CPF e CNPJ inválidos
5. Formulário com CPF Válido e CNPJ inválido
6. Formulário com CPF formatado válido (formatado com JS ou pelo usuário) e CNPJ inválido
7. Formulário com CPF e CNPJ válidos
8. Formulário com CPF e CNPJ válidos (ambos formatados com JS ou pelo usuário)

== Changelog ==

= 0.0.2 - 2018-01-28 =
* Safe Require das dependencias

= 0.0.1 - 2018-01-27 =
* Commit Inicial

== Upgrade Notice ==

0.0.2 Safe Require das dependencias
0.0.1 Versão inicial estável



