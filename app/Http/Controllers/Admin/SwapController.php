<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySwapRequest;
use App\Http\Requests\StoreSwapRequest;
use App\Http\Requests\UpdateSwapRequest;
use App\Models\Customer;
use App\Models\Phone;
use App\Models\Swap;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SwapController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('swap_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $swaps = Swap::with(['customer', 'phone_1', 'phone_2'])->get();

        $customers = Customer::get();

        $phones = Phone::get();

        return view('admin.swaps.index', compact('customers', 'phones', 'swaps'));
    }

    public function create()
    {
        abort_if(Gate::denies('swap_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phone_1s = Phone::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phone_2s = Phone::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.swaps.create', compact('customers', 'phone_1s', 'phone_2s'));
    }

    public function store(StoreSwapRequest $request)
    {
        $swap = Swap::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $swap->id]);
        }

        return redirect()->route('admin.swaps.index');
    }

    public function edit(Swap $swap)
    {
        abort_if(Gate::denies('swap_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phone_1s = Phone::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $phone_2s = Phone::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $swap->load('customer', 'phone_1', 'phone_2');

        return view('admin.swaps.edit', compact('customers', 'phone_1s', 'phone_2s', 'swap'));
    }

    public function update(UpdateSwapRequest $request, Swap $swap)
    {
        $swap->update($request->all());

        return redirect()->route('admin.swaps.index');
    }

    public function show(Swap $swap)
    {
        abort_if(Gate::denies('swap_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $swap->load('customer', 'phone_1', 'phone_2');

        return view('admin.swaps.show', compact('swap'));
    }

    public function destroy(Swap $swap)
    {
        abort_if(Gate::denies('swap_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $swap->delete();

        return back();
    }

    public function massDestroy(MassDestroySwapRequest $request)
    {
        Swap::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('swap_create') && Gate::denies('swap_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Swap();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
