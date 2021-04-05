<?php 

class ListNode {

   public $data; /* Untuk mengadakan data */
   public $next; /* Link untuk menuju node berikutnya */

   function __construct($data) { /* Konstruksi node */
      $this->$data = $data;
      $this->$next = NULL;
   }

   function readNode() { /* Untuk menjelaskan node yang ada */
      return $this->data;
   }

}


// $m = A -> B -> C -> D ->;

// function solution($m)

// {

// // var_dump($m);

// $counter = 0;

// while ( $m ) {

// $m = $m->next;

// $counter++;

// }





// //   var_dump($counter);

// return $counter;
