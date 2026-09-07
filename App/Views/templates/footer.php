</main>

<footer class="footer mt-auto py-3">
    <div class="container">
    </div>
</footer>
<script src="<?= $baseUrl ?>assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="<?= $baseUrl ?>assets/js/bootstrap.bundle.min.js"></script>

<!-- ACÁ SE CARGA EL JS SI ESTÁ ENTRE LOS PARÁMETROS -->
<?php 
if(isset($js)) { 
?>
<script src="<?= $baseUrl ?>assets/js/<?= $js ?>.js"></script>
<?php 
} 
?>
</body>
</html>