<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="flex items-center font-poppins dark:bg-gray-800">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto bg-white border rounded-md dark:border-gray-900 dark:bg-gray-900 md:py-10 md:px-10">

            <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300">
                Thank you. Your order has been received.
            </h1>

            <!-- Address -->
            <div class="flex border-b border-gray-200 dark:border-gray-700 items-stretch px-4 mb-8">
                <div class="flex flex-col space-y-2">
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                        {{ $order->address->first_name }} {{ $order->address->last_name }}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ $order->address->street_address }}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ $order->address->city }}, {{ $order->address->state }} - {{ $order->address->zip_code }}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Phone: {{ $order->address->phone }}
                    </p>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="flex flex-wrap items-center pb-4 mb-10 border-b border-gray-200 dark:border-gray-700">

                <div class="w-full px-4 mb-4 md:w-1/4">
                    <p class="mb-2 text-sm text-gray-600 dark:text-gray-400">Order Number:</p>
                    <p class="text-base font-semibold text-gray-800 dark:text-gray-400">{{ $order->id }}</p>
                </div>

                <div class="w-full px-4 mb-4 md:w-1/4">
                    <p class="mb-2 text-sm text-gray-600 dark:text-gray-400">Date:</p>
                    <p class="text-base font-semibold text-gray-800 dark:text-gray-400">
                        {{ $order->created_at->format('d-m-Y') }}
                    </p>
                </div>

                <div class="w-full px-4 mb-4 md:w-1/4">
                    <p class="mb-2 text-sm font-medium text-gray-800 dark:text-gray-400">Total:</p>
                    <p class="text-base font-semibold text-blue-600 dark:text-gray-400">
                        ₹{{ number_format($total, 2) }}
                    </p>
                </div>

                <div class="w-full px-4 mb-4 md:w-1/4">
                    <p class="mb-2 text-sm text-gray-600 dark:text-gray-400">Payment Method:</p>
                    <p class="text-base font-semibold text-gray-800 dark:text-gray-400">
                        {{ $order->payment_method == 'cod' ? 'Cash on Delivery' : 'Card' }}
                    </p>
                </div>

            </div>

            <!-- Order Details -->
            <div class="px-4 mb-10">
                <div class="flex flex-col md:flex-row md:space-x-8">

                    <div class="flex flex-col w-full space-y-6">
                        <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Order details</h2>

                        <div class="flex flex-col pb-4 space-y-4 border-b border-gray-200 dark:border-gray-700">

                            <div class="flex justify-between w-full">
                                <p class="text-base text-gray-800 dark:text-gray-400">Subtotal</p>
                                <p class="text-base text-gray-600 dark:text-gray-400">
                                    ₹{{ number_format($subtotal, 2) }}
                                </p>
                            </div>

                            <div class="flex justify-between w-full">
                                <p class="text-base text-gray-800 dark:text-gray-400">Discount</p>
                                <p class="text-base text-gray-600 dark:text-gray-400">₹0.00</p>
                            </div>

                        </div>

                        <div class="flex justify-between w-full">
                            <p class="text-base font-semibold text-gray-800 dark:text-gray-400">Total</p>
                            <p class="text-base font-semibold text-gray-600 dark:text-gray-400">
                                ₹{{ number_format($total, 2) }}
                            </p>
                        </div>
                    </div>

                    <!-- Shipping -->
                    <div class="flex flex-col w-full px-2 space-y-4 md:px-8">
                        <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Shipping</h2>

                        <div class="flex justify-between w-full">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-blue-600 dark:text-blue-400" viewBox="0 0 16 16">
                                        <path d="M0 3.5A1.5 1.5 ..."></path>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                                        Delivery<br><span class="text-sm font-normal">Delivery within 24 Hours</span>
                                    </p>
                                </div>
                            </div>

                            <p class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                              ₹{{ number_format(0, 2) }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-4 px-4 mt-6">
                <a href="/products" class="w-full text-center px-4 py-2 text-blue-500 border border-blue-500 rounded-md hover:text-white hover:bg-blue-600 dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-300">
                    Go back shopping
                </a>

                <a href="/my-orders" class="w-full text-center px-4 py-2 bg-blue-500 rounded-md text-gray-50 hover:bg-blue-600 dark:hover:bg-gray-700 dark:bg-gray-800">
                    View My Orders
                </a>
            </div>

        </div>
    </section>
</div>
