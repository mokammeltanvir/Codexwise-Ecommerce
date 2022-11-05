@extends('backend.layouts.master')

@section('title')
    Order Index
@endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
@endpush

@section('admin_content')
    <div class="row">
        <h1>Order List Table</h1>

        <div class="col-12">
            <div class="table-responsive my-2">
                <table class="table table-hover" id="dataTable">
                    <thead class="text-primary">
                        <th>#</th>
                        <th>View Details</th>
                        <th>Order Date</th>
                        <th>Sub total($)</th>
                        <th>Discount($)</th>
                        <th>Total ($)</th>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $order->id }}">Order Details</button>
                                    <div class="modal fade" id="modal{{ $order->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modal{{ $order->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="#modal{{ $order->id }}Title">Order Number
                                                        #{{ $order->id }}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table
                                                                    class="table table-striped table-inverse table-responsive">
                                                                    <thead class="thead-inverse">
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Product Name</th>
                                                                            <th>Quantity</th>
                                                                            <th>Unit Price</th>
                                                                            <th>Sub total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($order->orderDetails as $item)
                                                                            <tr>
                                                                                <td>{{ $loop->index + 1 }}</td>
                                                                                <td>{{ $item->product->name }}</td>
                                                                                <td>{{ $item->product_qty }}</td>
                                                                                <td>{{ $item->product_price }}</td>
                                                                                <td>{{ $item->product_price * $item->product_qty }}
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        <tr class="mb-5">
                                                                            <td colspan="4">
                                                                                Total Payable Amount:
                                                                            </td>
                                                                            <td><strong class="fw-bold text-danger">
                                                                                    ${{ $order->total }}</strong></td>
                                                                        </tr>
                                                                        <tr class="mt-5">
                                                                            <td colspan="50">
                                                                                <p class="text-primary">Billing Address:</p>
                                                                                <p>Recipent Name:
                                                                                    {{ $order->billing->name }}</p>
                                                                                <p>Mobile Number:
                                                                                    {{ $order->billing->phone_number }}</p>
                                                                                <p>Address: {{ $order->billing->address }}
                                                                                </p>
                                                                                <p>Upazila:
                                                                                    {{ $order->billing->upazila->name }}
                                                                                    Distrcit:
                                                                                    {{ $order->billing->district->name }}
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $order->created_at->format('d-M-Y H:i:s') }}</td>
                                <td>{{ $order->sub_total }}</td>
                                <td>{{ $order->discount_amount }}({{ $order->coupon_name }})</td>
                                <td>{{ $order->total }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="50">
                                    <p class="text-center">No order Found !!!</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $orders->links() }}

            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                pagingType: 'first_last_numbers',
            });

            $('.show_confirm').click(function(event) {
                let form = $(this).closest('form');

                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        });
    </script>
@endpush
