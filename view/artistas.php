<?php
include '../templates/head.php';
?>

<section>

    <div class="artistas">
        <h1>Más Populares</h1>
        <span class="span"></span>
        <div class="center">
            <div class="block">
                <img src="../img/thriller.jpg" alt="">
                <div class="btn trans-04"><span>Ver artista</span></div>
            </div>
            <h3 id="circle">Michael Jackson</h3>
            <a href="#">12 canciones</a>
        </div>
    </div>

</section>






<?php
include '../templates/footer.php';
?>
<!-- 
<script>
    circle = document.getElementById('circle');
    circlearray = circle.textContent.split('');
    circle.textContent = '';

    for (var i = 0; i < circlearray.length; i++) {
        circle.innerHTML += '<span style="transform:rotate(' + ((i + 209) * 10) + 'deg)">' + circlearray[i] + '</span>';
    }
</script> -->