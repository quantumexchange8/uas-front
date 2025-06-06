 <!-- order tracking start -->
 <x-app-layout>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('homepage') }}">HOME</a></li>
                    </li>
                    <li class="active">Track Order </li>
                </ul>
            </div>
        </div>
    </div>
 <div class="order-tracking-area pt-110 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-10 ms-auto me-auto">
                <div class="order-tracking-content">
                    <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                    <div class="order-tracking-form">
                        <form action="#">
                            <div class="sin-order-tracking">
                                <label>Order ID</label>
                                <input type="text" placeholder="Found in your order confirmation email.">
                            </div>
                            <div class="sin-order-tracking">
                                <label>Billing Email</label>
                                <input type="email" placeholder="Email you used during checkout">
                            </div>
                            <div class="order-track-btn">
                                <a href="#">Track Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>