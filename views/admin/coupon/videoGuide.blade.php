@extends('layouts.adminapp')

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-film"></i> Add Video Guide</h3>
                    <a href="{{ url('admin/guide/video/show') }}" class="btn btn-warning pull-right">Cancel</a>
                </div>
                <!-- /.box-header -->

                <form class="form-horizontal" role="form" method="POST" id="admin_login" action="{{ url('/admin/guide/video/add') }}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                            {{ csrf_field() }}
                            <!-- text input -->
                                <div class="form-group{{ $errors->has('video_link') ? ' has-error' : '' }}">
                                    <label for="video_link" class="col-sm-2 control-label">Video Link<span style="color: red;"> *</span></label>
                                    <div class="col-sm-10">
                                        <small>Insert Url like : https://www.youtube.com/embed/tgbNymZ7vqY</small>
                                        <input type="text" class="form-control" id="video_link" name="video_link" value="{{ old('video_link') }}">
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
@endsection