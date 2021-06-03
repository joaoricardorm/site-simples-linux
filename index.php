
<style>
html, body { height:100%; padding:0; margin:0; }
.numeros {
    padding:2rem;
background:white;
border-radius:2rem;
color: rgb(50,0,100);
font-weight:bold;
margin:2rem;
text-align:center;
}
</style>
<?php
    echo '<body style="font-family:Ubuntu; background:rgb(100,30,150); color:white; display:flex;flex-direction:column; align-items: center; align-content:center; justify-content:center;">';
    echo 'Ilha só, o <h2>PHP</h2> rodando aqui rapeize!';
    echo '<br><h1 style="text-transform:uppercase; color:rgb(255,0,200)">Aqui o flutter não entra!</h1>';
echo '<div class="numeros">';
for($i=1;$i<=50;$i++){
echo $i.' . ';
}
echo '</div>';
