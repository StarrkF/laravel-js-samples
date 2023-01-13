@extends('index')
@section('content')
@include('pages.components.messages')
<div class="card shadow-lg">
    <div class="card-header"><h2 class="text-center">POSTS</h2></div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Content</th>
                <th scope="col">Priority</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->priority }}</td>
                        <td>
                            <a data-post="{{ $post->id }}" class="btn btn-outline-success cursor-pointer editPost"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@include('pages.modals.edit')     
@endsection
@section('js')
<script>

$('.editPost').click(function(){
    $('#postModal').modal('toggle')
    var id = $(this).data('post') 
    axios.get('posts/'+id)
    .then(response => {
       $('#post_id').val(response.data.id)
       $('#title').val(response.data.title)
       $('#slug').val(response.data.slug)
       $('#content').val(response.data.content)
       $('#priority').val(response.data.priority)
       $('#modal_title').html(response.data.title)
     })
})

</script>
@endsection