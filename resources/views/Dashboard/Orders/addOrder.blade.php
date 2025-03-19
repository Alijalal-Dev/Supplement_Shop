<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-primary text-dark">
                <h5 class="modal-title fw-bold fs-4" id="addOrderModalLabel">
                    <i class="bi bi-cart-plus me-2"></i>Add New Order
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-4">
                        <!-- Product Selection -->
                        <div class="col-md-6">
                            <label for="product_id" class="form-label fw-semibold text-dark">Product</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="product_id"
                                name="product_id" required>
                                <option value="" selected disabled>Select a product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                                        {{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Quantity -->
                        <div class="col-md-6">
                            <label for="quantity" class="form-label fw-semibold text-dark">Quantity</label>
                            <input type="number" class="form-control form-control-lg border-2 border-primary shadow-sm"
                                id="quantity" name="quantite" min="1" placeholder="Enter quantity" required>
                        </div>

                        <!-- Total Price -->
                        <div class="col-md-6">
                            <label for="total_price" class="form-label fw-semibold text-dark">Total Price</label>
                            <div class="input-group shadow-sm">
                                <input type="number" class="form-control form-control-lg border-2 border-primary"
                                    id="total_price" name="total_price" step="0.01" min="0" placeholder="0.00"
                                    required>
                                <span class="input-group-text bg-primary text-white">DH</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6">
                            <label for="status" class="form-label fw-semibold text-dark">Status</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="status"
                                name="status" required>
                                <option value="" selected disabled>Select status</option>
                                <option value="complete">Complete</option>
                                <option value="uncomplete">Uncomplete</option>
                            </select>
                        </div>

                        <!-- Type -->
                        <div class="col-md-12">
                            <label for="type" class="form-label fw-semibold text-dark">Type</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="type"
                                name="type" required>
                                <option value="" selected disabled>Select type</option>
                                <option value="en_ligne">Online</option>
                                <option value="off_ligne">Offline</option>
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
                        <i class="bi bi-save me-2"></i>Save Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productSelect = document.getElementById('product_id');
        const quantityInput = document.getElementById('quantity');
        const totalPriceInput = document.getElementById('total_price');

        // Function to calculate total price
        function calculateTotalPrice() {
            const selectedProduct = productSelect.options[productSelect.selectedIndex];
            const productPrice = parseFloat(selectedProduct.getAttribute('data-price')) || 0;
            const quantity = parseFloat(quantityInput.value) || 0;

            const totalPrice = productPrice * quantity;
            totalPriceInput.value = totalPrice.toFixed(2); // Update total price field
        }

        // Event listeners
        productSelect.addEventListener('change', calculateTotalPrice);
        quantityInput.addEventListener('input', calculateTotalPrice);
    });
</script>
