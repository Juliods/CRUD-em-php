Aqui, nessa pasta estão todos os arquivos necessários para executar o
programa de CRUD.

Como usar o programa?

Primeiramente é necessário referir ao arquivo mysql_instrucoes.txt
presente no diretório mysql. Nele estão todas as instruções para criar
manualmente a tabela de cadastros, que é utilizada no programa.

Também há um arquivo funcionarios.sql dessa tabela pronta e sem valores gravados.
Portanto, enquanto a tabela estiver vazia o index.php vai avisar o usuário
de que "Nenhum resultado encontrado" pois ainda não há dados nela gravados.

Vale ressaltar que o arquivo funcionarios.sql não concede ao usuario
'programa'@'localhost' que é utilizado pelo programa, portanto, mesmo
que não seja necessário criar a tabela manualmente pelo mysql ainda é
necessário conceder as permissões ao usuario mencionado.
(ver arquivo: mysql_instrucoes.txt, linha 21)

Agora que a tabela foi devidamente criada, ou importada e as permissões
do usuário 'programa'@'localhost' foram devidamente concedidas, podemos
começar com a parte divertida:

Para usar estes arquivos .php é necessário um servidor HTTP, no caso, para
fazer o projeto foi utilizado o Servidor Apache2.

Portanto, após colocar os arquivos presentes no diretório html em uma
localização onde o apache2 possa acessar, agora, basta acessar o localhost
inserindo:"localhost/index.php" na barra de endereço do navegador.

Se o apache2 ou servidor HTML de preferência estiver devidamente configurado
e com todos os arquivos no diretório de execução, a página index.php será
carregada e funcionará normalmente.

Autor: Júlio Perozzi Dias
