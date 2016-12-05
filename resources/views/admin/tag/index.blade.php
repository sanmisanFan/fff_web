@extends('admin.layout')

@section('content')
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="row">
        <div class="col-md-6">
            <h3>Tags <small>» Listing</small></h3>
        </div>
            <div class="col-md-6 text-right">
                <a href="/admin/tag/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New Tag
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
                           <table id="tags-table" class="table table-striped table-hover">
                              <thead>
                                 <tr>
                                    <th>Tag</th>
                                    <th>Title</th>
                                    <th class="hidden-sm">Subtitle</th>
                                    <th class="hidden-md">Page Image</th>
                                    <th class="hidden-md">Meta Description</th>
                                    <th class="hidden-md">Layout</th>
                                    <th class="hidden-sm">Direction</th>
                                    <th data-sortable="false">Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->tag }}</td>
                                        <td>{{ $tag->title }}</td>
                                        <td class="hidden-sm">{{ $tag->subtitle }}</td>
                                        <td class="hidden-md">{{ $tag->page_image }}</td>
                                        <td class="hidden-md">{{ $tag->meta_description }}</td>
                                        <td class="hidden-md">{{ $tag->layout }}</td>
                                        <td class="hidden-sm">
                                        @if ($tag->reverse_direction)
                                            Reverse
                                        @else
                                            Normal
                                        @endif
                                        </td>
                                        <td>
                                            <a href="/admin/tag/{{ $tag->id }}/edit" class="btn btn-xs btn-info">
                                                <i class="fa fa-edit"></i> Edit
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
            $("#tags-table").DataTable({
            });
        });
    </script>
@stop