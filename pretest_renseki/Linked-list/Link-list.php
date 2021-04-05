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

class LinkList {

   /* Link untuk menuju node pertama dalam list */
   private $firstNode;

   /* Link untuk menuju node terakhir dalam list */
   private $lastNode;

   /* Total node dalam list */
   private $count;

   /* Konstruksi list */
   function __construct() {
      $this->firstNode = NULL;
      $this->lastNode = NULL;
      $this->count = 0;
   }

   /* Untuk membuat list kosong */
   public function isEmpty() {
      return ($this->firstNode == NULL);
   }

   /* Untuk memasukkan data pertama */
   public function insertFirst($data) {
      $link = new ListNode($data);
      $link->next = $this->firstNode;
      $this->firstNode = &$link;

      /* Jika node pertama telah dimasukkan dalam list kemudian atur node terakhir dalam pointer tersebut. */
      if($this->lastNode == NULL) {
         $this->lastNode = &$link;
      }

      $this->count++;
   }

   /* Untuk memasukan node terakhir */
   public function insertLast($data) {
      
      if($this->firstNode != NULL) {
         $link = new ListNode($data);
         $this->lastNode->next = $link;
         $link->next = NULL;
         $this->lastNode = &$link;
         $this->count++;
      } else {
         $this->insertFirst($data);
      }
   }

   /* Untuk menghapus Node pertama */
   public function deleteFirstNode() {
      $temp = $this->firstNode;
      $this->firstNode = $this->firstNode->next;
      
      if($this->firstNode != NULL) {
         $this->count--;
      }

      return $temp;
   }
   /* Untuk menghapus Node terakhir */
   public function deleteLastNode() {
      if($this->firstNode != NULL) {
         if($this->firstNode->next == NULL) {
            $this->firstNode = NULL;
            $this->count--;
         } else {
            $currentNode = $this->firstNode->next;
            $previousNode = $this->firstNode;

            while($currentNode->next != NULL) {
               $previousNode = $currentNode;
               $currentNode = $currentNode->next;
            }

            $previousNode->next = NULL;
            $this->count--;
         }
      }
   }

   /* Untuk menghapus Node yang ditentukan */
   public function deleteNode($key) {
      $current = $this->firstNode;
      $previous = $this->firstNode;

      while($current->data != $key) {
         if($current->next == NULL) {
            return NULL;
         } else {
            $previous = $current;
            $current = $current->next;
         }
      }

      if($current == $this->firstNode) {
         if($this->count == 1) {
            $this->lastNode = $this->firstNode;
         } else {
            $this->firstNode = $this->firstNode->next;
         }
      } else {
         if($this->lastNode == $current) {
            $this->lastNode = $previous;
         } else {
            $previous->next = $current->next;
         }
      }

      $this->count--; 
   
   }
      
   /* Untuk mencari node dalam list */
   public function find($key) {
      $current = $this->firstNode;

      while($current->data != $key) {
         if($current->next == NULL) {
            return null;
         } else {
            $current = $current->next;
         }
      }

      return $current;
   
   }
   
   /* Untuk mengetahui node yang telah diisi */
   public function readNode($nodePos) {
      if($nodePos <= $this->count) {
         $current = $this->firstNode;
         $pos = 1;

         while($pos != $nodePos) {
            if($current->next == NULL) {
               return null;
            } else {
               $current = $current->next;
            }

            $pos++;
         }
   
         return $current->data;

      } else {
         return NULL;
      }
   }

   /* Untuk mengetahui total node dalam sebuah list */
   public function totalNodes() {
      return $this->count;
   }

   public function readList() {
      $listData = array();
      $current = $this->firstNode;

      while($current != NULL) {
         array_push($listData, $current->readNode());
         $current = $current->next;
      }

      return $listData;
   }

   /* Untuk membalikkan keadaan suatu list */
   public function reverseList() {
      if($this->firstNode != NULL) {
         if($this->firstNode->next != NULL) {
            $current = $this->firstNode;
            $new = NULL;

            while ($current != NULL) {
               $temp = $current->next;
               $current->next = $new;
               $new = $current;
               $current = $temp;
            }
            
            $this->firstNode = $new;
         }
      }
   }
}