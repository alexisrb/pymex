<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    public $sort = 'id';
    public $direction = 'desc';
    public $user, $name, $foto;
    public $searchId, $searchNumero, $searchName, $searchEstatus;
    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function updatedorder($order){
        if($order == 1){
            $this->direction = 'asc';
        }
        switch($order){
            case 1:
                $this->sort = 'id';
                $this->direction = 'desc';
            break;
            case 2:
                $this->sort = 'id';
                $this->direction = 'asc';
            break;
            case 3:
                $this->sort = 'número_de_empleado';
                $this->direction = 'asc';
            break;
            case 4:
                $this->sort = 'número_de_empleado';
                $this->direction = 'desc';
            break;
            case 5:
                $this->sort = 'name';
                $this->direction = 'asc';
            break;
            case 6:
                $this->sort = 'name';
                $this->direction = 'desc';
            break;
        }
    }

    public function render()
    {
        $users = User::where('tipo_usuario', 'Empleado')
        ->when($this->searchId, function($query){
            $query->where('id', $this->searchId);
        })
        ->when($this->searchNumero, function($query){
            $query->where('numero_de_empleado', 'LIKE', '%' . $this->searchNumero . '%');
        })
        ->when($this->searchName, function($query){
            $query->where('name', 'LIKE', '%' . $this->searchName . '%');
        })
        ->when($this->searchEstatus, function($query){
            $query->where('estatus', 'LIKE', '%' . $this->searchEstatus . '%');
        })
        ->orderBy($this->sort, $this->direction)
        ->latest('id')
        ->paginate();


        return view('livewire.admin.users.users-index', ['users' => $users]);
    }
}
