# Data Structure in php
here put all codes of using data-structure in php 

First type is :
## linked list
### What is a linked list?
A linked list is a collection of objects known as nodes. Each node is connected to the next node with a
link, which is nothing but an object reference. This is an example of a singly linked list. The last
node contains the next link of a NULL, so that it marks the end of the list:
#### linked list struction of single node 
```php
class NodeList{
    public $node;
    public $next;
    function __construct( $data ){
        $this->node = $data;
    }
}
```

```php
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

```
