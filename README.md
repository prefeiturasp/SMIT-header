# Barra Universal Multisite SMIT
Barra universal multisite utilizada em todos os sites sobre da Secretaria Municipal de Inovação e Tecnologia.  
A barra tem como objetivo dar a sensação de "lugar comum" aos usuários que utilizam os site do ecossistema SMIT, assim como incentivar a visualização de novos conteúdos.

## Utilização
A barra é hospedada no dominio central do [011lab/header](https://011lab.prefeitura.sp.gov.br/header/global_header.php) e sua implementação deve ser feita utilizando iframe e um pouco de código javascript.  

![Exemplo](example.png "exemplo da barra")

## Implementação
A implementação pode ser feita em qualquer site de forma rápica copiando e colando o código a seguir:

### Código Javascript

`<script>
    /* auto rezise window by iframe content */
    window.addEventListener("message", receiveMessage, false);
    function receiveMessage(event)
    {
        if(event.origin == "http://localhost" || event.origin == "https://011lab.prefeitura.sp.gov.br") {
            iframe = document.getElementById("global-bar");
            iframe.style.height = event.data + "px";
        }
    }
</script>`

### Código HTML 

`<iframe id="global-bar" src="https://011lab.prefeitura.sp.gov.br/header/global_header.php" onload="this.contentWindow.postMessage('height', 'https://011lab.prefeitura.sp.gov.br');" scrolling="no" width="100%"></iframe>`

Se desejar verifique o arquivo example.html que possui um exemplo de implementação.