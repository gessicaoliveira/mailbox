@component('mail::message')

Para acessar o nosso portal clique no botão abaixo {{ $name }}!

@component('mail::button', ['url' => 'https://www.imoblist.com.br/'])
    Aqui
@endcomponent

@endcomponent