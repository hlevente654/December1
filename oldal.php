<?php
print_r($_POST);
$lathato = "contents";
$lathatatlan = "none";
$nev = "";
$ujJatek = $lathato;
$Jatek = $lathatatlan;

if(isset($_POST['elkuld'])){

$nev=$_POST['nev'];
$ujJatek = $lathatatlan;
$Jatek = $lathato;

}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <!--<script src="jatek.js"></script>-->

    <link rel="stylesheet" href="style.css">
    <title>Dragon_Age:memory_game</title>
    
</head>
<body>
<div class="container-fluid jumbotron border ">
    <div class="row">
        
            <div class="col-sm">
                
                <table id="jatek" style="visibility:hidden;"><!--látható láthatatlan-->
                    <tr>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_1" onclick="fordit(this.id,this.name)"></td>

                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_2" onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_3" onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_4" onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_5" onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_6" onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_7"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_1_8"onclick="fordit(this.id,this.name)"></td>
                    </tr>
                    <tr>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_1"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_2"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_3"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_4"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_5"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_6"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_7"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_2_8"onclick="fordit(this.id,this.name)"></td>
                    </tr>
                    <tr>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_1"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_2"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_3"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_4"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_5"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_6"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_7"onclick="fordit(this.id,this.name)"></td>
                        <td><img src="hatter_card.jpg" alt=""  name="hatter" id="hatter_3_8"onclick="fordit(this.id,this.name)"></td>
                    </tr>
                    
                </table>
                <div >
                        <div style="visibility: hidden;" id="lepesSzamlaloDiv">
                            Lépések széma: <p id="lepesSzamlalo"></p>
                        </div>
                        <div id="ujJatekGombDiv">
                            <input type="button" value="új játék" onclick="ujJatek()" id="elkuld" name="elkuld"  >
                        </div>
                    </div>
                <div style="visibility:hidden;" id="eredmenyMentese">
                    <button id="elkuld" type="elkuld" class="btn btn-primary" name="elkuld">Eredmany mentése</button><hr>
                    Név: <input type="text" name="nev" id="nev">
                </div>
                

            </div>
            <div class="col-sm">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th></th>
                                <th scope="col">Név</th>
                                <th scope="col">Lépés</th>
                            </tr>
                            <tbody>

                            </tbody>
                        </thead>
                </table>

            </div>
            
            
    </div>
</div>
</body>
</html>

<script>
    
    var meglevoParokSzama =0;
    let cardsName = new Array ("blackwall_card","blackwall_card","cassandra_card","cassandra_card","solas_card","solas_card","varric_card","varric_card","cole_card","cole_card","cullen_card","cullen_card","leliana_card","leliana_card","sera_card","sera_card","dorian_card","dorian_card","ironbull_card","ironbull_card","josephine_card","josephine_card","vivienne_card","vivienne_card"); 
   
        let cardsNameb = new Array (); 
        let cardsHely = new Array();
        let kattintasokSzama=0;
    let cardsFordit = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    function ujJatek(){
        document.getElementById("ujJatekGombDiv").style.visibility = "hidden";
        document.getElementById("lepesSzamlaloDiv").style.visibility = "visible";
        document.getElementById("jatek").style.visibility = "visible";
        kattintasokSzama =0;
        var i,j;
        for(i = 1;i<4;i++){
            for(j = 1;j<9;j++){
                let eltavolitIndex = (Math.floor(Math.random()*cardsName.length));
                console.log("játék megy")
            //console.log(eltavolitIndex)
                let vm = cardsName.splice(eltavolitIndex,1);
            //console.log(vm)
           //console.log(cardsName)
                cardsHely.push("hatter_"+i+"_"+j);
                cardsNameb.push(vm);
           //console.log(cardsHely)
            }
        }
    }

 var elsoClickHelye=null;
 var elsoClickNeve=null;
 var masodikClickHelye=null;
 var masodikClickNeve=null;

    function fordit(clicked_id,clicked_name){//hatter_1_1,hatter
        kattintasokSzama++;
        document.getElementById("lepesSzamlalo").innerHTML = kattintasokSzama;

            for(i = 0;i<cardsHely.length;i++){
                if(cardsHely[i] == clicked_id){
                    //console.log(cardsHely[i])
                    //console.log(cardsNameb[i])
                    document.getElementById(cardsHely[i]).name = cardsNameb[i]; //kártyák
                    document.getElementById(cardsHely[i]).src = cardsNameb[i]+".jpg";

                    if(elsoClickHelye==null){
                        elsoClickHelye = cardsHely[i];//kártya helye
                        elsoClickNeve = cardsNameb[i];//kártya neve
                        //console.log(elsoClickHelye)
                        //console.log(elsoClickNeve)
                    }else {if(masodikClickHelye==null){
                        masodikClickHelye = cardsHely[i];//kártya helye
                        masodikClickNeve = cardsNameb[i];//kártya neve
                        //console.log(masodikClickHelye)
                        //console.log(masodikClickNeve)
                    }}
                    
                    
                    

                    cardsFordit[i] = 1;
                }
            }
            //már választottam kettőt
            
            
            if(elsoClickHelye!=null && masodikClickHelye!=null){

                console.log("if előtt "+Object.keys(elsoClickNeve)+" "+Object.keys(masodikClickNeve))
                console.log("if előtt "+elsoClickNeve[0]+" "+masodikClickNeve[0])

                        if(elsoClickNeve[0] == masodikClickNeve[0]){

                            console.log("pár")
                            meglevoParokSzama++;
                            //elso rögzítése
                            document.getElementById(elsoClickHelye).name = elsoClickNeve;
                            document.getElementById(elsoClickHelye).src = elsoClickNeve+".jpg";
                            //masodik rögzítése
                            document.getElementById(masodikClickHelye).name = masodikClickNeve;
                            document.getElementById(masodikClickHelye).src = masodikClickNeve+".jpg";

                            //tárolók tisztítása
                            elsoClickHelye=null;
                            elsoClickNeve=null;
                            masodikClickHelye=null;
                            masodikClickNeve=null;
                            
                            
                        }
                        else{
                            //tárolók tisztítása
                            console.log("nincs pár")
                            //elso visszaállítása
                            console.log("elso: "+elsoClickHelye)
                            console.log("masodik: "+masodikClickHelye)
                            setTimeout(function (){
                                document.getElementById(elsoClickHelye).name ="hatter";
                                document.getElementById(elsoClickHelye).src = "hatter_card.jpg";
                                //masodik visszaállítása
                                document.getElementById(masodikClickHelye).name = "hatter";
                                document.getElementById(masodikClickHelye).src = "hatter_card.jpg";

                                elsoClickHelye=null;
                                elsoClickNeve=null;
                                masodikClickHelye=null;
                                masodikClickNeve=null;
                            },1000);

                        }
                }
                console.log(meglevoParokSzama)
        if(meglevoParokSzama == 12){
            document.getElementById("eredmenyMentese").style.visibility = "visible";
            document.getElementById("lepesSzamlaloDiv").style.visibility = "visible";
            document.getElementById("jatek").style.visibility = "hidedn";
        }
    

    }
    
</script>