<div>
    <fieldset class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="estado">Pertenece a</label>
                <select 
                    wire:model="selectedOrganigrama" 
                    wire:change="updateOptions"
                    name="jerarquia" class="form-control" style="width: 100%"
                >
                    <option value="">-- Seleccione --</option>   
                    @foreach ($opcOrganigrama as $item)
                        <option value="{{$item->id}}" {{ old('jerarquia') == $item->id ? 'selected' : '' }}>
                            {{$item->nombre}}
                        </option>               
                    @endforeach
                </select>
                @error('jerarquia')
                    <p class="field-message-alert"> {{ $message }}</p>
                @enderror
            </div>        
        </div>
    </fieldset>

    <small wire:loading>cargando...</small>
    <x-form.select title="{{$selectedOrganigramaName}}" name="organigrama"> 
        <x-slot name="options">      
           <option value="" {{ empty(old('subgerencia')) || empty($selectedOpt) ? 'selected' : '' }}>-- Seleccione --</option>      
           @foreach ($opciones as $item)
            <option value="{{$item->id}}" {{ $selectedOpt == $item->id ? 'selected' : '' }}>{{$item->nombre}}</option>               
           @endforeach
        </x-slot>
     </x-form.select>
    
</div>
