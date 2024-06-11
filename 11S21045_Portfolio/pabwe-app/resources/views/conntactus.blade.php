<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Cindy Simangunsong</title>
    <link rel="stylesheet" href="{{asset('coba.css')}}">
</head>
<body>
    <div class="container">
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <br><h2>Contact Me</h2>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form id="contact-form">
                        <h2 class="lg-view">Hubungi Kami</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" placeholder="Name" id="name">
                        <input type="email" placeholder="Email Address" id="email">
                        <input type="text" placeholder="Company" autocomplete="off" id="company">
                        <input type="tel" placeholder="Phone Number" autocomplete="off" id="phone">
                        <textarea rows="10" placeholder="Message" id="message"></textarea>
                        <button type="button" onclick="validateForm()">Kirim</button>
                        <footer>
                          <center><h4> Copyright &copy; ifs21045-itdel </h4></center>
                          </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const company = document.getElementById('company').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            if (name === '' || email === '' || company === '' || phone === '' || message === '') {
                alert('Harap isi semua bidang formulir sebelum mengirim.');
            } else {
                alert('Formulir telah dikirim. Terima kasih!');
            }
        }
    </script>
</body>
</html>
