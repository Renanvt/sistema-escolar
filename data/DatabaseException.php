
<?php

class DatabaseException extends PDOException {
   
    /**
     * Override constructor and set message and code properties.
     * Workaround PHP BUGS #51742, #39615
     */

    public $code;
    public $message;
    
    public function __construct($message=null, $code=null) {
        $this->message = $message;
        $this->code = $code;
    }
   

}