<template lang="">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Striped rows</h4>
                    <p class="text-muted mb-0">
                        Use <code>.table-striped</code> to add zebra-striping to any table row
                        within the <code>&lt;tbody&gt;</code>.
                    </p>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle thumb-xs me-1"> Aaron Poulin</td>
                                <td>Aaron@example.com</td>
                                <td>+21 21547896</td>
                                <td class="text-end">                                                       
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-xs me-1"> Richard Ali</td>
                                <td>Richard@example.com</td>
                                <td>+41 21547896</td>
                                <td class="text-end">                                                       
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-xs me-1"> Juan Clark</td>
                                <td>Juan@example.com</td>
                                <td>+65 21547896</td>
                                <td class="text-end">                                                       
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/users/user-6.jpg" alt="" class="rounded-circle thumb-xs me-1"> Albert Hull</td>
                                <td>Albert@example.com</td>
                                <td>+88 21547896</td>
                                <td class="text-end">                                                       
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table head options</h4>
                    <p class="text-muted mb-0">Use one of two modifier classes to make
                        <code>&lt;thead&gt;</code>s appear light or dark gray.
                    </p>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Access</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge badge-boxed  badge-outline-success">Business</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge badge-boxed  badge-outline-warning">Personal</span></td>                                                    
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge badge-boxed  badge-outline-danger">Disabled</span></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge badge-boxed  badge-outline-success">Business</span></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge badge-boxed  badge-outline-warning">Personal</span></td>                                                    
                            </tr>
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>
</template>
<script>
export default {
    name: "Student"
}
</script>
<style lang="">
    
</style>