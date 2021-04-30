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
