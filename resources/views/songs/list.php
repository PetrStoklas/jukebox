<ul>
    <a class="add-btn" href="/"> add new </a>
    <?php foreach ($all_songs as $songie) : ?>


        <li class="song">
        
        <label for="">Name: </label><?= $songie->name ?> <p><?="<iframe width='560' height='315' src='https://www.youtube.com/embed/{$songie->code}' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"?></p>
        
        <a href=<?="/?id={$songie->id}"?>> edit </a> <br>
        <a href=<?="/delete/?id={$songie->id}"?>> delete </a><br>
        

        </li> <br>


    <?php endforeach ; ?>
</ul>