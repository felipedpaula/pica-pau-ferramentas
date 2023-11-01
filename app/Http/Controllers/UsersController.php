<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    private $dadosPagina;
    private $user;

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Todos os usuários';
        return view('cms.pages.users.index', $this->dadosPagina);
    }

    public function register() {
        $this->dadosPagina['tituloPagina'] = 'Registro de usuário';
        return view('cms.pages.users.register', $this->dadosPagina);
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        $rules = [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return redirect()->route('auth.register')
            ->withErrors($validator)
            ->withInput();
        }

        // try {
            $this->user = new User();
            $this->user->name = $data['name'];
            $this->user->email = $data['email'];
            $this->user->type_id = 1;
            $this->user->password = Hash::make($data['password']);
            $this->user->status = 1;
            $this->user->save();

            return redirect()->route('cms.pages.dashboard.index')->with('success', 'Professor criado com sucesso!');

        // } catch (\Exception $e) {
        //     return redirect()->route('register')->with('error', 'Ocorreu um erro ao criar o professor. Por favor, tente novamente.');
        // }

    }
}
