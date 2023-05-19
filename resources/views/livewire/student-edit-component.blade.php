<div>
    <div class="col-md-8 mt-5 m-auto">
        <form wire:submit.prevent='updateStudent()'>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="nameHelp" wire:model='name'>
              @error('name') <span class="text-danger">{{ $message }}</span>  @enderror

              
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
