<?php
class Hero{
    // acces modified padaoop ada 3 : public, private, protected.

    // atribut / properti
    public $nama = "Alucard";
    public $health = 3200;
    public $damage = 200;
    public $level = 1;

// constructor adalah method yang secara otomatis ketika objek dibuat
public function __construct($nama,$health,$damage)
{
    $this->nama = $nama;
    $this->health = $health;
    $this->damage = $damage;
} 
// method untuk menampilkan info dari hero
    public function getinfo(){
        echo "<br>Nama:" . $this->nama;
        echo "<br> HP:" . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level:" , $this->level;
    }
    // method untuk naik 1 level
    public function levelUp($number){
        $this->level = $this->level + $number;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (50 * $number);
    }
}

// membuat objek dari class hero
$hero1 = new Hero("Alucard",3200,200);

$hero2 = new Hero("Franco",520,50);

$hero1->getinfo();
echo "<hr>";

$hero1->levelUp(4);


$hero1->getinfo();  