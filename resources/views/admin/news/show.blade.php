@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.news.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.id') }}
                        </th>
                        <td>
                            {{ $news->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.title') }}
                        </th>
                        <td>
                            {{ $news->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.short_description') }}
                        </th>
                        <td>
                            {{ $news->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.long_description') }}
                        </th>
                        <td>
                            {{ $news->long_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.photo') }}
                        </th>
                        <td>
                            @if($news->photo)
                                <a href="{{ $news->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $news->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.date') }}
                        </th>
                        <td>
                            {{ $news->date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection