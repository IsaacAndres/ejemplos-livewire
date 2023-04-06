<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImageWithPreview extends Component
{
    use WithFileUploads; // Utiliza el trait para manejar la carga de archivos

    public $imgPath = '/storage/img/'; // Ruta  publica para las imágenes guardadas
    public $imgPathStorage = 'public/img/'; // Ruta para la carpeta de almacenamiento de imágenes
    public $user; // Instancia del modelo User
    public $userId; // ID del usuario actual
    public $image; // Imagen a subir
    
    // Método que se ejecuta al inicio del componente
    public function mount($id)
    {
        $this->userId = $id; // Asigna el ID del usuario a la propiedad $userId
    }

    // Método que se encarga de renderizar el componente
    public function render()
    {        
        // Busca el usuario con el ID proporcionado
        $this->user = User::findOrFail($this->userId);

        // Retorna la vista, utilizando el layout 'components.layout'
        return view('livewire.upload-image-with-preview')
            ->layout('components.layout');
    }

    // Método que se ejecuta al enviar el formulario de subida de imágenes
    public function updateImage()
    {
        // Valida que la imagen tenga un formato válido y no supere los 2MB
        $this->validate([
            'image' => 'image|max:2048',
        ]); 

        // Genera un nombre único para la imagen
        $imgName =  $this->image->getClientOriginalName();
        // Guarda la imagen en la carpeta de almacenamiento especificada en $imgPathStorage
        $img = Storage::putFileAs($this->imgPathStorage, $this->image, $imgName);

        // Actualiza la propiedad de imagen del modelo con la ruta completa de la imagen guardada
        $this->user->image = $this->imgPath . $imgName;
        $this->user->save(); // Guarda el modelo actualizado en la base de datos
        $this->image = null; // Limpia la propiedad de imagen para permitir subir otra imagen si se desea
    }
}
