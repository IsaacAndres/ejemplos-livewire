<?php

// Declaración del namespace donde se encuentra este componente
namespace App\Http\Livewire;

// Importar el modelo User y la clase Component de Livewire
use App\Models\User;
use Livewire\Component;

// Definición del componente InfiniteScroll que extiende de la clase Component
class InfiniteScroll extends Component
{
    // Propiedades públicas del componente
    public $users; // Almacenará la lista de usuarios que se mostrarán en la página
    public $step = 5; // Cantidad de usuarios que se agregarán cada vez que se carguen más usuarios
    public $amount = 5; // La cantidad de usuarios que se mostrarán inicialmente
    public $total; // La cantidad total de usuarios en la base de datos
    
    // La función mount() se ejecuta cuando se inicializa el componente
    public function mount()
    {
        // Obtener la cantidad total de usuarios en la base de datos
        $this->total = User::count();        

        // Validar la cantidad actual de usuarios a mostrar en la página
        $this->validateAmount();
    }

    // La función render() genera la salida HTML para el componente
    public function render()
    {
        // Obtener la lista de usuarios a mostrar en la página
        $this->users = User::take($this->amount)->orderBydesc('id')->get();

        // Devolver la vista correspondiente al componente
        return view('livewire.infinite-scroll');
    }

    // carga más usuarios
    public function load()
    {
        // Aumentar la cantidad de usuarios a mostrar en la página
        $this->amount += $this->step; 
        
        // Validar la cantidad actual de usuarios a mostrar en la página
        $this->validateAmount();
    }
    
    // Se asegura de que la cantidad actual de usuarios a mostrar no supere la cantidad total de usuarios en la base de datos
    public function validateAmount()
    {
        if ( $this->amount > $this->total) {
            // Establecer la cantidad actual de usuarios a mostrar igual a la cantidad total de usuarios en la base de datos
            $this->amount = $this->total;
        }
    }
}
