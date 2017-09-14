 <script type="text/javascript">
<?php 
$oui = 0;
      $non = 0;
     ?>
$(function() {

    Morris.Bar({
        element: 'morris-bar',
        data: [<?php
      require_once('content/classes/classeHome.php');
       $Home = new Home();
      $liste = array();
      
       $liste =  $Home->ScoreOUI();
         $i=1;
         foreach($liste as $val){
          if($i== 10){
             echo "{
               x: 'Q".$i."',
               y: ".$val['score'].",
            }";
           $oui = $oui + intval($val['score']);
          }else{
           echo "{
               x: 'Q".$i."',
               y: ".$val['score'].",
            },";
           $oui = $oui + intval($val['score']);
          }
          $i++;
         }
         ?>],
        xkey: 'x',
        ykeys: ['y'],
        labels: ['OUI']
    });
     Morris.Bar({
        element: 'morris-bar1',
        data: [<?php
       $Home = new Home();
      $liste = array();
       $liste =  $Home->ScoreNON();
         $i=1;
         foreach($liste as $val){
          if($i== 10){
             echo "{
               x: 'Q".$i."',
               y: ".$val['score'].",
            }";
           $non = $non + intval($val['score']);
          }else{
           echo "{
               x: 'Q".$i."',
               y: ".$val['score'].",
            },";
           $non = $non + intval($val['score']);
          }
          $i++;
         }
         ?>],
        xkey: 'x',
        barColors: ['#c92f3c'],
        ykeys: ['y'],
        labels: ['NON']
    });
    //Donut Chart
  var color_array = ['#00739a', '#c92f3c', '#BDBDBD'];
    Morris.Donut({
        element: 'morris-donut',
        colors: color_array,
        data: [{<?php 
           $tout = $oui+$non;
          $ouip = ($oui*100)/$tout;
          $nonp = ($non*100)/$tout;
           echo "label: 'OUI',
            value: ".round($ouip, 1)."
        }, {
            label: 'NON',
            value: ".round($nonp, 1);
        ?>}],
        formatter: function(y) {
            return y + "%"
        }
    });
    $('.code-example').each(function(index, el) {
        eval($(el).text());
    });
});
</script>