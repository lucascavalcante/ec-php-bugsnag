# Adicionando monitoramento de erros na sua aplicação PHP com Bugsnag 

Olá, este projeto faz parte de um conteúdo criado para a plataforma [Experts Club](https://rocketseat.com.br/expertsclub) da **Rocketseat**.

Este repositório consiste em um boilerplate (ponto de partida) para poder acompanhar o conteúdo do vídeo.

Requisitos:
* Docker
* Docker-compose

## Fazendo o setup do projeto localmente

Clone o repositório:
```
git clone git@github.com:lucascavalcante/ec-php-bugsnag.git
```

Entre na pasta do projeto:
```
cd ec-php-bugsnag.git
```

Execute o arquivo `run.sh`:
```
./run.sh
```

PS: este arquivo precisa ter permissão de execução para rodar corretamente. Para saber se ele está com a permissão correta, digite `ls -la`. O resultado será como abaixo.
```
-rwxr-xr-x   1 root  root   133 11 Set 15:08 run.sh
```
A letra `x` no final da primeira sequência de letras representa a permissão de execução. Caso tenha um `-` no lugar da letra, digite `chmod +x run.sh`.

Após esses passos, seu projeto deverá estar rodando perfeitamente! :)

Para acessar o serviço `ms-transaction`:
```
http://127.0.0.1:8006
```

## Derrubando a aplicação

Se quiser derrubar a aplicação, basta executar o arquivo `stop.sh`:
```
./stop.sh
```
PS: o mesmo vale para esse arquivo em relação à permissão para execução verificada no arquivo `run.sh`.

## Versão final do projeto

Para acessar a versão final do projeto (após as implementações feitas no vídeo), acesse a branch [final](https://github.com/lucascavalcante/ec-php-bugsnag/tree/final).

## Autor

* [Lucas Cavalcante](https://lucascavalcante.dev)
