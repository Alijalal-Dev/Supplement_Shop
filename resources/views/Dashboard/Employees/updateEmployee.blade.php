<div class="modal fade" id="editEmployeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="editEmployeeModalLabel{{ $employee->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-primary text-dark">
                <h5 class="modal-title fw-bold fs-4" id="editEmployeeModalLabel{{ $employee->id }}">
                    <i class="bi bi-pencil-square me-2"></i>Edit Employee: {{ $employee->name }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row g-4">
                        <!-- Employee Name -->
                        <div class="col-md-12">
                            <label for="name{{ $employee->id }}" class="form-label fw-semibold text-dark">Name</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="name{{ $employee->id }}" name="name"
                                value="{{ $employee->name }}" required>
                        </div>

                        <!-- Employee CIN -->
                        <div class="col-md-6">
                            <label for="cin{{ $employee->id }}" class="form-label fw-semibold text-dark">CIN</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="cin{{ $employee->id }}" name="cin"
                                value="{{ $employee->cin }}" required>
                        </div>

                        <!-- Employee Gender -->
                        <div class="col-md-6">
                            <label for="gender{{ $employee->id }}" class="form-label fw-semibold text-dark">Gender</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="gender{{ $employee->id }}" name="gender" required>
                                <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Employee Address -->
                        <div class="col-md-12">
                            <label for="adresse{{ $employee->id }}" class="form-label fw-semibold text-dark">Address</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="adresse{{ $employee->id }}" name="adresse"
                                value="{{ $employee->adresse }}" required>
                        </div>

                        <!-- Employee Start Date -->
                        <div class="col-md-6">
                            <label for="date_debut{{ $employee->id }}" class="form-label fw-semibold text-dark">Start Date</label>
                            <input type="date" class="form-control form-control-lg border-2 border-primary shadow-sm" id="date_debut{{ $employee->id }}" name="date_debut"
                                value="{{ $employee->date_debut }}" required>
                        </div>

                        <!-- Employee End Date -->
                        <div class="col-md-6">
                            <label for="date_fin{{ $employee->id }}" class="form-label fw-semibold text-dark">End Date</label>
                            <input type="date" class="form-control form-control-lg border-2 border-primary shadow-sm" id="date_fin{{ $employee->id }}" name="date_fin"
                                value="{{ $employee->date_fin }}">
                        </div>

                        <!-- Employee Post -->
                        <div class="col-md-12">
                            <label for="post{{ $employee->id }}" class="form-label fw-semibold text-dark">Post</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="post{{ $employee->id }}" name="post"
                                value="{{ $employee->post }}" required>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-light border-top">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg px-4 bg-gradient-primary">
                        <i class="bi bi-save me-2"></i>Update Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
