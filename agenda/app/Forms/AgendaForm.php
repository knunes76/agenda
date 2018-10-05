<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class AgendaForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('age_id');
        $this
            ->add('age_nome', 'text', [
                'label' => 'Nome:',
                'rules' => 'required|max:50'
            ])
            ->add('age_email', 'email', [
                'label' => 'Email:',
                'rules' => "required|max:50|unique:users,email,{$id}"
            ])
            ->add('age_fone', 'text', [
                'label' => 'Fone:',
                'rules' => "required|max:15"
            ]);
    }
}
