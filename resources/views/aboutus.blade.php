

   <h1>
    This is about
    </h1>

        
@php
    $name = ["san", "man", "pan"];
    $age = 21;
@endphp
        {{$age}}

       <ul>
         @foreach ($name as $n)

         <li>{{$n}}</li>
             
         @endforeach
       </ul>
      
