<?
class Печенье
{
    private $вид;

    private $видыПеченья = [
        'шоколадная крошка',
        'с овсом и изюмом',
        'с арахисовым маслом',
        'сахарное',
        'песочное'
    ];

    public function установитьВид($вид)
    {
        if (in_array($вид, $this->видыПеченья)) {
            $this->вид = $вид;
            $this->оформитьВывод();
        } else {
            $this->оформитьВывод("К сожалению, у нас нет этого вида печенья.");
        }
    }

    public function узнатьВид()
    {
        $this->оформитьВывод("Вид печенья: <strong>" . $this->вид . "</strong>");
    }

    private function оформитьВывод($сообщение = "")
    {
        echo "<div style='
            padding: 20px; 
            background-color: #f9f9f9;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            text-align: center;
        '>";
        echo $сообщение;
        echo "</div>";
    }
}
$печенье = new Печенье();
$печенье->установитьВид('шоколадная крошка');
$печенье->узнатьВид();


$печенье->установитьВид('снежное');



?>



