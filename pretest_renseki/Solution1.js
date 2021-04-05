function solution($m)

{

     // var_dump($m);

     $counter = 0;

     while ( $m ) {

         $m = $m->next;

         $counter++;

     }





    //   var_dump($counter);

     return $counter;

}