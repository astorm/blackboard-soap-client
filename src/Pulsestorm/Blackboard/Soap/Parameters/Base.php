<?php
namespace Pulsestorm\Blackboard\Soap\Parameters;
class Base
{
    public function serializeForParam()
    {
        $body       = '<ns1:' . static::NAME . ' xmlns:ns2="' . static::NAMESPACE_XSD . '">';
        foreach ($this->getData() as $key => $arg) {
            $body .= '<ns2:' . $key . '>' . $arg . '</ns2:' . $key . '>';
        }
        $body .= '</ns1:filter>';		        
        return $body;
    }
}
