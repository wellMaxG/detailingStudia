{{-- <button type="submit" class="btn btn-outline-secondary custom-border" {{ $attributes }}>

    {{ $slot }}

</button> --}}

<button {{ $attributes->class([
    
    ])->merge([
        
        'class' => 'btn btn-outline-success custom-border',
    
            'type' => 'submit'
        
        ]) }}> {{ $slot }} </button>