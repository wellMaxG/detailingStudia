@props(['name' => ''])

@error($name)
    
{{-- <div class="invalid-feedback" role="alert"> --}}
    <div class="small text-danger text-start pt-1">        

    <strong>{{ $message }}</strong>
    
</div>

@enderror