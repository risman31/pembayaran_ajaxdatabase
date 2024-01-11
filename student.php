<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Pembayaran Mahasiswa</title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="icon" href="./img/pay.png" type="image/png">

</head>

<body>



    <!-- Add Payment -->
    <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pembayaran Kuliah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="saveStudent">
                    <div class="modal-body">

                        <div id="errorMessage" class="alert alert-warning d-none"></div>

                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">NPM</label>
                            <input type="text" name="npm" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Nomor Handphone</label>
                            <input type="text" name="phone" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Nominal Pembayaran</label>
                            <input type="text" id="pakeRupiah" name="nominal" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Pembayaran</label>
                            <input type="date" name="tgl" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
                        <button type="submit" class="btn btn-primary"> <i class="bi bi-send-fill"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- End Add Payment -->

    <!-- Edit Payment Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pembayaran Kuliah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateStudent">
                    <div class="modal-body">

                        <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                        <input type="hidden" name="student_id" id="student_id">

                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">NPM</label>
                            <input type="text" name="npm" id="npm" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Nomor Handphone</label>
                            <input type="text" name="phone" id="phone" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Nominal Pembayaran</label>
                            <input type="text" name="nominal" id="nominal" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Pembayaran</label>
                            <input type="date" name="tgl"  id="tgl" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
                        <button type="submit" class="btn btn-success"><i class="bi bi-send-fill"></i> Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Payment Modal -->

    <!-- View Payment Modal -->
    <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payment Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="">Nama</label>
                        <p id="view_name" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">NPM</label>
                        <p id="view_npm" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Handphone</label>
                        <p id="view_phone" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Jurusan</label>
                        <p id="view_jurusan" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Nominal Pembayaran</label>
                        <p id="view_nominal" class="form-control"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Pembayaran</label>
                        <p id="view_tgl" class="form-control"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
     <!-- End View Payment Modal -->

    <!-- Data Table  -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pembayaran Perkuliahan Realtime

                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                            <i class="bi bi-plus-circle-fill"></i> Tambah
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>No</th>
                                    <!-- <th>ID</th> -->
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>Nomor Handphone</th>
                                    <th>Jurusan</th>
                                    <th>Nominal Pembayaran</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require 'dbcon.php';

                                $query = "SELECT * FROM students";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $counter = 1; // Inisialisasi variabel counter
                                    foreach ($query_run as $student) {
                                ?>
                                        <tr>
                                            <td><?= $counter ?></td><!-- Kolom nomor otomatis -->
                                            <!-- <td><?= $student['id'] ?></td> -->
                                            <td><?= $student['name'] ?></td>
                                            <td><?= $student['npm'] ?></td>
                                            <td><?= $student['phone'] ?></td>
                                            <td><?= $student['jurusan'] ?></td>
                                            <td><?= $student['nominal'] ?></td>
                                            <td><?= $student['tgl'] ?></td>
                                            <td>
                                                <button type="button" value="<?= $student['id']; ?>" class="viewStudentBtn btn btn-info btn-sm">  <i class="bi bi-eye-fill"></i> View</button>
                                                <button type="button" value="<?= $student['id']; ?>" class="editStudentBtn btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                                                <button type="button" value="<?= $student['id']; ?>" class="deleteStudentBtn btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i> Delete</button>
                                            </td>
                                        </tr>
                                <?php
                                $counter++;
                                    }
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Data Table -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        //rupiah
        var pakeRupiah = document.getElementById('pakeRupiah');
        pakeRupiah.addEventListener('keyup', function(e) {
            pakeRupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        // Fungsi simpan payment
        $(document).on('submit', '#saveStudent', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessage').addClass('d-none');
                        $('#studentAddModal').modal('hide');
                        $('#saveStudent')[0].reset();

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        // Fungsi View 
        $(document).on('click', '.viewStudentBtn', function() {

            var student_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#view_name').text(res.data.name);
                        $('#view_npm').text(res.data.npm);
                        $('#view_phone').text(res.data.phone);
                        $('#view_jurusan').text(res.data.jurusan);
                        $('#view_nominal').text(res.data.nominal);
                        $('#view_tgl').text(res.data.tgl);

                        $('#studentViewModal').modal('show');
                    }
                }
            });
            });

        // Fungsi Muncul Modal Edit
        $(document).on('click', '.editStudentBtn', function() {

            var student_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#student_id').val(res.data.id);
                        $('#name').val(res.data.name);
                        $('#npm').val(res.data.npm);
                        $('#phone').val(res.data.phone);
                        $('#jurusan').val(res.data.jurusan);
                        $('#nominal').val(res.data.nominal);
                        $('#tgl').val(res.data.tgl);
                        

                        $('#studentEditModal').modal('show');
                    }

                }
            });

        });

        // Fungsi Update Payment
        $(document).on('submit', '#updateStudent', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                        $('#studentEditModal').modal('hide');
                        $('#updateStudent')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        // Fungsi Hapus 
        $(document).on('click', '.deleteStudentBtn', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this data?')) {
                var student_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_student': true,
                        'student_id': student_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>