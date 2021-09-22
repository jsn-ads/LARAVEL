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
 
-Visualizando Rotas do projeto
     php artisan route:list

-Limpando cash das views
	php artisan view:clear

-Console interativo para testes
    php artisan tinker

----------------------------------------------------------------------------------------
PAINEL 
-Instalando Painel AdminLTE 
    	composer require jeroennoten/laravel-adminlte
    	php artisan adminlte:install --force

----------------------------------------------------------------------------------------
CONTROLLERS
-Criando um controller
	php artisan make:controller "nomeController"
    
-Criando controller com metodos e rotas ja pre definidas
    	php artisan make:controller "nomeController" --resource

----------------------------------------------------------------------------------------
MODEL 
-Criando um Model
    	php artisan make:model "nome do Model"

-Criando um Model com Migrations
	php artisan make:model "nome" -m

----------------------------------------------------------------------------------------
MIGRATES , comandos utiliados para cria tabelas no banco de dados 

-Cria uma migrate
    php artisan make:migration | (create"_nome_"table) (update"_nome_"table)

-Executado a migrate para cria as tabelas nos bancos
    php artisan migrate

-Voltando estado anterior desfazendo o ultimo migrate
    php artisan migrate:rollback

-Visualiza o status da Migrations ex: se ja foi executado no banco ou se esta pendente
    php artisan migrate:status

-Remover todas a tabelas do banco
    php artisan migrate:reset

-Recriar o banco de dados limpo sem informaçoes
    php artisan migrate:refresh

-Deleta o banco e cria novamente
    php artisan migrate:fresh

----------------------------------------------------------------------------------------
Eloquent ORM

    [retorna todos os dados]
    all();
    orderBy('column','asc')->get();
    orderBy('column','desc')->get();
    orderBy('column','asc')->orderBy('column','desc')->get();

    [retorna um dado de acordo valor passado]
    find('valor(id)');

    [retorna os dados de acordo com a paramentro]
    where('column', 'operador', 'valor')->get();

    [retorna os dados de acordo com parametro e com array pode coloca mais de parametro]
    whereIn('column','[array valor]')->get();
    whereNotIn('column','[array valor]')->get();

    [retorna os dados de acordo com parametro com o array pode vai validar de um intervalo a outro ex: parans(1 , 4)->{1 2 3 4} ]
    whereBetween('column', [array valor])->get();
    whereNotBetween('column', [array valor])->get();

    [operador OU]
    orWhere('column', 'operador', 'valor')->get();

    [valor nulo]
    whereNull('column')->get();
    whereNotNull('column')->get();

    [valor tipo data]
    whereDate('column','valor')->get();
    whereDay('column','valor')->get();
    whereMonth('column','valor')->get();
    whereYear('column','valor')->get();
    whereTime('column', 'operador' ,'valor')->get();

    [retorna dados de acordo valores da colunas]
    whereColumn('column','operador','column')->get();

    [metodo para executar em grupo separado de outro]
    where(
        function($query){
            $query->where('column','valor')->orWhere('column','valor');
        }
    )->where(
        function($query){
            $query->whereIn('column',[array valor])->orWhereBetween('column',[array valor])
        }
    )->get();

----------------------------------------------------------------------------------------
Eloquent Collection

    $dados = valor::all();

    [recupera primeiro dado da lista]
    $dados->first();

    [recupera o ultimo dado da lista]
    $dados->last();

    [inverte a lista]
    $dados->reverse();

    [converte em array]
    $dados->toArray();

    [converte em Json]
    $dados->toJson();

    [retorna um atributo especifico de todos objetos da lista]
    $dados->all()->pluck('email');

    [retorna um atributo como valor e outro como chave ]
    $dados->all()->pluck('email','nome');
                         [valor]  [key]