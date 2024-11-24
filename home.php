<?php
include('seguranca/seguranca.php');
session_start();
if(administrador_logado() == false) {header("location: /index.php"); exit;}

include('layout/header.html');
include('layout/navbar.php');
?>
    <div class="home"></div>

<?php include('layout/footer.html'); ?>
<body style="margin-left: 100px">
<script>
document.getElementById('change-background').addEventListener('click', function(event) {
    event.preventDefault();

    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = 'image/*';

    fileInput.onchange = (event) => {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = (e) => {
            document.querySelector('.home').style.backgroundImage = `url(${e.target.result})`;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    };

    fileInput.click();
});
</script>