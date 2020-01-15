

@if (count($customers) > 0)
 @foreach ($customers as $cust)
 <ul>
     <li>
        {{$cust}}
     </li>
 </ul>
     
   
    @endforeach
  
@else
    No customers yet.......
@endif

