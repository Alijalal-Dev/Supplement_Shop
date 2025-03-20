<div class="modal fade" id="deleteTestimonialModal{{ $testimonial->id }}" tabindex="-1"
    aria-labelledby="deleteTestimonialModal{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-danger text-white">
                <h5 class="modal-title fw-bold fs-4" id="deleteTestimonialModal{{ $testimonial->id }}">
                    <i class="bi bi-exclamation-triangle me-2"></i>Delete Testimonial
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <!-- Testimonial Message -->
                    <h5 class="fw-bold text-dark">{{ $testimonial->message }}</h5>
                </div>

                <!-- Warning Alert -->
                <div class="alert alert-warning border-2 border-warning shadow-sm">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    Are you sure you want to delete this message? This action cannot be undone.
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer bg-light border-top">
                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <!-- Cancel Button -->
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Cancel
                    </button>
                    <!-- Delete Button -->
                    <button type="submit" class="btn btn-danger btn-lg px-4 bg-gradient-danger">
                        <i class="bi bi-trash me-2"></i>Delete Permanently
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
