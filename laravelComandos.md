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
LARAVEL CRIA PROJETOS E DICAS

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
CONTROLLERS
-Criando um controller
	php artisan make:controller "nomeController"
    
-Criando controller com metodos e rotas ja pre definidas
    php artisan make:controller "nomeController" --resource

-Criando Controller com metodos junto com Model
    php artisan make:controller --resource "Nome"Controller --model "Nome"

-Criando MODEL CONTROLLER MIGRATE
    php artisan make:model --migrate --controller --resource "Nome"  
    php artisan make:model -mcr "Nome"

-Criando MODEL CONTROLLER MIGRATE FACTORY SEEDER ...
    php artisan make:model --all "Nome"
    php artisan make:model -a "Nome"

----------------------------------------------------------------------------------------
MODEL 
-Criando um Model
    	php artisan make:model "nome do Model"

-Criando um Model com Migrations
	php artisan make:model "nome" -m
 
----------------------------------------------------------------------------------------
MIGRATES "comandos utiliados para cria tabelas no banco de dados"

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
Eloquent ORM "Metodos"

    [Metodo de Salvar e Update]
    $dados->save();

    [Metodo que preeche o objeto , obs: para utiliza esse metodo e necessario que os campos sejam registrados no $fillable]
    $dados->fill(['campo'=>'value', 'campo2'=>'value', 'campo3'=>'value']);

    [Metodo para atualizar Diretamente]
    Tabela::whereIn('id',[1,2])->update(['column'=>'value', 'column'=>'value'])

    [Metodo de deletar]
    $dados->delete();
    Tabela::where('id','value')->delete()
    Tabela::destroy('id')

    [metodo delete permanente obs: quando usado softdelete na model e migrations , a funçoes de delete não deletam definitivamente os registros entap e utilizando este metodo]
    $dados->forceDelete();

    [metodo que recupera todos registros mesmos aqueles deletados com softDelete]
    Tabela::withTrashed()->get();

    [metodo que recupera apenas registros deletados softDelete]
    Tabela::onlyTrashed()->get();

    [metodo de restaurar o registro deletado pelo softDelete]
    $registros = Tabela::onlyTrashed()->get();
    $registros['posição do registro']->restore();

----------------------------------------------------------------------------------------
Eloquent ORM Condicionais "Medotos condicionais do Eloquent"

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
Eloquent Collection "São Array de Objetos recuperados do bando de dados"
>>>>>>> c2b7af313a30b595e7a73a5436570fae54e9036e

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

----------------------------------------------------------------------------------------
Seeders "São classes que tem a função de popular o banco de dados"

    [Criar uma classe seeder]
    php artisan make:seeder "Nome"Seeder

    [executar todas seeders]
    php artisan db:seed
    
    [executar uma seeder especifica]
    php artisan db:seed --class=classeSeeder

----------------------------------------------------------------------------------------
Factory "Classe responsavel por gerar dados em massa e passa para Seeders"

    [Criando uma classe Factory]
    php artisan make:factory ClasseFactory --model=classe

----------------------------------------------------------------------------------------
Midddleware
    [Criando uma Middleware]
    php artisan make:middleware "nome"Middleware

----------------------------------------------------------------------------------------
PAINEL 
-Instalando Painel AdminLTE 
    	composer require jeroennoten/laravel-adminlte
    	php artisan adminlte:install --force
----------------------------------------------------------------------------------------
LARAVEL UI
-Instalando Laravel ui
    composer require laravel/ui || outra versao ex: composer require laravel/ui:^3.2 

-Definir um tecnologia front para o Laravel com autenticação inclusa 
    php artisan ui "ex: bootstrap | vue | react" --auth

----------------------------------------------------------------------------------------
NodeJS & NPM 
    NPM e um gereciador de pacote ex: como se fosse composer , o Node e utilizado para FRONT-END [LAVAREL UI| VUE JS | ANGULAR] e BACK-END
    [Verificando versão do NODE e NPM]
    node -v
    npm -v

-Instalando NPM 
    npm install
    npm run dev