@php $pageName = "Department List" @endphp
@include('header')
<!-- Page container start -->
<div class="main-panel">
    <!-- Navbar -->
    @include('navbar')
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-text">
                            <h4 class="card-text">Department List</h4>
                            <p class="card-category"></p>
                            <div class="" style="float: right;">
                                <a href="{{ URL::to('/add_department') }}" class="btn btn-success">
                                    Add New
                                </a>
                            </div>
                        </div>                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="emp_list">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $id = 1; @endphp
                                        @foreach($departments as $d)
                                        <tr>
                                            <td>
                                                {{$id}}
                                            </td>
                                            <td>
                                                {{$d->name}}
                                            </td>
                                            <td class="text-primary">
                                                {{$d->status == 1 ? "Active" : "Deactive"}}
                                            </td>
                                            <td class="text-primary">
                                                <a href="" class="btn btn-info btn-sm">View</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        @php $id++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="#">
                            TS WEB
                            </a>
                        </li>
                        <li>
                            <a href="">
                            About Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                            Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                            Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="#" target="_blank">TS Web</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Page container end -->
@include('footer')
<script>
$(document).ready( function () {
    $('#emp_list').DataTable();
} );
</script>