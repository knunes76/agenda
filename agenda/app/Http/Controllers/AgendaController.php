<?php

namespace App\Http\Controllers;

use App\Forms\AgendaForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agenda;

class AgendaController extends Controller
{
    public function index()
    {   
      
        $agenda = Agenda::all();
        
        return view('agenda.index', compact('agenda'));
    }
  
    public function create()
    {
         $form = \FormBuilder::create(AgendaForm::class, [
                    'url' => route('agenda.store'),
                    'method' => 'POST'
        ]);
       
        return view('agenda.create', compact('form'));
    }
  
    public function store(Request $request)
    {
        $form = \FormBuilder::create(AgendaForm::class);

        if (!$form->isValid()) {
            return redirect()
                            ->back()
                            ->withErrors($form->getErrors())
                            ->withInput();
        }

        $data = $form->getFieldValues();
        $agenda = new Agenda();
        $agenda->age_nome = $request->age_nome;
        $agenda->age_email = $request->age_email;
        $agenda->age_fone = $request->age_fone;
        $agenda->save();
        $request->session()->flash('message', 'Agenda criado com sucesso');
        return redirect()->route('agenda.index');
    }
  
    public function show(Agenda $agenda) {
         return view('agenda.show', compact('agenda'));
    }
  
    public function edit(Agenda $agenda) {
        $form = \FormBuilder::create(AgendaForm::class, [
                    'url' => route('agenda.update', ['agenda' => $agenda->age_id]),
                    'method' => 'PUT',
                    'model' => $agenda
        ]);

        return view('agenda.edit', compact('form'));
    }
  
    public function update(Agenda $agenda) {
        $form = \FormBuilder::create(AgendaForm::class,['data' => ['age_id' => $agenda->age_id]]);

        if (!$form->isValid()) {
            return redirect()   
                            ->back()
                            ->withErrors($form->getErrors())
                            ->withInput();
        }

        $data = $form->getFieldValues();
        $agenda->update($data);
        session()->flash('message', 'Agenda atualizada com sucesso');
        return redirect()->route('agenda.index');
    }
  
    public function destroy(Agenda $agenda) {
        $agenda->delete();
        session()->flash('message', 'Agenda excluída com sucesso');
        return redirect()->route('agenda.index');
    }
}
