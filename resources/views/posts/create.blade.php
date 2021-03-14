@section('content')

<div class="row">
   <div class="col-md-6 col-md-offset-3">

   {{ Form::open(['route'=>'posts.store','method'=>'Post']) }}

   @include('post.form_master')

   {{ Form::close() }}
   </div>
</div>

@endsection