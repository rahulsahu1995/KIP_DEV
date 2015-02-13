<?php

class ControllerApiGetsession extends Controller  { 

    public function getsession() {
        $json = array('success' => true);
        $json['sessionid'] = $this->session->getId();

        $this->response->setOutput(json_encode($json));
    }
    
    function __call( $methodName, $arguments ) {
        call_user_func(array($this, "getsession"), $arguments);
    }
}
?>