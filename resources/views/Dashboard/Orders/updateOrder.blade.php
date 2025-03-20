<div class="modal fade" id="editOrderModal{{ $order->id }}" tabindex="-1" aria-labelledby="editOrderModal{{ $order->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-primary text-dark">
                <h5 class="modal-title fw-bold fs-4" id="editOrderModal{{ $order->id }}">
                    <i class="bi bi-pencil-square me-2"></i>Edit Order: {{ $order->id }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('order.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row g-4">
                        <!-- Product Selection -->
                        <div class="col-md-6">
                            <label for="product_id{{ $order->id }}" class="form-label fw-semibold text-dark">Product</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="product_id{{ $order->id }}" name="product_id" required>
                                <option value="" disabled>Select a product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" data-price="{{ $product->price }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Quantity -->
                        <div class="col-md-6">
                            <label for="quantite{{ $order->id }}" class="form-label fw-semibold text-dark">Quantity</label>
                            <input type="number" class="form-control form-control-lg border-2 border-primary shadow-sm" id="quantity{{ $order->id }}" name="quantite"
                                min="1" value="{{ $order->quantite }}" required>
                        </div>

                        <!-- Total Price -->
                        <div class="col-md-6">
                            <label for="total_price{{ $order->id }}" class="form-label fw-semibold text-dark">Total Price</label>
                            <div class="input-group shadow-sm">
                                <input type="number" class="form-control form-control-lg border-2 border-primary" id="total_price{{ $order->id }}" name="total_price"
                                    step="0.01" min="0" value="{{ $order->total_price }}" readonly required>
                                <span class="input-group-text bg-primary text-white">DH</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6">
                            <label for="status{{ $order->id }}" class="form-label fw-semibold text-dark">Status</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="status{{ $order->id }}" name="status" required>
                                <option value="complete" {{ $order->status == 'complete' ? 'selected' : '' }}>Complete</option>
                                <option value="uncomplete" {{ $order->status == 'uncomplete' ? 'selected' : '' }}>Uncomplete</option>
                            </select>
                        </div>

                        <!-- Type -->
                        <div class="col-md-12">
                            <label for="type{{ $order->id }}" class="form-label fw-semibold text-dark">Type</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="type{{ $order->id }}" name="type" required>
                                <option value="en_ligne" {{ $order->type == 'en_ligne' ? 'selected' : '' }}>Online</option>
                                <option value="off_ligne" {{ $order->type == 'off_ligne' ? 'selected' : '' }}>Offline</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-light border-top">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg px-4 bg-gradient-primary">
                        <i class="bi bi-save me-2"></i>Update Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to calculate total price for a specific modal
        function calculateTotalPrice(productSelectId, quantityInputId, totalPriceInputId) {
            const productSelect = document.getElementById(productSelectId);
            const quantityInput = document.getElementById(quantityInputId);
            const totalPriceInput = document.getElementById(totalPriceInputId);

            // Function to update total price
            function updateTotalPrice() {
                const selectedProduct = productSelect.options[productSelect.selectedIndex];
                const productPrice = parseFloat(selectedProduct.getAttribute('data-price')) || 0;
                const quantity = parseFloat(quantityInput.value) || 0;

                const totalPrice = productPrice * quantity;
                totalPriceInput.value = totalPrice.toFixed(2); // Update total price field
            }

            // Event listeners for product and quantity changes
            productSelect.addEventListener('change', updateTotalPrice);
            quantityInput.addEventListener('input', updateTotalPrice);

            // Initialize total price calculation
            updateTotalPrice();
        }

        // Apply the function to each order modal
        @foreach ($orders as $order)
            calculateTotalPrice('product_id{{ $order->id }}', 'quantity{{ $order->id }}', 'total_price{{ $order->id }}');
        @endforeach
    });
</script>
