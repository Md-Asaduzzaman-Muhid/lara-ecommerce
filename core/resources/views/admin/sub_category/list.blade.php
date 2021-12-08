@extends('admin.layouts.app')

@section('panel')

    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body">
                @foreach($categories as $category)
                    <h6 class="page-title btn--primary p-2 border-bottom">{{$category->title}}</h6>
                    @if($category->subCategories)
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                                <tr>
                                    <th>@lang('Thumbnil')</th>
                                    <th>@lang('Title')</th>
                                    <th>@lang('Description')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($category->subCategories as $subCategory)
                                <tr>
                                    <td class="catThum"  data-label="@lang('Thum')" style="background-image: url('{{getImage(imagePath()['category']['image']['path'].'/'. $subCategory->image,imagePath()['category']['image']['path'])}}')">
                                    </td>
                                    <td data-label="@lang('Title')">
                                        {{ __($subCategory->title) }}
                                    </td>
                                    <td data-label="@lang('Description')">
                                        {{ __(shortDescription($subCategory->description)) }}
                                    </td>


                                    <td data-label="@lang('Status')">
                                        @if($subCategory->status == 1)
                                            <span class="text--small badge font-weight-normal badge--success">@lang('Active')</span>
                                        @else
                                            <span class="text--small badge font-weight-normal badge--warning">@lang('Disabled')</span>
                                        @endif
                                    </td>
                                    <td data-label="@lang('Action')">
                                        <a href="{{ route('admin.sub_category.edit', $subCategory->id) }}" class="icon-btn editGatewayBtn" data-toggle="tooltip" title="" data-original-title="@lang('Edit')">
                                            <i class="la la-pencil"></i>
                                        </a>
                                        @if($subCategory->status == 0)
                                            <button data-toggle="modal" data-target="#activateModal" class="icon-btn bg--success ml-1 activateBtn" data-id="{{$subCategory->id}}" data-title="{{__($subCategory->title)}}" data-original-title="@lang('Activate')">
                                                <i class="la la-eye"></i>
                                            </button>
                                        @else
                                            <button data-toggle="modal" data-target="#deactivateModal" class="icon-btn bg--danger ml-1 deactivateBtn" data-id="{{$subCategory->id}}" data-title="{{__($subCategory->title)}}" data-original-title="@lang('Deactivate')">
                                                <i class="la la-eye-slash"></i>
                                            </button>
                                        @endif
                                        <button  data-toggle="modal" class="icon-btn bg--danger deleteBtn" data-target="#deleteModal" data-id="{{$subCategory->id}}" data-original-title="@lang('Delete')">
                                            <i class="la la-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table><!-- table end -->
                    </div>
                    @endif
                    @endforeach
                </div>
            </div><!-- card end -->
        </div>

    </div>


    @push('breadcrumb-plugins')
        <a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.sub_category.create') }}"><i class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
    @endpush
    {{-- ACTIVATE METHOD MODAL --}}
    <div id="activateModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Sub Category Activation Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.sub_category.activate')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p>@lang('Are you sure to activate') <span class="font-weight-bold method-name"></span> @lang('method')?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>

                        <button type="submit" class="btn btn--primary">@lang('Activate')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- DEACTIVATE METHOD MODAL --}}
    <div id="deactivateModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Sub Category Disable Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.sub_category.deactivate')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p>@lang('Are you sure to deactivate') <span class="font-weight-bold method-name"></span> @lang('method')?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn--danger">@lang('Disable')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- DELETE MODAL --}}
    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Sub Category Delete Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.sub_category.delete')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p>@lang('Are you sure to delete') <span class="font-weight-bold method-name"></span> @lang('method')?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn--danger">@lang('Delete')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        (function ($) {
            "use strict"
            $(document).on('click','.activateBtn',function () {
                var modal = $('#activateModal');
                modal.find('.method-title').text($(this).data('title'));
                modal.find('input[name=id]').val($(this).data('id'));
            });

            $(document).on('click','.deactivateBtn',function () {
                var modal = $('#deactivateModal');
                modal.find('.method-title').text($(this).data('title'));
                modal.find('input[name=id]').val($(this).data('id'));
            });
            $(document).on('click','.deleteBtn',function () {
                var modal = $('#deleteModal');
                modal.find('input[name=id]').val($(this).data('id'));
            });
        })(jQuery);
    </script>
@endpush
