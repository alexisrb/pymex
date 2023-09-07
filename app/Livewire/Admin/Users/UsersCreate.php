<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UsersCreate extends Component
{
    public $registrarPor = 'curp';
    public $user, $name, $email, $curp, $rfc, $estatus, 
            $fecha_de_ingreso, $numero_de_empleado, $codigo_del_pais, $numero_de_telefono, 
            $clv_electoral, $vigencia, $emision, $estado, $municipio, $seccion, $distrito, 
            $localidad, $tipo, $nivel_estudio, $agrupacion1, $agrupacion2;

    public function rules(){
        $array = [];
        $array['name'] = 'required|string|max:255';
        $array['email'] = ['required', 'string', 'email', 'max:255', Rule::unique(User::class)];
        $array['curp'] = ['required', 'string', 'min:18', 'max:18', 'unique:users,curp'];
        $array['rfc'] = ['required', 'string','max:255'];
        return $array;
    }

    public function save(){
        $this->validate();

        if(isset($this->codigo_del_pais) || isset($this->numero_de_telefono) && $this->codigo_del_pais != '' && $this->numero_de_telefono != ''){
            $whatsapp = $this->codigo_del_pais.$this->numero_de_telefono;
        }else{
            $whatsapp = null;
        }

        if($this->registrarPor == 'password'){
            $clave = $this->password;
        }else{
            $clave = $this->curp;
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'curp' => $this->curp,
            'rfc' => $this->rfc,
            'estatus' => 'Activo',
            'whatsapp' => $whatsapp,
            'numero_empleado' => $this->numero_de_empleado,
            'fecha_de_ingreso' => $this->fecha_de_ingreso,
            'password' => Hash::make($clave),
            'clv_electoral' => $this->clv_electoral, 
            'vigencia' => $this->vigencia, 
            'emision' => $this->emision, 
            'estado' => $this->estado, 
            'municipio' => $this->municipio, 
            'seccion' => $this->seccion, 
            'distrito' => $this->distrito,
            'localidad' => $this->localidad, 
            'tipo_usuario' => $this->tipo,
            'nivel_estudio' => $this->nivel_estudio, 
            'agrupacion1' => $this->agrupacion1, 
            'agrupacion2' => $this->agrupacion2
        ]);

        session()->flash('message', 'Empleado creado satisfactoriamente.');
        return redirect(route('admin.users.index'));
    }


    public function render()
    {
        return view('livewire.admin.users.users-create');
    }
}
