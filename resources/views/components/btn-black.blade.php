{{-- <a class="btn btn-dark custom-border" {{ $attributes }}>

    {{ $slot }}

</a> --}}

<a {{ $attributes->class([
    
    ])->merge([
        
        'class' => 'btn btn-dark custom-border',            
        
        ]) }}> {{ $slot }} </a>