<div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1"
    aria-labelledby="editProductModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-primary text-dark">
                <h5 class="modal-title fw-bold fs-4" id="editProductModalLabel{{ $product->id }}">
                    <i class="bi bi-pencil-square me-2"></i>Edit Product: {{ $product->name }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-5">
                    <div class="row g-4">
                        <!-- Product Name -->
                        <div class="col-md-12">
                            <label for="name{{ $product->id }}" class="form-label fw-semibold text-dark">Name</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm"
                                id="name{{ $product->id }}" name="name" value="{{ $product->name }}" required>
                        </div>

                        <!-- Product Type -->
                        <div class="col-md-6">
                            <label for="type{{ $product->id }}" class="form-label fw-semibold text-dark">Type</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm"
                                id="type{{ $product->id }}" name="type" required>
                                <option value="supplement" {{ $product->type == 'supplement' ? 'selected' : '' }}>
                                    Supplement</option>
                                <option value="accesoire" {{ $product->type == 'accesoire' ? 'selected' : '' }}>
                                    Accessory</option>
                            </select>
                        </div>

                        <!-- Product Price -->
                        <div class="col-md-6">
                            <label for="price{{ $product->id }}"
                                class="form-label fw-semibold text-dark">Price</label>
                            <div class="input-group shadow-sm">
                                <input type="number" class="form-control form-control-lg border-2 border-primary"
                                    id="price{{ $product->id }}" name="price" step="0.01" min="0"
                                    value="{{ $product->price }}" required>
                                <span class="input-group-text bg-primary text-white">DH</span>
                            </div>
                        </div>

                        <!-- Current Image Preview -->
                        <div class="col-md-12">
                            <label class="form-label fw-semibold text-dark">Current Image</label>
                            <div class="text-center border p-3 mb-3 bg-light rounded">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid"
                                    style="max-height: 200px;">
                            </div>
                        </div>

                        <!-- Product Image (for update) -->
                        <div class="col-md-12">
                            <label for="image{{ $product->id }}" class="form-label fw-semibold text-dark">Update
                                Image</label>
                            <input type="file" class="form-control form-control-lg border-2 border-primary shadow-sm"
                                id="image{{ $product->id }}" name="image" accept="image/*">
                            <div class="form-text text-muted small">Leave empty to keep current image. (Max: 2MB)</div>
                        </div>

                        <!-- Product Description -->
                        <div class="col-md-12">
                            <label for="description{{ $product->id }}"
                                class="form-label fw-semibold text-dark">Description</label>
                            <textarea class="form-control border-2 border-primary shadow-sm" id="description{{ $product->id }}" name="description"
                                rows="4" required>{{ $product->description }}</textarea>
                        </div>

                        <!-- Product Category -->
                        <div class="col-md-6">
                            <label for="category{{ $product->id }}"
                                class="form-label fw-semibold text-dark">Category</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm"
                                id="category{{ $product->id }}" name="category" required>
                                <option value="proteine" {{ $product->category == 'proteine' ? 'selected' : '' }}>
                                    Proteine</option>
                                <option value="creatine" {{ $product->category == 'creatine' ? 'selected' : '' }}>
                                    Creatine</option>
                                <option value="vitamine" {{ $product->category == 'vitamine' ? 'selected' : '' }}>
                                    Vitamine</option>
                                <option value="accesoire" {{ $product->category == 'accesoire' ? 'selected' : '' }}>
                                    accesoire</option>
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
                        <i class="bi bi-save me-2"></i>Update Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
