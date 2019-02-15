<ul>
    <?php foreach ($all_songs as $songie) : ?>

        <li><label for="">Name: </label><?= $songie->name ?> <p><?="<iframe width='560' height='315' src='https://www.youtube.com/embed/{$songie->code}' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"?></p></li> <br>
        
        <a href=<?="/?id={$songie->id}"?>> edit </a> <br>
        <a href=<?="/?id={$songie->id}"?>> delete </a><br>
        <a href="/"> add new </a>


    <?php endforeach ; ?>
</ul>