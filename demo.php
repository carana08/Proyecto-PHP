<?php
$nombre = "César";
$isDev= true;
$age = 18;
$cadena = "Hola " . $nombre . " con una edad de " . $age;
define("LOGO_PHP", "https://www.php.net/images/logos/new-php-logo.svg");
$is_Old = $age > 30;
// $ouputAge = $is_Old ? "Eres viejo " : "Eres joven";

$ouputAge = match(true){
    $age < 3    => "Eres un bebé 🍼",
    $age < 12   => "Eres un niño 👦",
    $age < 18   => "Eres un adolescente 👦",
    $age === 18 => "Eres mayor de edad 🍺",
    $age < 30   => "Eres joven 😎",
    $age < 60   => "Eres adulto 👨",
    default     => "Hueles más a madera que a fruta 👴",
};

$bestLanguages = ['java', 'php', 'javascript', 'python'];
$bestLanguages[] = 'ruby';
$bestLanguages[2] = 'c#';

$persona = [
    'nombre' => 'César',
    'edad' => 18,
    'profesion' => 'Desarrollador',
    'lenguajes' => ['php', 'javascript', 'python']
];


?>
<h3>El mejor lenguaje es <?=  $bestLanguages[0]?></h3>

<ul> Lista de lenguajes
    <?php foreach($bestLanguages as $language): ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>
    
</ul>

<!-- <?php if($is_Old): ?>
    <h2> Eres viejo </h2>

<?php elseif($isDev): ?>
    <h2> No eres viejo pero eres desarrollador 😢 </h2>

<?php else: ?>
    <h2> Eres joven Felicidades!!!!!!!!!!! </h2>
<?php endif; ?> -->

<!-- <h2><?= $ouputAge ?></h2> -->

<h2><?=$ouputAge ?></h2>

<img src= "<?=LOGO_PHP ?>" alt="Logo PHP" width="200" >
<h1><?= $cadena;?></h1>

<style>
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-content: center;
    }
</style>
