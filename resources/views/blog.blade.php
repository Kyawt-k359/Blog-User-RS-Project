<x-layout>
   <x-slot name='title'>
      <title>{{ $blog -> title}}</title>
    </x-slot>
  
  <article class="container">
   <h1>{{ $blog -> title}}</h1>
   <p class="text-gray" >{{ $blog -> body}} </p>
   <a href="/">Go Back Home</a>

    </article>


   </x-layout>

