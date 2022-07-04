@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.phone.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.phones.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.id') }}
                        </th>
                        <td>
                            {{ $phone->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.name') }}
                        </th>
                        <td>
                            {{ $phone->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.brand') }}
                        </th>
                        <td>
                            {{ $phone->brand->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.state') }}
                        </th>
                        <td>
                            {{ App\Models\Phone::STATE_RADIO[$phone->state] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.notes') }}
                        </th>
                        <td>
                            {!! $phone->notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.battery') }}
                        </th>
                        <td>
                            {{ $phone->battery }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.images') }}
                        </th>
                        <td>
                            @foreach($phone->images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.price') }}
                        </th>
                        <td>
                            {{ $phone->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.serial') }}
                        </th>
                        <td>
                            {{ $phone->serial }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.phones.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#phone1_swaps" role="tab" data-toggle="tab">
                {{ trans('cruds.swap.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#phone2_swaps" role="tab" data-toggle="tab">
                {{ trans('cruds.swap.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#phone_sales" role="tab" data-toggle="tab">
                {{ trans('cruds.sale.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="phone1_swaps">
            @includeIf('admin.phones.relationships.phone1Swaps', ['swaps' => $phone->phone1Swaps])
        </div>
        <div class="tab-pane" role="tabpanel" id="phone2_swaps">
            @includeIf('admin.phones.relationships.phone2Swaps', ['swaps' => $phone->phone2Swaps])
        </div>
        <div class="tab-pane" role="tabpanel" id="phone_sales">
            @includeIf('admin.phones.relationships.phoneSales', ['sales' => $phone->phoneSales])
        </div>
    </div>
</div>

@endsection