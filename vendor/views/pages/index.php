<div>
    <?php foreach ($this->articles as $article):?>
    <h2><?= $article['title']?></h2>
    <p><?= $article['text']?></p>
    <p><?= $article['date']?></p>
    <?php endforeach;?>
</div>