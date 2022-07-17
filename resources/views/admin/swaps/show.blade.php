@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.swap.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.swaps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="invoice-logo">
                <img src="/images/gum-logo.png" class="w-30 h-30" alt="main_logo">
                
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.id') }}
                        </th>
                        <td>
                            {{ $swap->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.customer') }}
                        </th>
                        <td>
                            {{ $swap->customer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.phone_1') }}
                        </th>
                        <td>
                            {{ $swap->phone_1->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.phone_2') }}
                        </th>
                        <td>
                            {{ $swap->phone_2->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.price_diffrance') }}
                        </th>
                        <td>
                            {{ $swap->price_diffrance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.notes') }}
                        </th>
                        <td>
                            {!! $swap->notes !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.swaps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div>
                <div  class="social-links">
                    
                    <span>Gum21th/</span>
                    <i class="fa fa-twitter me-sm-1"></i>
                    <i class="fa fa-telegram me-sm-1"></i>
                    <i class="fab fa-tiktok me-sm-1"></i>
                    <i class="fa fa-instagram me-sm-1"></i>
                    <i class="fa fa-heart me-sm-1"></i>
                </div>
                <div class="whatsapp">
                    <span>0112196778</span>
                    <i class="fa fa-whatsapp me-sm-1"></i>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection