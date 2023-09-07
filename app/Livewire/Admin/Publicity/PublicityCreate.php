<?php

namespace App\Livewire\Admin\Publicity;

use App\Models\Publicity;
use App\Models\User;
use Livewire\Component;

class PublicityCreate extends Component
{
    public $alias, $foto, $id, $id_fiscal, $tipo, $cordenada, $direccion, $colonia, $ciudad, $estado;

    public function rules(){
        $array = [];
        $array['id'] = ['required'];
        $array['id_fiscal'] = ['required'];
        $array['alias'] = ['required'];
        $array['tipo'] = ['required'];
        return $array;
    }

    public function save(){
        $this->validate();

        $publicity = Publicity::create([
            'id_espectacular' => $this->id,
            'numero_fiscalizacion' => $this->id_fiscal,
            'alias' => $this->alias,
            'tipo' => $this->tipo,
            'google_data' => $this->cordenada,
            'direccion' => $this->direccion,
            'colonia' => $this->colonia,
            'ciudad' => $this->ciudad,
            'estado' => $this->estado,
        ]);

        session()->flash('message', 'Yarda / Espectacular creado satisfactoriamente.');
        return redirect(route('admin.publicity.index'));
    }   

    public function render()
    {
        $users = User::where('estatus', 'Activo')->where('tipo_usuario', 'Empleado')->get();
    
        return view('livewire.admin.publicity.publicity-create', ['users' => $users]);
    }
}
