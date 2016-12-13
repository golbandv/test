<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>
<?php
class Article {
    public $title;
    private $news;
    public function getTitle()
    {
        return $this->title.'<br>';
    }

    public function setNews($news)
    {
        $this->news = $news;
    }
    public function getNews()
    {
        return $this->news;
    }
}
$a = new Article;
$a->title='watch ';
//$a->news='15';
echo $a->getTitle();
$a->setNews(5+8);
echo $a->getNews();
?>
</h2>
</body>
</html>

