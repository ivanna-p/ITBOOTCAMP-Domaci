
<!-- DODATO ZA DOMACI -->
<style>
    div{
        border:2px solid  black;
        width:400px;
        height:400px;
        padding: 5px;
        text-align: center;
        display:inline-block;
        margin:5px;
        vertical-align: top;
    }
    img{
        height:200px;
    }
</style>

<?php 

//KOD SA CASA

    class Proizvod{
        public $id, $ime,$slika,$opis,$naslov, $cena, $grupa;

        function __construct($niz){

            $this->id = $niz['id'];
            $this->ime = $niz['ime'];
            $this->slika = $niz['slika'];
            $this->opis = $niz['opis'];
            $this->naslov = $niz['naslov'];
            $this->cena = $niz['cena'];
            $this->grupa = $niz['grupa'];
        }

        function prikazi_proizvod(){
            echo "<div>";
            echo "<h1 class='naslov_proizvoda'>$this->naslov - $this->grupa</h1>";
            echo "<img src='".$this->slika."' alt='slika'/><br/>";
            echo "<a href='detaljnije.php?id=$this->id'>Detaljnije</a>";
            echo "</div>";
        }

        function prikazi_proizvod_detaljnije() {
            echo "<h1>$this->naslov</h1>";
            echo "<img src='$this->slika' alt='slika'>";
            echo "<p>$this->opis</p>";
            echo "<p>Cena proizvoda: $this->cena rsd</p>";
        }
    }

    class ListaProizvoda{
        public $p;


        function __construct(){
            $this->p = [];
        }

        function dodaj_proizvode($podaci){
            for($i=0; $i<count($podaci); $i++){
                $pr = new Proizvod($podaci[$i]);
                array_push($this->p, $pr);
            }

        }

        function dodaj_4_proizvoda($proizvod0, $proizvod1, $proizvod2, $proizvod3){
            $this->p[0] = new Proizvod($proizvod0);
            $this->p[1] = new Proizvod($proizvod1);
            $this->p[2] = new Proizvod($proizvod2);
            $this->p[3] = new Proizvod($proizvod3);
        }

        function prikazi_sve_proizvode($grupa = ""){

            if($grupa === ''){
                foreach($this->p as $jedan_proizvod)
                    $jedan_proizvod->prikazi_proizvod();    
            }else{
                foreach($this->p as $jedan_proizvod)
                    if($jedan_proizvod->grupa == $grupa)
                        $jedan_proizvod->prikazi_proizvod();
            }
        }

        function prikazi_jedan_proizvod_detaljnije($id){
            for($i=0; $i<count($this->p); $i++){
                if($this->p[$i]->id == $id)
                    $this->p[$i]->prikazi_proizvod_detaljnije();
            }
        }

// DODATO ZA DOMACI

        function pribavi_grupe(){
            $grupe = array_map(function ($proizvod){
                return $proizvod -> grupa;
            },
            $this -> p
            );
            return array_unique($grupe);
        }
    }

    class WebSite{

        private $lista_proizvoda;

        function __construct($podaci){
            $this -> lista_proizvoda = new ListaProizvoda();
            $this -> lista_proizvoda->dodaj_proizvode($podaci);
        }

        function header(){
            echo "<h2><a href=index.php>Dobrodosli u web shop!</a></h2>";
        }
         
        function footer(){
            echo "<h2>Bolje vas nasli!</h2>";
        }

        function meni(){
            echo "<ul>";
            $grupe = $this -> lista_proizvoda -> pribavi_grupe();
            foreach($grupe as $grupa){
                echo "<li><a href='index.php";
                if($grupa == ""){
                    echo "'>Svi proizvodi";
                } else {
                    echo "?grupa=$grupa'>$grupa";
                }
                echo "</a></li>";
            }
            echo "</ul>";
        }

        function prikazi_sadrzaj($naziv_grupe){
            $this -> lista_proizvoda -> prikazi_sve_proizvode($naziv_grupe);
        }

        function prikazi_sadrzaj_za_proizvod($id){
            $this -> lista_proizvoda -> prikazi_jedan_proizvod_detaljnije($id);
        }

    }
?>
