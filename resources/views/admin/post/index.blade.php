@extends('admin.layout')

@section('content')
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="row">
        <div class="col-md-6">
            <h3>Posts <small>» Listing</small></h3>
        </div>
            <div class="col-md-6 text-right">
                <a href="/admin/post/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New Post
                </a>
            </div>
        </div>

        <div class="container-fluid">
            <!-- START DATATABLE -->
            <div class="row">
                <div class="col-lg-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            @include('admin.partials.errors')
                            @include('admin.partials.success')
                        </div>
                        <div class="panel-body">
                           <table id="posts-table" class="table table-striped table-hover">
                              <thead>
                                 <tr>
                                    <th>Published</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th data-sortable="false">Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                  <td data-order="{{ $post->published_at->timestamp }}">
                                    {{ $post->published_at->format('j-M-y g:ia') }}
                                  </td>
                                  <td>{{ $post->title }}</td>
                                  <td>{{ $post->subtitle }}</td>
                                  <td>
                                    <a href="/admin/post/{{ $post->id }}/edit" class="btn btn-xs btn-info">
                                      <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a href="/article/{{ $post->slug }}" class="btn btn-xs btn-warning">
                                      <i class="fa fa-eye"></i> View
                                    </a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            <!-- END DATATABLE 1 -->
        </div>
    </div>
</section>
@stop

@section('scripts')
<script>
    $(function() {
        $("#posts-table").DataTable({
            order: [[0, "desc"]]
        });
    });
</script>
@stop
