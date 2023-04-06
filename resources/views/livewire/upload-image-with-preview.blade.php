<div>    
    <h1>Subida de imagen con vista previa</h1>

    <div class="card" style="width: 22rem;">
        <!-- Mostrar la imagen temporal si existe -->
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" >   
        <!-- Mostrar la imagen del usuario si existe -->         
        @elseif( isset( $user->image ) )
            <img src="{{ $user->image }}">
        <!-- Mostrar mensaje si no hay foto -->
        @else
            <p style="display: flex; width: 100%; justify-content: center;">Sube una foro de perfil</p>
        @endif

        <div class="card-body">
            <h5 class="card-title">{{ $user->email }}</h5>
            <!-- Input para subir imagen -->
            <input type="file" id="img" wire:model="image" accept="image/*">
            <!-- Mostrar mensaje de error si hay problema con la imagen -->
            @error('imagen')
                <p class="field-message-alert" style="color: red;font-size: 12px;">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="card-body">
            <!-- Botón para guardar la imagen si existe -->
            @if ($image)
                <a 
                    wire:click='updateImage' 
                    class='btn btn-success'
                    onclick="javascript:document.getElementById('img').value = '';"
                >
                    Guardar
                </a>
            @endif
        </div>
      </div>
    
</div>
