<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-primary text-dark">
                <h5 class="modal-title fw-bold fs-4" id="addProductModalLabel">
                    <i class="bi bi-bag-plus me-2"></i>Add New Product
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-5">
                    <div class="row g-4">
                        <!-- Product Name -->
                        <div class="col-md-12">
                            <label for="productName" class="form-label fw-semibold text-dark">Product Name</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm"
                                id="productName" name="name" placeholder="Enter product name" required>
                        </div>

                        <!-- Product Type -->
                        <div class="col-md-6">
                            <label for="productType" class="form-label fw-semibold text-dark">Product Type</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm"
                                id="productType" name="type" required>
                                <option value="" selected disabled>Select Product type</option>
                                <option value="supplement">Supplement</option>
                                <option value="accesoire">Accessory</option>
                            </select>
                        </div>

                        <!-- Product Price -->
                        <div class="col-md-6">
                            <label for="productPrice" class="form-label fw-semibold text-dark">Price</label>
                            <div class="input-group shadow-sm">
                                <input type="number" class="form-control form-control-lg border-2 border-primary"
                                    id="productPrice" name="price" step="0.01" min="0" placeholder="0.00"
                                    required>
                                <span class="input-group-text bg-primary text-white">DH</span>
                            </div>
                        </div>

                        <!-- Product Image -->
                        <div class="col-md-12">
                            <label for="productImage" class="form-label fw-semibold text-dark">Product Image</label>
                            <input type="file" class="form-control form-control-lg border-2 border-primary shadow-sm"
                                id="productImage" name="image" accept="image/*">
                            <div class="form-text text-muted small">Upload a clear image of your product (Max: 2MB)
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="col-md-12">
                            <label for="productDescription" class="form-label fw-semibold text-dark">Description</label>
                            <textarea class="form-control border-2 border-primary shadow-sm" id="productDescription" name="description"
                                rows="4" placeholder="Enter product description" required></textarea>
                        </div>

                        <!-- Product Category -->
                        <div class="col-md-6">
                            <label for="productCategory" class="form-label fw-semibold text-dark">Category</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm"
                                id="productCategory" name="category" required>
                                <option value="" selected disabled>Select Product category</option>
                                <option value="proteine">Proteine</option>
                                <option value="creatine">Creatine</option>
                                <option value="vitamine">Vitamine</option>
                                <option value="accesoire">accesoire</option>
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
                        <i class="bi bi-save me-2"></i>Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
