<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Livewire Ejemplos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('post_infinite') }}">Infinite scroll</a>
        </li>        

        <li class="nav-item">
          <a class="nav-link" href="{{ route('upload_image', 1) }}">Upload Image</a>
        </li>        
        
      </ul>
    </div>
</nav>