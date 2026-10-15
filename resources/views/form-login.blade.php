<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login dengan Ajax</title>
    <!-- 1. Wajib menyertakan jQuery agar fungsi $.ajax bisa berjalan -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Submit dengan Ajax</h2>

    <!-- Form HTML biasa (tanpa action & method standar karena di-handle oleh Ajax) -->
    <form id="loginForm">
        @csrf
        <label>Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <button type="button" id="btnSubmit">Kirim dengan Ajax</button>
    </form>

    <p id="hasilResponse" style="color: green; font-weight: bold;"></p>

    <!-- 2. Kode Ajax ditaruh di dalam tag script -->
    <script>
        $(document).ready(function() {
            $('#btnSubmit').click(function() {
                // Ambil nilai dari inputan
                var userVal = $('#username').val();
                var passVal = $('#password').val();

                $.ajax({
                    url: '/proses-login', // Sesuaikan dengan route di web.php kamu
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // Token keamanan Laravel untuk POST
                        username: userVal,
                        password: passVal
                    },
                    success: function(response) {
                        console.log('Data submitted successfully');
                        // Tampilkan hasil balasan dari server ke layar tanpa reload
                        $('#hasilResponse').text(response);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error occurred: ' + error);
                        alert('Terjadi kesalahan!');
                    }
                });
            });
        });
    </script>

</body>
</html>