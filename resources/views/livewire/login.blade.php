<form wire:submit='save' class="bg-white p-10  rounded shadow w-100" style="max-width: 400px;">

    <h2 class="text-center mb-4 font-bold text-xl">Login</h2>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label font-bold">Email</label>
        <input type="email"
            class="form-control  @error('email') is-invalid   @else  @if(!empty($email)) is-valid  @endif @enderror"
            id="exampleFormControlInput1"  placeholder="Email" wire:model.live='email' required>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="inputPassword6" class="form-label font-bold">Password</label>
        <input type="password" id="inputPassword6" class="form-control @error('password') is-invalid   @else  @if(!empty($password)) is-valid  @endif @enderror" aria-describedby="passwordHelpInline"
            placeholder="Password" wire:model.live='password' required>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-grid flex justify-center">
        <button type="submit"  wire:loading.attr='disabled' class="btn btn-primary w-40">Login</button>
    </div>
</form>