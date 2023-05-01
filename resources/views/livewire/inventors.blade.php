<div>
    
    <select  wire:model="invention">
        @foreach ($list as $k => $v)
            <option value="{{ $k }}">{{ $k }}</option>
        @endforeach
    </select>  invented by  
    {{$inventor}}
</div>
