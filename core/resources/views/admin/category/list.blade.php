@extends('admin.layouts.app')

@section('panel')
    <div class="row">

        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body">
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
                            @forelse($categories as $category)
                                <tr>
                                    <td data-label="@lang('Gateway')">
                                        <div class="user">
                                           <span class="name">{{__($category->title)}}</span>
                                        </div>
                                    </td>

                                    <td data-label="@lang('Supported Currency')">
                                        {{ $category->title }}
                                    </td>
                                    <td data-label="@lang('Enabled Currency')">
                                        {{ $category->description }}
                                    </td>


                                    <td data-label="@lang('Status')">
                                        @if($category->status == 1)
                                            <span class="text--small badge font-weight-normal badge--success">@lang('Active')</span>
                                        @else
                                            <span class="text--small badge font-weight-normal badge--warning">@lang('Disabled')</span>
                                        @endif
                                    </td>
                                    <td data-label="@lang('Action')">
                                        <a href="{{ route('admin.category.edit', $category->id) }}" class="icon-btn editGatewayBtn" data-toggle="tooltip" title="" data-original-title="@lang('Edit')">
                                            <i class="la la-pencil"></i>
                                        </a>

                                        @if($category->status == 0)
                                            <button data-toggle="modal" data-target="#activateModal" class="icon-btn bg--success ml-1 activateBtn" data-id="{{$category->id}}" data-name="{{__($category->title)}}" data-original-title="@lang('Enable')">
                                                <i class="la la-eye"></i>
                                            </button>
                                        @else
                                            <button data-toggle="modal" data-target="#deactivateModal" class="icon-btn bg--danger ml-1 deactivateBtn" data-id="{{$category->id}}" data-name="{{__($category->title)}}" data-original-title="@lang('Disable')">
                                                <i class="la la-eye-slash"></i>
                                            </button>
                                        @endif
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
                </div>
            </div><!-- card end -->
        </div>

    </div>


    @push('breadcrumb-plugins')
        <a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.category.create') }}"><i class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
    @endpush
    {{-- ACTIVATE METHOD MODAL --}}
    <div id="activateModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Payment Method Activation Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.category.activate')}}" method="POST">
                    @csrf
                    <input type="hidden" name="code">
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
                    <h5 class="modal-title">@lang('Payment Method Disable Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.category.deactivate')}}" method="POST">
                    @csrf
                    <input type="hidden" name="code">
                    <div class="modal-body">
                        <p>@lang('Are you sure to disable') <span class="font-weight-bold method-name"></span> @lang('method')?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn--danger">@lang('Disable')</button>
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
        })(jQuery);
    </script>
@endpush
