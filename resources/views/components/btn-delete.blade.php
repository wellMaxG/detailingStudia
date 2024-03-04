
<a {{ $attributes->class([

'btn btn-outline-danger',


    ])->merge([
    

        'type' => 'submit'
        
    
    ]) }}> {{ $slot }} </a>