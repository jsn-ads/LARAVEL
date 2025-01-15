==================================================INSTALAÇÃO==============================================


== 1.Composer :

    Baixe e instale Composer

    CMD raiz do projeto :

        @REM Inicializa o Composer 
        composer init
        
        @REM Atualiza as dependencias
        composer update

        @REM Visualiza versão
        composer --version

        @REM Caso ja tenha Composer instalado , atualizar a versão do composer :
        composer self-update

        @REM Rollback version anterior
        composer self-update --rollback

        @REM Rollback version especifica
        composer self-update "2.4.1"


============================================CRIANDO UM PROJETO============================================

== 1.INICIAR O PROJETO LARAVEL
        
        @REM Cria o Projeto na ultima versão do Laravel
        composer create-project --prefer-dist laravel/laravel "nome do projeto"

        @REM Cria o Projeto na versao especifica 
        composer create-project laravel/laravel:^"version ex:9.0" "nome do projeto"

==================================================START====================================================

== 1.Inicializando Projeto
    @REM Startando o projeto 
    php artisan serve

================================================ARTISAN====================================================

    @REM Startando o projeto 
    php artisan serve

    @REM Limpando cache
    php artisan cache:clear 

    @REM Criando um Controller
    php artisan make:controller "NomeController"

    @REM APP_KEY e uma key utilizada no projeto para validar sessões entre outros para não permitir inserção de arquivos externos
    php artisan key:generate

==========================================================================================================


2.INSTALAR O PACOTE UI

        composer require laravel/ui || outra versao ex: composer require laravel/ui:^3.2

3.GERAR O ESQUELETO DO PROJETO DE ACORDO COM A TECNOLOGIA FRONT-END

        php artisan ui "ex: bootstrap --auth | vue --auth | react" --auth

4.BAIXAR AS DEPENDENCIAS DO FRONT-END
        
        npm install

5.PRODUZINDO O BUNDLE DE FRONT-END
    
        npm run dev

    CASO TENHA ERRO :

        npm update vue-load

6.BAIXAR DEPENDENCIAS VUEEX (CASO UTILIZE VUE)
        
        npm install vuex || npm install vuex@3.6.2 (configuração estara na parte de npm)

==================================================DEBUG======================================================


LARAVEL DEBUG

-Instalando debuger no projeto

    composer require barryvdh/laravel-debugbar --dev || omposer require barryvdh/laravel-debugbar=v3.6.2 --dev

-Configurando no projeto

    config\app.php
         'aliases' => [
             'Debugbar' => Barryvdh\Debugbar\Facade::class
         ]

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

-Visualizando Rotas do projeto
php artisan route:list

-Limpando cash das views
php artisan view:clear

-Limpando cash de configuração
php artisan config:clear

-Console interativo para testes
php artisan tinker

---

CONTROLLERS

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

---

MODEL
-Criando um Model
php artisan make:model "nome do Model"

-Criando um Model com Migrations
php artisan make:model "nome" -m

---

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

---

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

---

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

---

Eloquent Collection "São Array de Objetos recuperados do bando de dados"

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

---

Seeders "São classes que tem a função de popular o banco de dados"

    [Criar uma classe seeder]
    php artisan make:seeder "Nome"Seeder

    [executar todas seeders]
    php artisan db:seed

    [executar uma seeder especifica]
    php artisan db:seed --class=classeSeeder

---

Factory "Classe responsavel por gerar dados em massa e passa para Seeders"

    [Criando uma classe Factory]
    php artisan make:factory ClasseFactory --model=classe

---

Midddleware
[Criando uma Middleware]
php artisan make:middleware "nome"Middleware

---

PAINEL
-Instalando Painel AdminLTE
composer require jeroennoten/laravel-adminlte
php artisan adminlte:install --force

---

LARAVEL UI
-Instalando Laravel ui
composer require laravel/ui || outra versao ex: composer require laravel/ui:^3.2

-Definir um tecnologia front para o Laravel com autenticação inclusa
php artisan ui "ex: bootstrap --auth| vue --auth | react" --auth

---

LARAVEL EMAIL
-Criando um controller especifico para email com view
php artisan make:mail "Nome do Controller ex: MensagemMail" --markdown "diretorio.nome ex: emails.mensagem"

---

LARAVEL PUBLISH
-Faz uma copia de uma biblioteda da pasta vendor para pasta publica para modificações no projeto
php artisan vendor:publish

---

LARAVEL NOTIFICATION
php artisan make:notification "nome"Notification

---

NodeJS & NPM
NPM e um gereciador de pacote ex: como se fosse composer , o Node e utilizado para FRONT-END [LAVAREL UI| VUE JS | ANGULAR] e BACK-END
[Verificando versão do NODE e NPM]
node -v
npm -v

-Instalando NPM
npm install
npm run dev
-Lista os pacotes e suas versoes e mostra se esta desatualizado
npm outdated
-Comando para atualizar automanticamente a pagina front
npm run watch

-Instalando VUE EX
npm install vuex || npm install vuex@3.6.2 (configuração estara na parte de npm)

-Inserindo VUE EX no projeto (obs: projeto ja deve ter definido LARAVEL UI vue)
[dentro de APP.JS]

    import Vue from 'vue';

    import Vuex from 'Vuex';

    Vue.use(Vuex)

    const store = new Vuex.Store({
        state:{}
    })

    inserir dentro de da instancia de app

    const app = new Vue({
        el: '#app',
        state
    });

---

LARAVEL EXCEL

-instalando no projeto
composer require maatwebsite/excel

ADICIONAR NO PROJETO
-inserindo dentro do projeto "app.config"
Providers[
Maatwebsite\Excel\ExcelServiceProvider::class,
]
Aliases[
'Excel' => Maatwebsite\Excel\Facades\Excel::class,
]
-instalando classe de configuração no projeto

    php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config

-Instalando classe e exportação

    php artisan make:export "Nome"Export --model='model que sera utilizado ex: "User.php"'

---

LARAVEL PDF (obs: esse modelo e preciso instalar Laravel excel)

-instalando no projeto
composer require mpdf/mpdf

ADICIONAR NO PROJETO

-inserindo dentro do projeto "excel.config"

    'pdf'   => Excel::MPDF,

---

LARAVEL PDF DOMPDF

-instalando no projeto
composer require barryvdh/laravel-dompdf=^0.9.0

-inserindo dentro do projeto "app.config"

        Providers[
            Barryvdh\DomPDF\ServiceProvider::class,
        ]

        Aliases[
    		'PDF' => Barryvdh\DomPDF\Facade::class,
    	]

-instalando classe de configuração no projeto
php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"

---

CRIANDO LINK do STORAGE para pasta PUBLIC
php artisan storage:link

---

INSTALANDO JWT

-instalado no projeto
composer require tymon/jwt-auth "1.0.2"

-inserindo dentro do projeto "app.config"
Providers[
Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
]
-ignorar requisitos da plataforma
composer require tymon/jwt-auth --ignore-platform-reqs

-criando arquivo config/jwt.php
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

-criando variavel JWT_SECRET dentro do arquivo .ENV
php artisan jwt:secret
