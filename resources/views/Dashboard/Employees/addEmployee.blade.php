<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-primary text-dark">
                <h5 class="modal-title fw-bold fs-4" id="addEmployeeModalLabel">
                    <i class="bi bi-person-plus me-2"></i>Add New Employee
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('employee.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-4">
                        <!-- Employee Name -->
                        <div class="col-md-12">
                            <label for="employeeName" class="form-label fw-semibold text-dark">Name</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="employeeName" name="name"
                                placeholder="Enter employee name" required>
                        </div>

                        <!-- Employee CIN -->
                        <div class="col-md-6">
                            <label for="employeeCIN" class="form-label fw-semibold text-dark">CIN</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="employeeCIN" name="cin"
                                placeholder="Enter employee CIN" required>
                        </div>

                        <!-- Employee Gender -->
                        <div class="col-md-6">
                            <label for="employeeGender" class="form-label fw-semibold text-dark">Gender</label>
                            <select class="form-select form-select-lg border-2 border-primary shadow-sm" id="employeeGender" name="gender" required>
                                <option value="" selected disabled>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <!-- Employee Address -->
                        <div class="col-md-12">
                            <label for="employeeAddress" class="form-label fw-semibold text-dark">Address</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="employeeAddress" name="adresse"
                                placeholder="Enter employee address" required>
                        </div>

                        <!-- Employee Start Date -->
                        <div class="col-md-6">
                            <label for="employeeDateDebut" class="form-label fw-semibold text-dark">Start Date</label>
                            <input type="date" class="form-control form-control-lg border-2 border-primary shadow-sm" id="employeeDateDebut" name="date_debut"
                                required>
                        </div>

                        <!-- Employee End Date -->
                        <div class="col-md-6">
                            <label for="employeeDateFin" class="form-label fw-semibold text-dark">End Date</label>
                            <input type="date" class="form-control form-control-lg border-2 border-primary shadow-sm" id="employeeDateFin" name="date_fin">
                        </div>

                        <!-- Employee Post -->
                        <div class="col-md-12">
                            <label for="employeePost" class="form-label fw-semibold text-dark">Post</label>
                            <input type="text" class="form-control form-control-lg border-2 border-primary shadow-sm" id="employeePost" name="post"
                                placeholder="Enter employee post" required>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-light border-top">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg px-4 bg-gradient-primary">
                        <i class="bi bi-save me-2"></i>Save Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
