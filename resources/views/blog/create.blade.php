@extends('layouts.author')
    @section('css')
        <link href="{{ asset('authored/plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('authored/plugins/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('authored/plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
        <!-- page css -->
        <link href="{{ asset('authored/assets/css/pages/file-upload.css') }}" rel="stylesheet">
    @endsection
    @section('content')
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-25">checkboxes, radios & switches</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <div class="row m-t-30 p-r-20  p-l-20">
                            {{--<form action="" class="form">--}}
                            {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group">
                                    <div class="">
                                        {{--<input class="form-control wid" type="text" placeholder="Title">--}}
                                        {{ form::text('title', 'Title',['class' => 'form-control wid']) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{--<div class="">--}}
                                        {{--<select class="custom-select wid" id="inlineFormCustomSelect">--}}
                                            {{--<option selected="">Choose Tag</option>--}}
                                            {{--@foreach($tags as $tag)--}}
                                                {{--<option value="$tag->id" name="tag">{{ $tag->id }}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                        {{--{{ form::select('tag_id', $tags, null, ['class' => 'custom-select wid']) }}--}}
                                        {{--<br>--}}
                                        <div class="wid" style="margin-top: 5px;">
                                            <input type="text" value="" name="tags" data-role="tagsinput" placeholder="add tags"/>
                                        </div>
                                    {{--</div>--}}
                                </div>
                                {{--<input type="text" id="article-ckeditor">--}}
                                {{ form::textarea('description', '', ['id' => 'article-ckeditor']) }}
                                <div class="upload-btn-wrapper">
                                    <button class="btn-upload">Upload a file</button>
                                    {{ form::file('image') }}
                                </div>
                                {{ Form::submit('submit',['class' => 'btn btn-primary btn-md submit-btn']) }}
                                {!! Form::close() !!}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    @endsection
    @section('js')
        <!-- ============================================================== -->
        <script src="{{ asset('authored/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('authored/plugins/vendors/switchery/dist/switchery.min.js') }}"></script>
        <script>
            $(function () {
// Switchery
                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                $('.js-switch').each(function () {
                    new Switchery($(this)[0], $(this).data());
                });

            });
        </script>
        <!-- Style switcher -->
        <script src="{{ asset('authored/plugins/vendors/styleswitcher/jQuery.style.switcher.js') }}"></script>
    @endsection