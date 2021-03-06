<form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    Title:
    <input type="text" name="title" value="{{ $post->title }}">
    <br><br>
    Content:
    <textarea name="content" id="" cols="30" rows="10">{{ $post->content}}</textarea>
    <br><br>
    Image:
    <img width="60" src="{{ asset('storage/'.$post->img) }}" alt="">
    <input type="file" name="image">
    <button type="submit">Save</button>
    <button type="submit" formaction="{{ route('posts.delete', $post) }}">Delete</button>
</form>