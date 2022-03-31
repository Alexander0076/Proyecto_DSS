<?php
include '../templates/head.php';
?>

<section>
    <div class="center">
        <h1 id="circle">Michael Jackson</h1>
    </div>
</section>

<script>
    circle = document.getElementById("circle");
    circlearray = circle.textContent.split('');
    circle.textContent = '';

    for(var i=0; i< circlearray.length; i++){
        circle.innerHTML +='<span style="transform:rotate('+((i+209)*10)+'deg)">'+circlearray[i]+'</span>';
    }
     
</script>

<?php
include '../templates/footer.php';
?>