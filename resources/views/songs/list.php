<ul>
    <a class="add-btn" href="/"> add new </a>
    <?php foreach ($all_songs as $songie) : ?>


        <li class="song">
        
        <label for="">Name: </label><?= $songie->name ?>
        
        <a href=<?="/?id={$songie->id}"?>> edit </a> 
        <a href=<?="/delete/?id={$songie->id}"?>> delete </a>
        <a href=<?="/detail/?id={$songie->id}"?>> detail </a>
        

        </li> <br>


    <?php endforeach ; ?>
</ul>