<x-layout>
      <x-slot name='title'>

            <title>All Blogs</title>

      </x-slot>

            <div>

                  @foreach($blogs as $blog)

                     <h1><a href="blogs/{{ $blog -> slug}}"> {{ $blog -> title}} - {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a></h1>
                 
                    <p class="text-gray" >{{ $blog -> body}} </p>
                    <p>Category - <a href="/categories/{{$blog->category->slug }}">{{ $blog->category->name }}</a></p>
                    
                    <p>Author - <a href="/users/{{$blog->user->id}}">{{ $blog->user->name }}</a></p>
                    
                    
                    @endforeach

                   </div>

      
  </x-layout>






 
 
 