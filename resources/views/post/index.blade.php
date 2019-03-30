<ul>
    @foreach ($posts as $post)
    <li>  <a href="{{route('posts.edit', $post) }}">
    {{$post -> title}}</a></li>
    <li>{{$post -> content}}</li>
    <li><img width="100" src="{{asset ('storage/'.$post->img)}}" alt="">
    </li>
    @endforeach
</ul>

<a href = "{{route('posts.create')}}">Add post</a>