<div class="modal fade" id="edit-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{$title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click='close'></button>
        </div>
        <div class="modal-body">
          <form wire:submit='updateEdit({{$id}})'>
            <div class="mb-3">
              <label for="header" class="col-form-label">Header</label>
              <input type="text" class="form-control @error('header') is-invalid   @else  @if(!empty($header)) is-valid  @endif @enderror" id="header" placeholder="Input header..." wire:model.live='header'>
              @error('header')
                      <span class="text-danger">{{ $message }}</span>
                      @else
                      @if(!empty($header))
                          <span class="text-success">Good</span>
                      @endif
               @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="col-form-label">Upload Image</label>
              <input type="file" class="form-control @error('image') is-invalid   @else  @if(!empty($image)) is-valid  @endif @enderror"  accept="image/*" wire:model='newImage'>
              @error('image')
              <span class="text-danger">{{ $message }}</span>
             @enderror
              <div class="mt-2">
                @if ($newImage)
                <img src="{{ $newImage->temporaryUrl() }}" class="img-fluid rounded" style="max-height: 208px; margin: 21px auto 0px auto;">
            @elseif (!empty($image))
                <img src="{{ asset('uploads/' . $image) }}" class="img-fluid rounded" style="max-height: 208px; margin: 21px auto 0px auto;">
            @else
                <p class="text-muted">No image uploaded.</p>
            @endif
              </div>
            </div>
            <div class="mb-3">
              <label for="body" class="col-form-label">Body</label>
              <textarea class="form-control @error('body') is-invalid   @else  @if(!empty($body)) is-valid  @endif @enderror" id="body" placeholder="Input body..." wire:model.live='body'></textarea>
              @error('body')
              <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click='close'>Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
  
        </div>
      
      </div>
    </div>
  </div>
