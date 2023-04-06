<div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>      
            @empty
                <tr><td colspan="3">No hay usuarios.</td></tr>
            @endforelse                 
        </tbody>
    </table>

    <div style="display: flex;justify-content: center;">
        <!-- Mostrar un mensaje de "Cargando..." mientras se están cargando más usuarios -->
        <div wire:loading>Cargando...</div>        

        <!-- Mostrar un enlace para cargar más usuarios si aún hay más usuarios disponibles -->
        <div wire:loading.remove>
            @if ( $total == $amount)
            <small>No hay más usuarios</small>        
            @else
            <!-- El atributo wire:click se utiliza para definir una acción que se ejecutará cuando se haga clic en el enlace -->
            <a wire:click="load" class="enlace" style="cursor: pointer;">
                Ver más usuarios <img src="/public/web/imagenes/i-angle-enlace.svg" alt="">
            </a>
            @endif
        </div>
    </div>
    
    <!-- Mostrar la cantidad actual de usuarios y la cantidad total de usuarios disponibles -->
    <span style="display: flex;justify-content: center;">Mostrando {{$amount}} de {{$total}} usuarios</span>

</div>