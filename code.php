<?php

require 'dbcon.php';

if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $npm = mysqli_real_escape_string($con, $_POST['npm']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
    $nominal = mysqli_real_escape_string($con, $_POST['nominal']);
    $tgl = mysqli_real_escape_string($con, $_POST['tgl']);

    if($name == NULL || $npm == NULL || $phone == NULL || $jurusan == NULL || $nominal == NULL || $tgl == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Semua Form Harus Disikan Ya...'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO students (name,npm,phone,jurusan,nominal,tgl) VALUES ('$name','$npm','$phone','$jurusan','$nominal','$tgl')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Pembayaran Telah Disimpan!!'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Pembayaran Belum Disimpan'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $npm = mysqli_real_escape_string($con, $_POST['npm']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
    $nominal = mysqli_real_escape_string($con, $_POST['nominal']);
    $tgl = mysqli_real_escape_string($con, $_POST['tgl']);

    if($name == NULL || $npm == NULL || $phone == NULL || $jurusan == NULL || $nominal == NULL || $tgl == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE students SET name='$name', npm='$npm', phone='$phone', jurusan='$jurusan' , nominal='$nominal' , tgl='$tgl'
                WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Data Berhasil di Update!!!'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Data belum berhasil di Update'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($con, $_GET['student_id']);

    $query = "SELECT * FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Student Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Student Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $query = "DELETE FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Data berhasil dihapus!'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Data belum dihapus!'
        ];
        echo json_encode($res);
        return;
    }
}

?>