@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fas fa-arrow-left">&nbsp;&nbsp;</i>Back</a>
        <div class="col-6 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('herbal.update', $data->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h5 class="modal-title" id="exampleModalLabel">{{ __("Edit") }}</h5>

                        <div class="form-group">
                            <label for="examplePercentage">{{ __('Language') }}</label>
                            <select name="lang" class="form-control select2" style="width: 100%" required>
                                <option value="tm" @if($data->lang === 'tm') selected  @endif>Tm</option>
                                <option value="ru" @if($data->lang === 'ru') selected  @endif>Ru</option>
                                <option value="en" @if($data->lang === 'en') selected  @endif>En</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input type="text" id="title" class="form-control" name="title" value="{{ $data->title }}" placeholder="{{ __('Title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" class="content" name="description">{!! $data->description !!}</textarea>
                        </div>
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-primary d-inline-block">{{ __("Edit") }}</button>
                </div>

                </form>
            </div>
        </div>

    </div>
@endsection

