<?php 
    $conn = mysqli_connect("localhost", "root","", "pemweb");

    function query($query){
        global $conn;
        $result= mysqli_query($conn, $query);
        $rows=[];
        while($row= mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;    
    }
    function tambah($data){
        global $conn;
        $npm=$data["npm"];
        $nama=$data["nama"];
        $alamat=$data["alamat"];
        $tgl_lhr=$data["tanggalLahir"];
        $gender=$data["gender"];
        $email=$data["email"];

        $query="INSERT INTO dataStudent (npm, nama, alamat, tgl_lhr, jk, email) VALUES ('$npm','$nama','$alamat','$tgl_lhr','$gender','$email')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM dataStudent WHERE id=$id");
        return mysqli_affected_rows($conn);
    }
    function update($data){
        global $conn;
        $id = $data["id"];
        $npm=$data["npm"];
        $nama=$data["nama"];
        $alamat=$data["alamat"];
        $tgl_lhr=$data["tanggalLahir"];
        $gender=$data["gender"];
        $email=$data["email"];

        $query="UPDATE dataStudent SET 
        npm='$npm', nama='$nama',alamat='$alamat', tgl_lhr='$tgl_lhr', jk='$gender', email='$email' WHERE id=$id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
    function registrasi($data){
        global $conn;
        $username= stripcslashes($data["username"]) ;
        $password= mysqli_real_escape_string($conn, $data["password"]);
        $password2= mysqli_real_escape_string($conn, $data["password2"]);

        $hasil=mysqli_query($conn, "SELECT username from users WHERE username='$username'");
        if(mysqli_fetch_assoc($hasil)){
            echo " <script> alert('username sudah terdaftar'); </script> ";
            return false;
        }

        if($password!==$password2){
            echo " <script> alert('konfirmasi password tidak sesuai'); </script> ";
            return false;
        }
        $password= password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users VALUES ('','$username', '$password','user')";
        mysqli_query(mysql: $conn, query: $query);
        mysqli_affected_rows($conn);
    }
?> 