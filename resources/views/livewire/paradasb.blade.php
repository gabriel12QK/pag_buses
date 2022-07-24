<div>
    <form wire:submit.prevent="guardar">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label> 
          <br>
          <input type="text" class="form-control" placeholder="Enter email" wire:model="nom_parada">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
      </form>
</div>

