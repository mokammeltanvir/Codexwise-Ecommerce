@extends('backend.layouts.master')

@section('title')
    Dashboard
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
        <div class="col-12">
            <h1>Welcome to Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <h6>Analytics Report</h6>
        <div class="col-12">
            <div class="mb-5">
                <div class="row g-2">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="cs-icon cs-icon-dollar text-primary">
                                        <circle cx="10" cy="10" r="8"></circle>
                                        <path
                                            d="M8.2474 12.7882C9.21854 13.0238 10.3165 13.1347 11.255 12.7328C11.8747 12.4349 12.0341 11.9499 11.9943 11.3645C11.9508 10.4361 10.8492 10.0759 10.023 9.97886C9.37073 9.86455 8.53367 9.66016 8.15681 9.09552C7.83068 8.47891 8.00824 7.59903 8.73659 7.25954C9.4 6.95033 10.8166 6.87849 11.6536 7.25954">
                                        </path>
                                        <path d="M10 5.5V7M10 13V14.5"></path>
                                    </svg>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">EARNINGS</div>
                                <div class="text-primary cta-4">$ {{ $total_earning }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="cs-icon cs-icon-basket text-primary">
                                        <path
                                            d="M13.4444 7C15.2227 7 16.1119 7 16.6649 7.45341C16.9019 7.64779 17.0912 7.89407 17.2179 8.17322C17.5135 8.82437 17.2844 9.68352 16.8262 11.4018L16.0262 14.4018C15.7421 15.4672 15.6 15.9998 15.2575 16.3661C15.108 16.5259 14.9333 16.6602 14.7404 16.7634C14.2982 17 13.7469 17 12.6444 17L7.35564 17C6.25306 17 5.70177 17 5.25964 16.7634C5.06667 16.6602 4.89196 16.5259 4.74247 16.3661C4.39996 15.9998 4.25791 15.4672 3.97382 14.4018L3.17382 11.4018C2.7156 9.68352 2.4865 8.82436 2.78211 8.17322C2.90885 7.89407 3.09806 7.64779 3.33513 7.45341C3.88812 7 4.77729 7 6.55564 7L13.4444 7Z">
                                        </path>
                                        <path d="M12 11V13M8 11V13M12 2 15 7M8 2 5 7"></path>
                                    </svg>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ORDERS</div>
                                <div class="text-primary cta-4">{{ $total_order_count }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="cs-icon cs-icon-server text-primary">
                                        <path
                                            d="M15 2H5C4.06812 2 3.60218 2 3.23463 2.15224 2.74458 2.35523 2.35523 2.74458 2.15224 3.23463 2 3.60218 2 4.06812 2 5 2 5.93188 2 6.39782 2.15224 6.76537 2.35523 7.25542 2.74458 7.64477 3.23463 7.84776 3.60218 8 4.06812 8 5 8H15C15.9319 8 16.3978 8 16.7654 7.84776 17.2554 7.64477 17.6448 7.25542 17.8478 6.76537 18 6.39782 18 5.93188 18 5 18 4.06812 18 3.60218 17.8478 3.23463 17.6448 2.74458 17.2554 2.35523 16.7654 2.15224 16.3978 2 15.9319 2 15 2zM15 12H5C4.06812 12 3.60218 12 3.23463 12.1522 2.74458 12.3552 2.35523 12.7446 2.15224 13.2346 2 13.6022 2 14.0681 2 15 2 15.9319 2 16.3978 2.15224 16.7654 2.35523 17.2554 2.74458 17.6448 3.23463 17.8478 3.60218 18 4.06812 18 5 18H15C15.9319 18 16.3978 18 16.7654 17.8478 17.2554 17.6448 17.6448 17.2554 17.8478 16.7654 18 16.3978 18 15.9319 18 15 18 14.0681 18 13.6022 17.8478 13.2346 17.6448 12.7446 17.2554 12.3552 16.7654 12.1522 16.3978 12 15.9319 12 15 12z">
                                        </path>
                                        <path d="M13 5H15M13 15H15M7 8 7 12M13 8 13 12"></path>
                                    </svg>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">CATEGORY</div>
                                <div class="text-primary cta-4">{{ $total_categories }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="cs-icon cs-icon-basket text-primary">
                                        <path
                                            d="M13.4444 7C15.2227 7 16.1119 7 16.6649 7.45341C16.9019 7.64779 17.0912 7.89407 17.2179 8.17322C17.5135 8.82437 17.2844 9.68352 16.8262 11.4018L16.0262 14.4018C15.7421 15.4672 15.6 15.9998 15.2575 16.3661C15.108 16.5259 14.9333 16.6602 14.7404 16.7634C14.2982 17 13.7469 17 12.6444 17L7.35564 17C6.25306 17 5.70177 17 5.25964 16.7634C5.06667 16.6602 4.89196 16.5259 4.74247 16.3661C4.39996 15.9998 4.25791 15.4672 3.97382 14.4018L3.17382 11.4018C2.7156 9.68352 2.4865 8.82436 2.78211 8.17322C2.90885 7.89407 3.09806 7.64779 3.33513 7.45341C3.88812 7 4.77729 7 6.55564 7L13.4444 7Z">
                                        </path>
                                        <path d="M12 11V13M8 11V13M12 2 15 7M8 2 5 7"></path>
                                    </svg>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">PRODUCTS</div>
                                <div class="text-primary cta-4">{{ $total_products }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="cs-icon cs-icon-user text-primary">
                                        <path
                                            d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z">
                                        </path>
                                        <path
                                            d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">USERS</div>
                                <div class="text-primary cta-4">{{ $total_customers }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card h-100 hover-scale-up cursor-pointer">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div
                                    class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="cs-icon cs-icon-message text-primary">
                                        <path
                                            d="M14.5 2C15.9045 2 16.6067 2 17.1111 2.33706C17.3295 2.48298 17.517 2.67048 17.6629 2.88886C18 3.39331 18 4.09554 18 5.5L18 10.5C18 11.9045 18 12.6067 17.6629 13.1111C17.517 13.3295 17.3295 13.517 17.1111 13.6629C16.6067 14 15.9045 14 14.5 14L10.4497 14C9.83775 14 9.53176 14 9.24786 14.0861C9.12249 14.1241 9.00117 14.1744 8.88563 14.2362C8.62399 14.376 8.40762 14.5924 7.97487 15.0251L5.74686 17.2531C5.47773 17.5223 5.34317 17.6568 5.2255 17.6452C5.17629 17.6404 5.12962 17.6211 5.0914 17.5897C5 17.5147 5 17.3244 5 16.9438L5 14.6C5 14.5071 5 14.4606 4.99384 14.4218C4.95996 14.2078 4.79216 14.04 4.57822 14.0062C4.53935 14 4.4929 14 4.4 14V14C4.0284 14 3.8426 14 3.68713 13.9754C2.83135 13.8398 2.16017 13.1687 2.02462 12.3129C2 12.1574 2 11.9716 2 11.6L2 5.5C2 4.09554 2 3.39331 2.33706 2.88886C2.48298 2.67048 2.67048 2.48298 2.88886 2.33706C3.39331 2 4.09554 2 5.5 2L14.5 2Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">COMMENTS
                                </div>
                                <div class="text-primary cta-4">5</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h1>Order List Table</h1>
            <div class="table-responsive my-2">
                <table class="table table-hover" id="dataTable">
                    <thead class="text-primary">
                        <th>#</th>
                        <th>View Details</th>
                        <th>order date</th>
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
                                                    <h5 class="modal-title" id="#modal{{ $order->id }}Title">Order
                                                        Number #{{ $order->id }}</h5>
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
                                                                                    ৳{{ $order->total }}</strong></td>
                                                                        </tr>
                                                                        <tr class="mt-5">
                                                                            <td colspan="50">
                                                                                <p class="text-primary">Billing Address:
                                                                                </p>
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
        <div class="col-md-4">
            <canvas id="myChart" width="200" height="200"></canvas>
        </div>
    </div>

@endsection

@push('admin_script')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    label: '# of Orders',
                    data: <?php echo json_encode($order_yearwise); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
