<?php
// app/Http/Controllers/FeedBackController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Exception;

class FeedBackController extends Controller
{
    public function sendFeedBack(Request $request)
    {
        // Validação dos dados do formulário
        $feedback = $request->validate([
            'name' => 'required|max:255',
            'email' => 'nullable|email',
            'telefone' => 'nullable',
            'mensagem' => 'required'
        ]);
        
        // Adicionando manualmente o valor de 'tipo'
        $feedback['tipo'] = 1;
        
        try {
            Feedback::create($feedback);
        } catch (Exception $e) {
            return back()->with('error', 'Ocorreu um erro ao enviar o feedback. Por favor, tente novamente.');
        }
        
        Mail::to('contato@picapau.com')->send(new FeedbackReceived($feedback));
        return back()->with('success', 'Seu feedback foi enviado com sucesso!');

    }
}

