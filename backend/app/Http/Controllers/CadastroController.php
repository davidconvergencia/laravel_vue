<?php

namespace App\Http\Controllers;

use App\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    private $response;
    private $data =[];

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function dados(Request $request)
    {

        try {
            $data = $this->data['pessoal']?? null;

            dd($this->data['pessoal']);

            $response = $this->pessoal($request);
            if($response->getStatus() == 'error'){
                //colocar aqui a trativa
            }

            $response = $this->filiacao($request);
            if($response->getStatus() == 'error'){
                //colocar aqui a trativa
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function pessoal($request)
    {

        try {




            /** validação **/
            $validator = Validator::make($request->all(), [
                'nome' => 'required|max:255',
                'cpf' => [
                    'required',
                    'regex:/^\d{3}\.\d{3}\.\d{3}-\d{2}$/',
                ],
                'sexo' => 'required|max:11',
                'nacionalidade' => 'required|max:11',
                'rg' => 'required|max:11',
                'orgaoEmissor' => 'required|max:11',
                'dataEmissao' => [
                    'required',
                    'date_format:Y-m-d',
                ],
                'municipioNascimento' => 'required|max:11',
                'ufNascimento' => 'required|max:11',
                'estadoCivil' => 'required|max:11',
                'qntFilhos' => 'required|integer',
                'telefoneFixo' => [
                    'required',
                ],
                'telefoneMovel' => [
                    'required',
                ],
                'telefoneRecado' => [
                    'required',
                ],
                'email' => 'required|email|max:255',
            ]);
            if ($validator->fails()) {
                return $this->response->message($validator->messages()->all())->status('er');
            }

            $this->data->pessoal = $request;

            return $this->response;

        } catch (\Exception $e) {
            return $this->response->message($e->getMessage())->status('er');
        }
    }


    public function filiacao($request)
    {
        try {
            /** validação **/
            $validator = Validator::make($request->only('pessoal'), [
                'filiacao.nome_mae' => 'required|max:255',
                'filiacao.nome_pai' => 'required|max:255',
            ]);

            if ($validator->fails()) {
                return $this->response->message($validator->messages()->all())->status('er');
            }

            /** PERSISTIR AQUI **/
            /** ============== **/

            return $this->response;
        } catch (\Exception $e) {
            return $this->response->message($e->getMessage())->status('er');
        }
    }

    public function residencia($request)
    {
        try {
            /** validação **/
            $validator = Validator::make($request->only('pessoal'), [
                'filiacao.nome_mae' => 'required|max:255',
                'filiacao.nome_pai' => 'required|max:255',
            ]);

            if ($validator->fails()) {
                return $this->response->message($validator->messages()->all())->status('er');
            }

            /** PERSISTIR AQUI **/
            /** ============== **/

            return $this->response;
        } catch (\Exception $e) {
            return $this->response->message($e->getMessage())->status('er');
        }
    }
}
