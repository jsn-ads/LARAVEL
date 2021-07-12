-Instalando Composer
    crie um arquivo dentro do projeto com nome:
        composer.json 
        {
            "require":{

            }
        }
    apos isso digite no terminal na raiz do projeto
        composer install
        composer init
        composer update


----------------------------------------------------------------------------------------

-Instalando Laravel global , apenas uma unica vez e necessario ter composer instalado 
    composer global require laravel/installer

-criando um projeto
    laravel new "nome do projeto" --auth

-verificando verão do laravel
    php artisan -V

-alerando a porta 
    php artisan serve --port=9000

-criando key do banco de dados no arquivo (.env)
    php artisan key:generate

- Caso o Laravel nao tenha Auth na Pasta controller faça esse comando
    composer require laravel/ui
    php artisan ui vue --auth

-start no projeto
    php artisan serve

-Criando um controller
	php artisan make:controller "nomeController"
    
-Criando controller com metodos e rotas ja pre definidas
    	php artisan make:controller "nomeController" --resource
    
-Criando um Model
    	php artisan make:model "nome do Model"

-Criando um Model com Migrations
	php artisan make:model "nome" -m

-Criando uma Migrations aparti de um model ja criado
	php artisan make:migration create_"nome"_table	

-Executando uma migrations
	php artisan migrate

-Visualizando Rotas do projeto
     php artisan route:list

-Limpando cash das views
	php artisan view:clear

-Instalando Painel AdminLTE 
    	composer require jeroennoten/laravel-adminlte
    	php artisan adminlte:install --force