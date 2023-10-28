{{-- <div class="card text-bg-dark my-4" {{ $attributes }}>

    {{ $slot }}

</div> --}}


<div {{ $attributes->class([
    

    ])->merge([
    
        'class' => 'card text-bg-dark my-2 ',
        
    
    ]) }}> {{ $slot }} </div>