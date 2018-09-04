<?php

class News
{
    //private $news;
    public function __construct($news)
    {        
        $decode = json_decode(file_get_contents($news), true);
        $this->news = $decode;
    }
    public function getNews()
    {
        $list = '';
        foreach ($this->news as $item) {
            $list .= '<div>'.'<h3>' . $item['title'] . '</h3>' . '<b>' . $item['data'] . '</b>' . '<p>' . $item['text'] . '</p>' . '<br>'.'</div';
        }
        return $list;
    }    
}
$newsPolicy = new News('newsPolicy.json');
$newsWeather = new News('newsWeather.json');
$newsSport = new News('newsSport.json');



?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<div>
<h2> Проишествия</h2>
<?php echo $newsPolicy->getNews(); ?>
</div>
<div>
<h2> Погода </h2>
<?php echo $newsWeather->getNews(); ?>
</div>
<div>
<h2> Спорт </h2>
<?php echo $newsSport->getNews(); ?>
</div>
</body>
</html>
