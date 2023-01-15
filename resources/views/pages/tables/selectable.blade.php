@extends('index')
@section('content')

<div class="my-2">
    <div class="dropright">
        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" >
          Show/Hide Column
        </button>
        
        <div class="dropdown-menu">
            <h6 class="dropdown-header">Select Column Name</h6>
            <label for="col1" class="dropdown-item">
                <input checked type="checkbox" id="col1" value="col1" class="select_column">
                ID
            </label>
          
            <label for="col2" class="dropdown-item">
                <input checked  type="checkbox" id="col2" value="col2" class="select_column">
                Title
            </label>
         
            <label for="col3" class="dropdown-item">
                <input checked type="checkbox" id="col3" value="col3" class="select_column">
                Slug
            </label>
        
            <label for="col4" class="dropdown-item">
                <input checked type="checkbox" id="col4" value="col4" class="select_column">
                Content
            </label>
         
            <label for="col5" class="dropdown-item">
                <input checked type="checkbox" id="col5" value="col5" class="select_column">
                Priority
            </label>
        </div>
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th class="col1" scope="col">ID</th>
        <th class="col2" scope="col">Title</th>
        <th class="col3" scope="col">Slug</th>
        <th class="col4" scope="col">Content</th>
        <th class="col5" scope="col">Priority</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th class="col1" scope="row">{{ $post->id }}</th>
            <td class="col2" >Mark {{ $post->title }}</td>
            <td class="col3" >Otto {{ $post->slug }}</td>
            <td class="col4" >Otto {{ $post->content }}</td>
            <td class="col5" >Otto {{ $post->priority }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection
@section('js')
<script>
    // $('#columns4').click(function(){
    //     // $(this).is(':checked') ? alert('checked') : alert('unchecked')
    //     $(this).is(':checked') ? $('.col4').attr('hidden',false) : $('.col4').attr('hidden',true)
    // })

    $(".dropdown-menu").click((event) => {
         event.stopPropagation()
        //  let url = event.target.href
         //Do something with the url or any other logic you wish
    })

    $('.select_column').click(function(){
        var t_class=$(this).val()
        $(this).is(':checked') ? $('.'+t_class).attr('hidden',false) : $('.'+t_class).attr('hidden',true)
    })
</script>    
@endsection