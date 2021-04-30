<?php
#struct of node in linked-list data-structure
class NodeList{
    public $node;
    public $next;
    function __construct( $data ){
        $this->node = $data;
    }
}

# operation process linked list
class NodeLinkedList{

    #firstNode that will be added to it every once add book
    public $_firstNode = null;

    # add new node
    function addNewNode( $data ){
        #instance new struct to add node to it
        $newNode = new NodeList($data);

        #if no node added before
        if($this->_firstNode === null):
            # add first add to NodeList
            $this->_firstNode = $newNode;
        else:
            # transfer data in nodelist to @var currentNode
            $currentNode = $this->_firstNode;

            #forloop data safed in struct node  where next not equal null
            while($currentNode->next !== null ){
                # add last node not have next  to @var currentNode
                $currentNode = $currentNode->next;
            }
            #set next prop to new node add
            $currentNode->next = $newNode;
        endif;
    }
    function displayLinkedListStruct(){
        while( $this->_firstNode !== null){
            echo  "Node is {$this->_firstNode->node}<br/>";
            $this->_firstNode = $this->_firstNode->next;
        }
    }
}


$addBook = new NodeLinkedList();
$addBook->addNewNode('book1');
$addBook->addNewNode('book2');
$addBook->addNewNode('book3');
$addBook->addNewNode('book4');
$addBook->displayLinkedListStruct();