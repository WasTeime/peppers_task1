<span>Title: <?= $post->title ?> </span>
<br>
<span>Excerpt: <?= $post->excerpt ?> </span>
<br>
<span>Category: <?= $post->category->title ?> </span>
<br>
<span>Content: <?= $post->content ?> </span>
<br>
<span>Created_date: <?= Yii::$app->formatter->asDate($post->created_at) ?> </span>
<br>
<span>Image: <?= \yii\helpers\Html::img("@web/{$post->img}")?> </span>
