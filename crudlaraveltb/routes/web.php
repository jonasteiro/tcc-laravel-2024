<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitacoesController;
use App\Http\Controllers\MailController;

Route::get('send-mail', [MailController::class, 'index']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        
    });
        
        Route::group(['middleware' => ['auth']], function() {
            Route::get("/produtos",
                "ProdutosController@index")->name("produtos.index");
            Route::get("/produtos/create",
                "ProdutosController@create")->name("produtos.create");
            Route::post("/produtos/create",
                "ProdutosController@store")->name("produtos.store");
            Route::delete('/produtos/{produto}/delete', 'ProdutosController@destroy')->name('produtos.destroy');
            Route::get('/produtos/{produto}/show', 'ProdutosController@show')->name('produtos.show');
            Route::get('/produtos/{produto}/edit', 'ProdutosController@edit')->name('produtos.edit');
            Route::patch('/produtos/{produto}/update', 'ProdutosController@update')->name('produtos.update');
            
            Route::get("/usuarios", "UsuariosController@index")->name("usuarios.index");
            Route::get("/usuarios/create", "UsuariosController@create")->name("usuarios.create");
            Route::post("/usuarios/create", "UsuariosController@store")->name("usuarios.store");
            Route::delete('/usuarios/{user}/delete', 'UsuariosController@destroy')->name('usuarios.destroy');
            Route::get('/usuarios/{user}/show', 'UsuariosController@show')->name('usuarios.show');
            Route::get('/usuarios/{user}/edit', 'UsuariosController@edit')->name('usuarios.edit');
            Route::patch('/usuarios/{user}/update', 'UsuariosController@update')->name('usuarios.update'); 
            Route::get("/usuarios/pdf", "UserPDFController@gerarPDF")->name("usuarios.pdf");
            
            Route::get('/professores', 'ProfessoresController@index')->name('professores.index');
            Route::get('/professores/{professor}/mail', 'MailController@index')->name('professoresMail.index');
            Route::get('/professores/create', 'ProfessoresController@create')->name('professores.create');
            Route::post('/professores/create', 'ProfessoresController@store')->name('professores.store');
            Route::get('/professores/{professor}/show', 'ProfessoresController@show')->name('professores.show');
            Route::get('/professores/{professor}/edit', 'ProfessoresController@edit')->name('professores.edit');
            Route::patch('/professores/{professor}/update', 'ProfessoresController@update')->name('professores.update');
            Route::delete('/professores/{professor}/delete', 'ProfessoresController@destroy')->name('professores.destroy');
            
            Route::get('/disciplinas', 'DisciplinasController@index')->name('disciplinas.index');
            Route::get('/disciplinas/create', 'DisciplinasController@create')->name('disciplinas.create');
            Route::post('/disciplinas/create', 'DisciplinasController@store')->name('disciplinas.store');
            Route::get('/disciplinas/{disciplina}/show', 'DisciplinasController@show')->name('disciplinas.show');
            Route::get('/disciplinas/{disciplina}/edit', 'DisciplinasController@edit')->name('disciplinas.edit');
            Route::patch('/disciplinas/{disciplina}/update', 'DisciplinasController@update')->name('disciplinas.update');
            Route::delete('/disciplinas/{disciplina}/delete', 'DisciplinasController@destroy')->name('disciplinas.destroy');
            Route::get("/disciplinas/{professor_id}/pdf", "DisciplinaPDFController@gerarPDF")->name("disciplinas.pdf");
            
            Route::get('/disciplinasProfessores', 'DisciplinasProfessoresController@index')->name('disciplinasProfessores.index');
            Route::get('/disciplinasProfessores/create', 'DisciplinasProfessoresController@create')->name('disciplinasProfessores.create');
            Route::post('/disciplinasProfessores/create', 'DisciplinasProfessoresController@store')->name('disciplinasProfessores.store');
            Route::get('/disciplinasProfessores/{disciplinasProfessores}/show', 'DisciplinasProfessoresController@show')->name('disciplinasProfessores.show');
            Route::get('/disciplinasProfessores/{disciplinasProfessores}/edit', 'DisciplinasProfessoresController@edit')->name('disciplinasProfessores.edit');
            Route::patch('/disciplinasProfessores/{disciplinasProfessores}/update', 'DisciplinasProfessoresController@update')->name('disciplinasProfessores.update');
            Route::delete('/disciplinasProfessores/{disciplinasProfessores}/delete', 'DisciplinasProfessoresController@destroy')->name('disciplinasProfessores.destroy');
            Route::get("/disciplinasProfessores/pdf", "DisciplinaProfessorPDFController@gerarPDF")->name("disciplinasProfessores.pdf");
            
            //Rotas das Ocorrências
            Route::get("/ocorrencias","OcorrenciasController@index")->name("ocorrencias.index");


            //Rotas da Enfermaria
            Route::get("/enfermaria","EnfermariaController@index")->name("enfermaria.index");

            //Rotas das Mensagens
            Route::get("/mensagens","MensagensController@index")->name("mensagens.index");

            
            Route::resource("/solicitacoes",
                SolicitacoesController::class);
                        
            /**
             * Logout Routes
             */
            Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        });
});
