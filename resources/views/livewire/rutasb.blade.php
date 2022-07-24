<div>
    <form wire:submit.prevent="guardar">
        <div class="form-group">
          <label for="exampleInputEmail1">nombre ruta</label> 
          <br>
          <input type="text" class="form-control" placeholder="Enter email" wire:model="nom_ruta">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">salida</label> 
            <br>
            <input type="time" class="form-control" placeholder="Enter email" wire:model="inicio">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">destino</label> 
            <br>
            <input type="time" class="form-control" placeholder="Enter email" wire:model="fin">
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">hora salida/label> 
            <br>
            <input type="text" class="form-control" placeholder="Enter email" wire:model="nom_parada">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">hora destino</label> 
            <br>
            <input type="text" class="form-control" placeholder="Enter email" wire:model="nom_parada">
          </div> --}}
          <div class="form-group">
            <label for="exampleInputEmail1">paradas:</label> 
            <br>
            @foreach ($p as $index =>$item)
            <input type="checkbox" class="form-control" placeholder="Enter email" wire:model="id_parada.{{$index}}" >{{$item->nom_parada}}
            @endforeach
            
          </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
      </form>
</div>
