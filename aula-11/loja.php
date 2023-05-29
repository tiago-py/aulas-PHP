<?php
    class Loja{
        var $item;

        function adicionar($produto, $quantidade){
            if(isset ($this -> item[$produto])){
                $this -> item[$produto]+=$quantidade;
            }else{
                $this -> item[$produto]=$quantidade;
            }
        }
        
        function remover($produto, $quantidade){
            if($this -> item[$produto]>$quantidade){
                $this -> item[$produto]-=$quantidade;
                return true;
            }else{
                return false;
            }
        }
        
    }
?>